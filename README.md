# wvuonline

[![CircleCI](https://circleci.com/gh/wvu-online/wvuonline.svg?style=shield)](https://circleci.com/gh/wvu-online/wvuonline)
[![Dashboard wvuonline](https://img.shields.io/badge/dashboard-wvuonline-yellow.svg)](https://dashboard.pantheon.io/sites/8fb52aa5-5525-4d73-9b84-f2d86faf1da2#dev/code)
[![Dev Site wvuonline](https://img.shields.io/badge/site-wvuonline-blue.svg)](http://dev-wvuonline.pantheonsite.io/)

## Getting Started

1. Generate a [GitHub personal access token](https://help.github.com/articles/creating-a-personal-access-token-for-the-command-line/).
2. Create new site in Lando, `lando init github --recipe=pantheon`
3. `cd repo_dir`
4. Run `composer install` from either your repo directory or `/web`
5. Make sure you have node, npm/yarn and optionally/recommended [AVN](https://github.com/wbyoung/avn) 
6.Generate front-end assets `cd web/themes/custom/wvuonline2018`
7. If not using AVN, run `./install-node.sh`
8. Run `yarn install`

## Front-End Information
Theme is built using FourKitchens/Emulsify

### NPM Tasks
- postinstall: `find node_modules/ -name '*.info' -type f -delete`
- install-tools: `npm install --force"`
- uninstall-tools: `rm -r node_modules;`,
- build: `gulp` 
- build:dev: `gulp build:dev`
- serve: `gulp serve`
- watch: `gulp watch`

 
## Configuration
All configuration is managed using Drupal's built in Configuration Management `/admin/config/development/configuration/` or via Drush.

### Exporting Config
**Do not import config before exporting your work. You will lose all of your changes.**

_Export config_
via UI:
1. `admin/config/development/configuration/full/update`
2. Select Config Source - sync in this case
3. (Optional) Backup config incase things go awry. **Do not commit backups to VCS**
4. Commit to VCS as usual.

via Drush:
1. `lando drush cex`
2. Commit to VCS as usual.

_Import config_
1. `git pull`
2. `composer install`
3. `lando drush updb`
4. `lando drush cim`

## VCS and CI
All features should be their own branch. Reference issue numbers in commit messages.

CircleCI will fire on push to GitHub and build assets for Pantheon. [More Information](https://pantheon.io/docs/guides/build-tools/). Multi-dev environments will be created for PRs and CI-Builds.
