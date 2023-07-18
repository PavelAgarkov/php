<?php

require __DIR__ . '/vendor/autoload.php';

use App\App;
use App\Name\Name;


$name = new Name(new App('app'));

$app = $name->getApp();

var_dump($app);
