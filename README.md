# Fiscal Note Marketing Site

## Requirements

- Node v8.11.1
- [Yarn](https://yarnpkg.com/)
- [Composer](https://getcomposer.org/)

## Setup

### Craft

1. Set your Document Root to the `web` folder
1. Create a named virtual host for [fiscalnote.test](http://fiscalnote.test)
1. Create a database and MySQL user
1. Run `cp .env.example .env`
1. Update `.env` with your local DB credentials
1. Install Composer packages: `composer install`
1. Import the DB utilizing the [Craft Scripts](#craft-scripts)
1. Navigate to [http://fiscalnote.test/admin](http://fiscalnote.test/admin) to access the CP (credentials in 1Password)

### Assets

1. Run `yarn install`
1. Assets within Craft are stored remotely in an Amazon S3 bucket owned by FiscalNote. If the credentials for this volume in the Asset Settings are missing, they're in 1Password.

## Workflow

Source files are in the `./src` directory and are compiled to `./web/assets`. This is a change from Blendid's default setup since Craft `./web` instead of `./public`. Refer to [Blendid](http://github.com/vigetlabs/blendid) for details on individual gulp tasks.

**Primary workflow:** To run a clean-and-compile of all assets, launch a local server and start watching for file changes:

```bash
yarn blendid
```

## Tailwind

We are using the Tailwind utility-first framework for generating classes. This is configured in `/tailwind.js`, and controls all the design system's colors, spacing, typography and more. For documentation regarding this configuration file and the utility classes that Tailwind generates, refer to [their docs here](https://v0.tailwindcss.com/docs/what-is-tailwind/).

## PurgeCSS

We are pairing Tailwind with PurgeCSS in order to remove any unused selectors from the final build. This production-only task uses a regex matching strategy, so it is important to include any classes that are dynamically built (and therefore do not fully appear in the code) in a comment like this:

```html
<div class="sm:w-{{ blockWidth }}"> ... </div>
{# purgecss sm:w-1/2, sm:w-1/4 #}
```

This task is configured to find CSS classes used in both `/templates` and `/assets/js`.

## Deploying
The servers deploy from [https://github.com/FiscalnoteMarketing/FiscalNoteMarketing](https://github.com/FiscalnoteMarketing/FiscalNoteMarketing), so if you are working on the `vigetlabs` fork, you'll need to push upstream.

### Links
- [http://fiscalnote.staging.vigetx.com](http://fiscalnote.staging.vigetx.com)
- [http://fiscalnote.production.vigetx.com](http://fiscalnote.production.vigetx.com)

### Staging
Update the `staging` branch and run:
`bin/deploy staging`

To connect to SSH, run:
`bin/deploy staging connect`

### Production
Update the `production` branch and run:
`bin/deploy production`

To connect to SSH, run:
`bin/deploy production connect`

## Craft Scripts

We are utilitzing [Craft Scripts](https://github.com/nystudio107/craft-scripts) to manage database backups and other Craft syncing across environments.

### Setup

1. `cp scripts/craft3-example.env.sh scripts/.env.sh`
1. Update your local values in `.env.sh`. You'll need to _at least_ update the following:
```
LOCAL_ROOT_PATH

LOCAL_DB_NAME
LOCAL_DB_PASSWORD
LOCAL_DB_USER
LOCAL_DB_HOST
LOCAL_DB_PORT
LOCAL_DB_SCHEMA

REMOTE_DB_PASSWORD
```

### Sync DB from production to local environment

Run `scripts/pull_db.sh`


<!-- Aamir -->
    
1. yarn blendid

2.