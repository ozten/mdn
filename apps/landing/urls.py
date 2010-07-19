from django.conf.urls.defaults import *


urlpatterns = patterns('landing.views',
    url(r'^$', 'home', name='home'),
    url(r'^addons/?$', 'addons', name='addons'),
    url(r'^apps/?$', 'apps', name='apps'),
    url(r'^docs/?$', 'docs', name='docs'),
    url(r'^mobile/?$', 'mobile', name='mobile'),
    url(r'^search/?$', 'search', name='search'),
    url(r'^web/?$', 'web', name='web'),
)
