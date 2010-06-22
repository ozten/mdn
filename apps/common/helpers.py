import datetime

from django.core import urlresolvers

from jingo import register
import jinja2


@register.function
def page_title(title):
    return u'%s | Mozilla Developer Network' % title


@register.function
def thisyear():
    """The current year."""
    return jinja2.Markup(datetime.date.today().year)


@register.function
def url(viewname, *args, **kwargs):
    """Helper for Django's ``reverse`` in templates."""
    return urlresolvers.reverse(viewname, args=args, kwargs=kwargs)
