<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/bootstrap.php';

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\Model as Eloquent;

/*
 * example DB
 */

class Todo extends Eloquent {}
class School extends Eloquent { public $timestamps = false; }

echo env('DB_DATABASE');
var_dump(DB::table('schools')->limit(2)->get());
var_dump(DB::select('SHOW TABLES;'));
