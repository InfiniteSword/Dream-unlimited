<?php

$spConfig['db'] = array(
	'driver' => 'pdo_mysql',   // 驱动类型
	'host' => 'mysql:host=localhost;dbname=bilifun',
	'login' => 'root',
	'password' => 'xiaoyu520',
	'prefix' => 'bf_'  // 数据库前缀
);

$spConfig['db_driver_path'] = SP_PATH.'/Drivers/pdo.php';