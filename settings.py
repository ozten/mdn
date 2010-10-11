# Django settings for the reporter project.

import os
import logging

from django.utils.functional import lazy


# Make file paths relative to settings.
ROOT = os.path.dirname(os.path.abspath(__file__))
path = lambda *a: os.path.join(ROOT, *a)

ROOT_PACKAGE = os.path.basename(ROOT)


DEBUG = False
TEMPLATE_DEBUG = DEBUG

SITE_ID = 1

ADMINS = (
    # ('Your Name', 'your_email@domain.com'),
)
MANAGERS = ADMINS

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.', # Add 'postgresql_psycopg2', 'postgresql', 'mysql', 'sqlite3' or 'oracle'.
        'NAME': '',                      # Or path to database file if using sqlite3.
        'USER': '',                      # Not used with sqlite3.
        'PASSWORD': '',                  # Not used with sqlite3.
        'HOST': '',                      # Set to empty string for localhost. Not used with sqlite3.
        'PORT': '',                      # Set to empty string for default. Not used with sqlite3.
        'OPTIONS': {'init_command': 'SET storage_engine=InnoDB',
                    'charset' : 'utf8',
                    'use_unicode' : True,
                   },
    }
}

# Cache Settings
#CACHE_BACKEND = 'caching.backends.memcached://localhost:11211'
CACHE_PREFIX = 'mdn:'
CACHE_COUNT_TIMEOUT = 60  # seconds

# L10n

# If you set this to False, Django will make some optimizations so as not
# to load the internationalization machinery.
USE_I18N = True

# If you set this to False, Django will not format dates, numbers and
# calendars according to the current locale
USE_L10N = True

# Local time zone for this installation. Choices can be found here:
# http://en.wikipedia.org/wiki/List_of_tz_zones_by_name
# although not all choices may be available on all operating systems.
# On Unix systems, a value of None will cause Django to use the same
# timezone as the operating system.
# If running in a Windows environment this must be set to the same as your
# system time zone.
TIME_ZONE = 'America/Los_Angeles'

# Language code for this installation. All choices can be found here:
# http://www.i18nguy.com/unicode/language-identifiers.html
LANGUAGE_CODE = 'en-US'

# Accepted locales
MDN_LANGUAGES = ('en-US', 'de',)
RTL_LANGUAGES = None # ('ar', 'fa', 'fa-IR', 'he')
LANGUAGE_URL_MAP = dict([(i.lower(), i) for i in MDN_LANGUAGES])

# Override Django's built-in with our native names
class LazyLangs(dict):
    def __new__(self):
        from product_details import product_details
        return dict([(lang.lower(), product_details.languages[lang]['native'])
                     for lang in MDN_LANGUAGES])
LANGUAGES = lazy(LazyLangs, dict)()

# Paths that don't require a locale prefix.
SUPPORTED_NONLOCALES = ('media', 'admin')

TEXT_DOMAIN = 'messages'
STANDALONE_DOMAINS = []

# Tells the extract script what files to look for l10n in and what function
# handles the extraction. The Tower library expects this.
DOMAIN_METHODS = {
    'messages': [
        ('apps/**.py',
            'tower.management.commands.extract.extract_tower_python'),
        ('**/templates/**.html',
            'tower.management.commands.extract.extract_tower_template'),
    ],
}

TOWER_KEYWORDS = {'_lazy': None}


# Absolute path to the directory that holds media.
# Example: "/home/media/media.lawrence.com/"
MEDIA_ROOT = path('media')

# URL that handles the media served from MEDIA_ROOT. Make sure to use a
# trailing slash if there is a path component (optional in other cases).
# Examples: "http://media.lawrence.com", "http://example.com/media/"
MEDIA_URL = '/media/'

# URL prefix for admin media -- CSS, JavaScript and images. Make sure to use a
# trailing slash.
# Examples: "http://foo.com/media/", "/media/".
ADMIN_MEDIA_PREFIX = '/admin-media/'

