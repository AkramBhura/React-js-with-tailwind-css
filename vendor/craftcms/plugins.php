<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'clubstudioltd/craft-asset-rev' => 
  array (
    'class' => 'club\\assetrev\\AssetRev',
    'basePath' => $vendorDir . '/clubstudioltd/craft-asset-rev/src',
    'handle' => 'assetrev',
    'aliases' => 
    array (
      '@club/assetrev' => $vendorDir . '/clubstudioltd/craft-asset-rev/src',
    ),
    'name' => 'Asset Rev',
    'version' => '6.0.2',
    'description' => 'A plugin to aid cache-busting in Craft 3',
    'developer' => 'Club Studio Ltd',
    'developerUrl' => 'https://clubstudio.co.uk',
    'documentationUrl' => 'https://github.com/clubstudioltd/craft-asset-rev',
    'changelogUrl' => 'https://github.com/clubstudioltd/craft-asset-rev/blob/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/clubstudioltd/craft-asset-rev/archive/v6.zip',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'craftcms/aws-s3' => 
  array (
    'class' => 'craft\\awss3\\Plugin',
    'basePath' => $vendorDir . '/craftcms/aws-s3/src',
    'handle' => 'aws-s3',
    'aliases' => 
    array (
      '@craft/awss3' => $vendorDir . '/craftcms/aws-s3/src',
    ),
    'name' => 'Amazon S3',
    'version' => '1.0.8',
    'description' => 'Amazon S3 integration for Craft CMS',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/aws-s3',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/aws-s3/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/aws-s3/archive/master.zip',
  ),
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.1.7',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor',
  ),
  'marionnewlevant/twig-perversion' => 
  array (
    'class' => 'marionnewlevant\\twigperversion\\Plugin',
    'basePath' => $vendorDir . '/marionnewlevant/twig-perversion/src',
    'handle' => 'twig-perversion',
    'aliases' => 
    array (
      '@marionnewlevant/twigperversion' => $vendorDir . '/marionnewlevant/twig-perversion/src',
    ),
    'name' => 'Twig Perversion',
    'version' => '2.0.6',
    'schemaVersion' => '1.0.0',
    'description' => 'Making twig do things it really shouldn\'t',
    'developer' => 'Marion Newlevant',
    'developerUrl' => 'http://marion.newlevant.com',
    'documentationUrl' => 'https://github.com/marionnewlevant/craft-twig_perversion/blob/v2/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/marionnewlevant/craft-twig_perversion/v2/CHANGELOG.md',
    'hasCpSection' => false,
  ),
  'angellco/spoon' => 
  array (
    'class' => 'angellco\\spoon\\Spoon',
    'basePath' => $vendorDir . '/angellco/spoon/src',
    'handle' => 'spoon',
    'aliases' => 
    array (
      '@angellco/spoon' => $vendorDir . '/angellco/spoon/src',
    ),
    'name' => 'Spoon',
    'version' => '3.2.4',
    'description' => 'A plugin for Craft to enhance your Matrix fields with groups, tabs and more!',
    'developer' => 'Angell & Co',
    'developerUrl' => 'https://angell.io',
    'documentationUrl' => 'https://github.com/angell-co/spoon/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/angell-co/spoon/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
    'components' => 
    array (
      'fields' => 'angellco\\spoon\\services\\Fields',
      'blockTypes' => 'angellco\\spoon\\services\\BlockTypes',
      'loader' => 'angellco\\spoon\\services\\Loader',
    ),
  ),
  'nystudio107/craft-seomatic' => 
  array (
    'class' => 'nystudio107\\seomatic\\Seomatic',
    'basePath' => $vendorDir . '/nystudio107/craft-seomatic/src',
    'handle' => 'seomatic',
    'aliases' => 
    array (
      '@nystudio107/seomatic' => $vendorDir . '/nystudio107/craft-seomatic/src',
    ),
    'name' => 'SEOmatic',
    'version' => '3.3.28',
    'description' => 'SEOmatic facilitates modern SEO best practices & implementation for Craft CMS 3. It is a turnkey SEO system that is comprehensive, powerful, and flexible.',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com',
    'documentationUrl' => 'https://nystudio107.com/plugins/seomatic/documentation',
    'changelogUrl' => 'https://raw.githubusercontent.com/nystudio107/craft-seomatic/v3/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'frontendTemplates' => 'nystudio107\\seomatic\\services\\FrontendTemplates',
      'helper' => 'nystudio107\\seomatic\\services\\Helper',
      'jsonLd' => 'nystudio107\\seomatic\\services\\JsonLd',
      'link' => 'nystudio107\\seomatic\\services\\Link',
      'metaBundles' => 'nystudio107\\seomatic\\services\\MetaBundles',
      'metaContainers' => 'nystudio107\\seomatic\\services\\MetaContainers',
      'seoElements' => 'nystudio107\\seomatic\\services\\SeoElements',
      'script' => 'nystudio107\\seomatic\\services\\Script',
      'sitemaps' => 'nystudio107\\seomatic\\services\\Sitemaps',
      'tag' => 'nystudio107\\seomatic\\services\\Tag',
      'title' => 'nystudio107\\seomatic\\services\\Title',
    ),
  ),
  'rias/craft-colour-swatches' => 
  array (
    'class' => 'percipioglobal\\colourswatches\\ColourSwatches',
    'basePath' => $vendorDir . '/rias/craft-colour-swatches/src',
    'handle' => 'colour-swatches',
    'aliases' => 
    array (
      '@percipioglobal/colourswatches' => $vendorDir . '/rias/craft-colour-swatches/src',
    ),
    'name' => 'Colour Swatches',
    'version' => '1.3.1',
    'schemaVersion' => '1.0.0',
    'description' => 'Let clients choose from a predefined set of colours.',
    'developer' => 'Percipio Global',
    'developerUrl' => 'https://percipio.london',
    'documentationUrl' => 'https://github.com/percipioglobal/craft-colour-swatches/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/percipioglobal/craft-colour-swatches/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'topshelfcraft/environment-label' => 
  array (
    'class' => 'topshelfcraft\\environmentlabel\\EnvironmentLabel',
    'basePath' => $vendorDir . '/topshelfcraft/environment-label/src',
    'handle' => 'environment-label',
    'aliases' => 
    array (
      '@topshelfcraft/environmentlabel' => $vendorDir . '/topshelfcraft/environment-label/src',
    ),
    'name' => 'Environment Label',
    'version' => '3.2.0',
    'schemaVersion' => '1.0.0',
    'description' => '...so you don\'t forget where you are.',
    'developer' => 'Top Shelf Craft (Michael Rog)',
    'developerUrl' => 'https://topshelfcraft.com',
    'documentationUrl' => 'https://github.com/TopShelfCraft/Environment-Label',
    'changelogUrl' => 'https://raw.githubusercontent.com/TopShelfCraft/Environment-Label/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
    'components' => 
    array (
      'label' => 'topshelfcraft\\environmentlabel\\services\\Label',
    ),
  ),
  'topshelfcraft/wordsmith' => 
  array (
    'class' => 'topshelfcraft\\wordsmith\\Wordsmith',
    'basePath' => $vendorDir . '/topshelfcraft/wordsmith/src',
    'handle' => 'wordsmith',
    'aliases' => 
    array (
      '@topshelfcraft/wordsmith' => $vendorDir . '/topshelfcraft/wordsmith/src',
    ),
    'name' => 'Wordsmith',
    'version' => '3.0.5',
    'schemaVersion' => '0.0.0.0',
    'description' => '...because you have the best words.',
    'developer' => 'Michael Rog',
    'developerUrl' => 'https://topshelfcraft.com',
    'documentationUrl' => 'https://wordsmith.docs.topshelfcraft.com/',
    'changelogUrl' => 'https://raw.githubusercontent.com/topshelfcraft/wordsmith/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
      'emoji' => 'topshelfcraft\\wordsmith\\services\\EmojiService',
      'smith' => 'topshelfcraft\\wordsmith\\services\\WordsmithService',
      'typography' => 'topshelfcraft\\wordsmith\\services\\TypographyService',
    ),
  ),
  'viget/craft-video-embed' => 
  array (
    'class' => 'viget\\videoembed\\VideoEmbed',
    'basePath' => $vendorDir . '/viget/craft-video-embed/src',
    'handle' => 'video-embed',
    'aliases' => 
    array (
      '@viget/videoembed' => $vendorDir . '/viget/craft-video-embed/src',
    ),
    'name' => 'Video Embed',
    'version' => '1.2.2',
    'schemaVersion' => '1.2.1',
    'description' => 'Generate an embed URL from a YouTube or Vimeo URL',
    'developer' => 'Trevor Davis',
    'developerUrl' => 'https://www.viget.com/',
    'documentationUrl' => 'https://github.com/vigetlabs/craft-videoembed/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/vigetlabs/craft-videoembed/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'verbb/super-table' => 
  array (
    'class' => 'verbb\\supertable\\SuperTable',
    'basePath' => $vendorDir . '/verbb/super-table/src',
    'handle' => 'super-table',
    'aliases' => 
    array (
      '@verbb/supertable' => $vendorDir . '/verbb/super-table/src',
    ),
    'name' => 'Super Table',
    'version' => '2.0.14',
    'description' => 'Super-charge your Craft workflow with Super Table. Use it to group fields together or build complex Matrix-in-Matrix solutions.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/super-table',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/super-table/craft-3/CHANGELOG.md',
  ),
  'verbb/field-manager' => 
  array (
    'class' => 'verbb\\fieldmanager\\FieldManager',
    'basePath' => $vendorDir . '/verbb/field-manager/src',
    'handle' => 'field-manager',
    'aliases' => 
    array (
      '@verbb/fieldmanager' => $vendorDir . '/verbb/field-manager/src',
    ),
    'name' => 'Field Manager',
    'version' => '2.0.4',
    'schemaVersion' => '1.0.0',
    'description' => 'Manage your fields and field groups with ease with simple field or group cloning and quicker overall management.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/field-manager',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/field-manager/craft-3/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
  ),
);
