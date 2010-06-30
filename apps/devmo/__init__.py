from tower import ugettext_lazy as _


class SECTION_ADDONS:
    short = 'addons'
    pretty = _(u'Add-ons')
    twitter = 'twitter-addons'
    updates = 'updates-addons'

class SECTION_APPS:
    short = 'apps'
    pretty = _(u'Applications')
    twitter = 'twitter-apps'
    updates = 'updates-apps'

class SECTION_MOBILE:
    short = 'mobile'
    pretty = _(u'Mobile')
    twitter = 'twitter-mobile'
    updates = 'updates-mobile'

class SECTION_WEB:
    short = 'web'
    pretty = _(u'Web')
    twitter = 'twitter-web'
    updates = 'updates-web'

SECTION_USAGE = _sections = (SECTION_ADDONS, SECTION_APPS, SECTION_MOBILE,
                             SECTION_WEB)
SECTIONS = dict((section.short, section) for section in _sections)
SECTIONS_TWITTER = dict((section.twitter, section) for section in _sections)
SECTIONS_UPDATES = dict((section.updates, section) for section in _sections)
