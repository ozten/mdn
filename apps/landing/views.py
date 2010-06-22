import jingo


def home(request):
    """Home page."""
    return jingo.render(request, 'landing/home.html')
