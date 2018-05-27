<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/bootstrap.php';

use Illuminate\Database\Capsule\Manager as DB;

// echo env('DB_DATABASE');

// var_dump(DB::table('schools')->limit(2)->get());
var_dump(DB::select('SHOW TABLES;'));
