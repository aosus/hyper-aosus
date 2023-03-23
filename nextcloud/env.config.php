<?php
$CONFIG = array (
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
  'dbtype' => 'pgsql',
  'overwrite.cli.url' => 'http://localhost',
  'default_phone_region' => 'SA',
  'dbname' => getenv('POSTGRES_DB'),
  'dbhost' => getenv('POSTGRES_HOST'),
  'dbport' => '',
  'dbuser' => getenv('POSTGRES_USER'),
  'dbpassword' => getenv('POSTGRES_PASSWORD'),
  'instanceid' => getenv('INSTANCE_ID'),
  'mail_from_address' => getenv('MAIL_ADDRESS'),
  'mail_domain' => getenv('MAIL_DOMAIN'),
  'mail_smtphost' => getenv('SMTP_HOST'),
  'mail_smtpname' => getenv('SMTP_USER_NAME'),
  'mail_smtppassword' => getenv('SMTP_PASSWORD'),
  'maintenance' => getenv('MAINTENANCE') ?: false,
);