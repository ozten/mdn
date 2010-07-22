import json
import os.path
import urllib
from xml.etree import ElementTree

from django.conf import settings
from django.template.defaultfilters import truncatewords
from django.utils.html import strip_tags

import commonware
import cronjobs
from dateutil.parser import parse as parse_date


log = commonware.log.getLogger('mdn.cron')

@cronjobs.register
def mdc_pages():
    """Grab popular pages off MDC/DekiWiki."""

    try:
        pagelist = ElementTree.parse(urllib.urlopen(
            'https://developer.mozilla.org/@api/deki/pages/popular'))
    except Exception, e:
        log.error(e)
        return

    # Grab all English entries except home pages
    # (i.e. all pages with a / in the path)
    log.debug('Grabbing list of popular pages')
    pages = [{'id': p.get('id'),
              'uri': p.find('uri.ui').text,
              'title': p.find('title').text,
              'popularity': p.find('metrics/metric.views').text} for
             p in pagelist.findall('page') if
             p.find('path').text.lower().startswith('en/')]

    for page in pages:
        # Grab content summary
        log.debug('Fetching content for page %s' % page['title'])
        try:
            content = ElementTree.parse(urllib.urlopen(
                'https://developer.mozilla.org/@api/deki/pages/'
                '%s/contents' % page['id']))
        except Exception, e:
            log.error(e)
            return
        page['content'] = truncatewords(strip_tags(content.find('body').text),
                                        100)

        # Grab last author and edit date
        log.debug('Fetching last author for page %s' % page['title'])
        try:
            content = ElementTree.parse(urllib.urlopen(
                'https://developer.mozilla.org/@api/deki/pages/'
                '%s/revisions?limit=1' % page['id']))
        except Exception, e:
            log.error(e)
            return
        page['last_author'] = content.find('page/user.author/nick').text
        page['last_edit'] = content.find('page/date.edited').text


    outputfile = os.path.join(settings.MDC_PAGES_DIR, 'popular.json')
    log.debug('Writing results to JSON file %s' % outputfile)
    json.dump(pages, open(outputfile, 'w'))
