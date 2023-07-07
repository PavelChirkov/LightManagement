<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';


print "Первая версия";
$app = new Boot\App();