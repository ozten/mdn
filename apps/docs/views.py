import json
import os.path
import random

from django.conf import settings

from caching.base import cached
import commonware
from dateutil.parser import parse as date_parse
import jingo


log = commonware.log.getLogger('mdn.docs')

def docs(request):
    """Docs landing page."""
    dotd = cached(_get_popular_item, 'mdn_docs_dotd', 24*60*60)
    data = {'dotd': dotd}
    return jingo.render(request, 'docs/docs.html', data)


def _get_popular_item():
    """Get a single, random item off the popular pages list."""
    pages = json.load(open(os.path.join(
        settings.MDC_PAGES_DIR, 'popular.json')))
    #except Exception, e:
    #    log.error(e)
    #    return None

    try:
        page = random.choice(pages)
    except IndexError:
        return None

    # Maybe not the right place, but let's parse the timestamp.
    page['last_edit'] = date_parse(page['last_edit'])

    return page
