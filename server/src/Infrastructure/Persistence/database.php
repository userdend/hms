<?php

use Illuminate\Database\Capsule\Manager as Capsule;

function setupDatabase(): Capsule
{
    $capsule = new Capsule();
    $capsule->addConnection([
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'database' => 'hms_db',
        'username' => 'admin',
        'password' => 'admin',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_general_ci',
    ]);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
}