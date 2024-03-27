<?php
return [
  'database' => [
    'host' => 'localhost',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espocrm',
    'user' => 'uzivatel',
    'password' => 'heslo',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => '',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1711533832.587565,
  'passwordSalt' => '8b43ad450a6d63c7',
  'cryptKey' => '7fd33f786bb66d49979bb8ad2b6416c4',
  'hashSecretKey' => 'fb7e4b0046445235e62eb0643b87df8f',
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.4.28',
  'instanceId' => '939742cc-c88d-4d45-8574-5dddcc049fa9'
];
