#!/usr/bin/env bash

# Install latest Drush 8.
composer global require "drush/drush:8.*"
export PATH="$HOME/.composer/vendor/bin:$PATH"

# Build Behat dependencies.
cd $ROOT_DIR/express_mono/tests/behat
composer install --prefer-dist --no-interaction
earlyexit

# Build Codebase.
cd $ROOT_DIR
drush dl drupal-7.67
mkdir drupal && mv drupal-7.67/* drupal/
mkdir profiles && mv express_mono drupal/profiles/express

# Harden Core.
cd $ROOT_DIR/drupal/modules
rm -rf php aggregator blog book color contact translation dashboard forum locale openid overlay poll rdf search statistics toolbar tracker trigger
earlyexit

# Apply Patches.

# Setup files.
mkdir -p $ROOT_DIR/drupal/sites/default/files/styles/preview/public/gallery/ && chmod -R 777 $ROOT_DIR/drupal/sites
mkdir $ROOT_DIR/tmp && chmod -R 777 $ROOT_DIR/tmp

exit 0
