<?php

use Illuminate\Database\Capsule\Manager as DB;
use Dotenv\Dotenv as Dotenv;

// load .env
$dotenv = new Dotenv(__DIR__);
$dotenv->load();

// load db config
$db = new DB;
$db->addConnection([
    "driver" => 'mysql',
    "host" => env('DB_HOST'),
    "port" => env('DB_PORT'),
    "database" => env('DB_DATABASE'),
    "username" => env('DB_USERNAME'),
    "password" => env('DB_PASSWORD'),
]);
$db->setAsGlobal();
$db->bootEloquent();
