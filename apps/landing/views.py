import jingo

from devmo import SECTION_USAGE, SECTION_ADDONS, SECTION_MOBILE, SECTION_WEB
from feeder.models import Bundle, Feed


def home(request):
    """Home page."""
    twitter_bundles = [ s.twitter for s in SECTION_USAGE ]
    tweets = Bundle.objects.recent_entries(twitter_bundles)[:5]

    updates = []
    for s in SECTION_USAGE:
        updates += Bundle.objects.recent_entries(s.updates)[:1]

    return jingo.render(request, 'landing/home.html', {
        'updates': updates, 'tweets': tweets})


def addons(request):
    """Add-ons landing page."""
    extra = {
        'discussions': Feed.objects.get(
            shortname='amo-forums').entries.all()[:4],
        'comments': Feed.objects.get(
            shortname='amo-blog-comments').entries.all()[:4],
    }
    return common_landing(request, section=SECTION_ADDONS, extra=extra)


def apps(request):
    """Applications landing page."""
    return jingo.render(request, 'landing/apps.html')


def docs(request):
    """Docs landing page."""
    return jingo.render(request, 'landing/docs.html')


def mobile(request):
    """Mobile landing page."""
    return common_landing(request, section=SECTION_MOBILE)


def web(request):
    """Web landing page."""
    return common_landing(request, section=SECTION_WEB)


def common_landing(request, section=None, extra=None):
    """Common code for landing pages."""
    if not section:
        raise NotImplementedError

    updates = Bundle.objects.recent_entries(section.updates)[:5]
    tweets = Bundle.objects.recent_entries(section.twitter)[:5]

    data = {'updates': updates, 'tweets': tweets}
    if extra:
        data.update(extra)

    return jingo.render(request, 'landing/%s.html' % section.short, data)
