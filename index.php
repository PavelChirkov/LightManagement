<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Lib/Dbclass.php';
require_once __DIR__ . '/Lib/Function.php';

$GLOBALS['db'] = DBCLass::getInstance();

print "Первая версия";
$app = new Boot\App(url_get('path'));
$app->print();
