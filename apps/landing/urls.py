from django.conf.urls.defaults import *


urlpatterns = patterns('landing.views',
    url(r'^$', 'home', name='home'),
)
