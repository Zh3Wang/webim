<?php
$db['master'] = array(
    'type'       => SPF\Database::TYPE_MYSQLi,
    'host'       => "120.24.24.191",
    'port'       => 3306,
    'dbms'       => 'mysql',
    'type'       => 'mysql',
    'engine'     => 'InnoDB',
    'user'       => "root",
    'password'     => "root",
    'database'       => "test",
    'charset'    => "utf8",
    'setname'    => true,
    'persistent' => false, //MySQL长连接
);
return $db;