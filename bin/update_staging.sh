#!/bin/bash

# Update script for staging server. Takes care of updating code repo, vendor
# dir, and running DB migrations.

HERE=`dirname $0`
GIT=`which git`
PYTHON=`which python2.6`

pushd "$HERE/../" > /dev/null

# pull actual code
$GIT pull origin master

# pull vendor repo
pushd vendor > /dev/null
$GIT pull origin master
$GIT submodule update --init
popd > /dev/null

# Run database migrations.
$PYTHON vendor/src/schematic/schematic migrations/

# Minify assets.
$PYTHON manage.py compress_assets

popd > /dev/null
