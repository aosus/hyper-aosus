<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'password' => getenv('REDIS_HOST_PASSWORD'),
    'port' => 6379,
  ),
  'passwordsalt' => getenv('PASSWORD_SALT'),
  'secret' => getenv('SECRET'),
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => 'cloud.aosus.org',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => getenv('NEXTCLOUD_VERSION'),
  'overwrite.cli.url' => 'http://localhost',
  'default_phone_region' => 'SA',
  'dbname' => getenv('POSTGRES_DB'),
  'dbhost' => getenv('POSTGRES_HOST'),
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => getenv('POSTGRES_USER'),
  'dbpassword' => getenv('POSTGRES_PASSWORD'),
  'installed' => true,
  'instanceid' => getenv('INSTANCE_ID'),
  'overwriteprotocol' => 'https',
  'mail_from_address' => getenv('MAIL_ADDRESS'),
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_domain' => getenv('MAIL_DOMAIN'),
  'mail_smtpsecure' => 'tls',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpauth' => 1,
  'mail_smtphost' => getenv('SMTP_HOST'),
  'mail_smtpport' => '25',
  'mail_smtpname' => getenv('SMTP_USER_NAME'),
  'mail_smtppassword' => getenv('SMTP_PASSWORD'),
  'maintenance' => getenv('MAINTENANCE') ?: false,
  'loglevel' => 2,
  'config_is_read_only' => true,
  'app_install_overwrite' => 
  array (
    0 => 'user_saml',
    1 => 'drawio',
    2 => 'collectives',
  ),
  'theme' => '',
);