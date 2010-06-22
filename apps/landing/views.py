import jingo


def home(request):
    """Home page."""
    return jingo.render(request, 'landing/home.html')


def web(request):
    """Web landing page."""
    return jingo.render(request, 'landing/web.html')
