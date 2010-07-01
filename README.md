Mozilla Developer Network
=========================

[Mozilla][Mozilla] Developer Network is the successor of the
[Mozilla Developer Center][MDC]. MDN is a [Django][Django]-based web
application offering resources to developers in the Mozilla Community.

For project goals, specifications, etc., check out the
[MDN Wiki Page][wikimo].

[Mozilla]: http://www.mozilla.org
[MDC]: http://developer.mozilla.org
[Django]: http://www.djangoproject.com/
[wikimo]: https://wiki.mozilla.org/MDN

Getting Started
---------------
### Python
You need Python 2.6. Also, you probably want to run this application in a
[virtualenv][virtualenv] environment.

Run

    easy_install pip

followed by

    pip install -r requirements/prod.txt -r requirements/compiled.txt

to install the required Python libraries.

[virtualenv]: http://pypi.python.org/pypi/virtualenv

### Django
To initialize the database, run:

    ./manage.py syncdb
    schematic migrations/  # run schema migrations and add initial data

and to fetch the initial product details data, run:

    ./manage.py update_product_details

The Internet has plenty of of documentation on setting up a Django application
with any web server. If you need a wsgi entry point, you can find one in
``wsgi/mdn.wsgi``.

[Haystack]: http://haystacksearch.org/

### Cron jobs
You want to update your product details periodically:

    ./manage.py update_product_details  # Mozilla Product Details update

The frequency is up to you, but anything quicker than once per hour is probably overkill.

Also, to update RSS feeds:

    ./manage.py update_feeds

License
-------
This software is licensed under the [Mozilla Tri-License][MPL]:

    ***** BEGIN LICENSE BLOCK *****
    Version: MPL 1.1/GPL 2.0/LGPL 2.1

    The contents of this file are subject to the Mozilla Public License Version
    1.1 (the "License"); you may not use this file except in compliance with
    the License. You may obtain a copy of the License at
    http://www.mozilla.org/MPL/

    Software distributed under the License is distributed on an "AS IS" basis,
    WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
    for the specific language governing rights and limitations under the
    License.

    The Original Code is Mozilla Developer Center.

    The Initial Developer of the Original Code is Mozilla.
    Portions created by the Initial Developer are Copyright (C) 2010
    the Initial Developer. All Rights Reserved.

    Contributor(s):
      Frederic Wenzel <fwenzel@mozilla.com>

    Alternatively, the contents of this file may be used under the terms of
    either the GNU General Public License Version 2 or later (the "GPL"), or
    the GNU Lesser General Public License Version 2.1 or later (the "LGPL"),
    in which case the provisions of the GPL or the LGPL are applicable instead
    of those above. If you wish to allow use of your version of this file only
    under the terms of either the GPL or the LGPL, and not to allow others to
    use your version of this file under the terms of the MPL, indicate your
    decision by deleting the provisions above and replace them with the notice
    and other provisions required by the GPL or the LGPL. If you do not delete
    the provisions above, a recipient may use your version of this file under
    the terms of any one of the MPL, the GPL or the LGPL.

    ***** END LICENSE BLOCK *****

[MPL]: http://www.mozilla.org/MPL/