# Make this unique, and don't share it with anybody.
SECRET_KEY = '2y6$4oo&+)xem8_os$i&&)w-6za_461*z*0_po147xg0@04kzv'

# Templates
TEMPLATE_DIRS = (
    path('templates'),
)

# List of callables that know how to import templates from various sources.
TEMPLATE_LOADERS = (
    'django.template.loaders.filesystem.Loader',
    'django.template.loaders.app_directories.Loader',
#     'django.template.loaders.eggs.Loader',
)

TEMPLATE_CONTEXT_PROCESSORS = (
    'django.core.context_processors.auth',
    'django.core.context_processors.debug',
    'django.core.context_processors.media',
    'django.core.context_processors.request',
    'django.core.context_processors.csrf',

    'devmo.context_processors.i18n',
    'devmo.context_processors.phpbb_logged_in',
    'jingo_minify.helpers.build_ids',
)

def JINJA_CONFIG():
    import jinja2
    from django.conf import settings
    from caching.base import cache
    config = {'extensions': ['jinja2.ext.with_', 'jinja2.ext.loopcontrols',
                             'tower.template.i18n', 'caching.ext.cache', ],
              'finalize': lambda x: x if x is not None else ''}
    if 'memcached' in cache.scheme and not settings.DEBUG:
        # We're passing the _cache object directly to jinja because
        # Django can't store binary directly; it enforces unicode on it.
        # Details: http://jinja.pocoo.org/2/documentation/api#bytecode-cache
        # and in the errors you get when you try it the other way.
        bc = jinja2.MemcachedBytecodeCache(cache._cache,
                                           "%sj2:" % settings.CACHE_PREFIX)
        config['cache_size'] = -1 # Never clear the cache
        config['bytecode_cache'] = bc
    return config

# Bundles is a dictionary of two dictionaries, css and js, which list css files
# and js files that can be bundled together by the jingo-minify app.
MINIFY_BUNDLES = {
    'css': {
        'common': (
            'css/screen.css',
        ),
    },
    'js': {
        'common': (
            'js/jquery-1.4.2.min.js',
            'js/init.js',
            'js/gsearch.js',
            'js/webtrends.js',

            # Home Page
            # cycle and slideshow only needed on the home page (or any page
            # featuring the slide show widget).
            'js/jquery.cycle.js',
            'js/slideshow.js',
            'js/TabInterface.js',
            'js/home.js',
        ),
    },
}
JAVA_BIN = '/usr/bin/java'

MIDDLEWARE_CLASSES = (
    'devmo.middleware.LocaleURLMiddleware',

    'django.middleware.common.CommonMiddleware',
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.middleware.csrf.CsrfResponseMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
)

ROOT_URLCONF = '%s.urls' % ROOT_PACKAGE

INSTALLED_APPS = (
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.sites',
    'django.contrib.messages',
    'django.contrib.admin',

    'devmo',
    'docs',
    'feeder',
    'landing',

    'cronjobs',
    'jingo_minify',
    'product_details',
    'tower',
)

# Logging
LOG_LEVEL = logging.DEBUG
HAS_SYSLOG = True # syslog is used if HAS_SYSLOG and NOT DEBUG.
SYSLOG_TAG = "http_app_mdn"
# See PEP 391 and log_settings.py for formatting help. Each section of LOGGING
# will get merged into the corresponding section of log_settings.py.
# Handlers and log levels are set up automatically based on LOG_LEVEL and DEBUG
# unless you set them here. Messages will not propagate through a logger
# unless propagate: True is set.
LOGGING = {
    'loggers': {},
}

# Where to store product details etc.
PROD_DETAILS_DIR = path('lib/product_details_json')
MDC_PAGES_DIR = path('lib/mdc_pages')

# Feed fetcher config
FEEDER_TIMEOUT = 6 # in seconds

# Cookie prefix from PHPBB settings.
PHPBB_COOKIE_PREFIX = 'phpbb3_jzxvr'
