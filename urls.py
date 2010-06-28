from django.conf.urls.defaults import *
from django.contrib import admin

import jingo


admin.autodiscover()

def _error_page(request, status):
    """Render error pages with jinja2."""
    return jingo.render(request, '%d.html' % status, status=status)
handler404 = lambda r: _error_page(r, 404)
handler500 = lambda r: _error_page(r, 500)


urlpatterns = patterns('',
    # Home / landing pages:
    ('', include('landing.urls')),

    # Django admin:
    (r'^admin/', include(admin.site.urls)),
)
