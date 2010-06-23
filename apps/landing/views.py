import jingo


def home(request):
    """Home page."""
    return jingo.render(request, 'landing/home.html')


def mobile(request):
    """Mobile landing page."""
    return jingo.render(request, 'landing/mobile.html')


def web(request):
    """Web landing page."""
    return jingo.render(request, 'landing/web.html')
