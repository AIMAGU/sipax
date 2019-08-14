<?php

return [
    'class' => 'yii\db\Connection',
	'dsn' => 'pgsql:host=localhost;port=5433;dbname=sipax',
	'username' => 'postgres',
	'password' => 'ocim',
	'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];