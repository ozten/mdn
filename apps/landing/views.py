import jingo

from feeder.models import Bundle, Feed


def home(request):
    """Home page."""
    return jingo.render(request, 'landing/home.html')


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

    # Recent updates.
    updates = Feed.objects.get(shortname='planet-mobile').recent_entries()[:5]

    # Twitter feed.
    tweets = Bundle.objects.get(shortname='twitter-mobile').recent_entries()[:5]

    return jingo.render(request, 'landing/mobile.html', {
        'updates': updates, 'tweets': tweets})


def web(request):
    """Web landing page."""

    # Recent updates.
    updates = Feed.objects.get(shortname='moz-hacks').recent_entries()[:5]

    # Twitter feed.
    tweets = Bundle.objects.get(shortname='twitter-web').recent_entries()[:5]

    return jingo.render(request, 'landing/web.html', {
        'updates': updates, 'tweets': tweets})
