import datetime

from django.conf import settings

from jingo import register
import jinja2
import pytz


@register.inclusion_tag('sidebar/twitter.html')
@jinja2.contextfunction
def twitter(context, tweets, limit=5):
    """Twitter box in the sidebar."""
    tweet_data = []
    for tweet in tweets[:limit]:
        (nick, status) = tweet.parsed.summary.split(':', 1)
        try:
            # Bundles should be called "twitter-web" etc.
            section = tweet.feed.bundles.all()[0].shortname.split(
                'twitter-', 1)[1]
        except IndexError:
            section = 'web' # TODO proper fallback?
        published = datetime.datetime(*tweet.parsed.updated_parsed[:6],
                                      tzinfo=pytz.utc)

        tweet_data.append({
            'nick': nick,
            'status': status,
            'section': section,
            'link': tweet.parsed.link,
            'published': published,
        })

    c = dict(context.items())
    c.update({'tweets': tweet_data})
    return c
