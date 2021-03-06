<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/bootstrap.php';

use Illuminate\Database\Capsule\Manager as DB;
use GuzzleHttp\Client  as HttpClient;
use PHPHtmlParser\Dom;

$getopts = new Fostam\GetOpts\Handler();
$getopts->addOption('debug')->long('debug')->description('show some logs');
$getopts->parse();

dd($getopts->get());
// to do here
