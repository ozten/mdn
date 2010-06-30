import jingo

from devmo import SECTION_USAGE, SECTION_MOBILE, SECTION_WEB
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
    return jingo.render(request, 'landing/addons.html')


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


def common_landing(request, section=None):
    """Common code for landing pages."""
    if not section:
        raise NotImplementedError

    updates = Bundle.objects.recent_entries(section.updates)[:5]
    tweets = Bundle.objects.recent_entries(section.twitter)[:5]

    return jingo.render(request, 'landing/%s.html' % section.short, {
        'updates': updates, 'tweets': tweets})
