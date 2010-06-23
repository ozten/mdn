import cgi
import datetime
import urlparse

from .urlresolvers import reverse

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
    return reverse(viewname, args=args, kwargs=kwargs)


@register.filter
def urlparams(url_, hash=None, **query):
    """
Add a fragment and/or query paramaters to a URL.

New query params will be appended to exising parameters, except duplicate
names, which will be replaced.
"""
    url_ = urlparse.urlparse(url_)
    fragment = hash if hash is not None else url_.fragment

    items = []
    if url_.query:
        for k, v in cgi.parse_qsl(url_.query):
            items.append((k, v))
    for k, v in query.items():
        items.append((k, v))

    items = [(k, unicode(v).encode('raw_unicode_escape')) for
             k, v in items if v is not None]

    query_string = urlencode(items)

    new = urlparse.ParseResult(url_.scheme, url_.netloc, url_.path,
                               url_.params, query_string, fragment)
    return jinja2.Markup(new.geturl())
