<?php


namespace Core\database;

use Illuminate\Database\Capsule\Manager as Capsule;


class DataBase
{
    public function __construct($dbConf)
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => $dbConf['driver'],
            'host'      => $dbConf['host'],
            'database'  => $dbConf['database'],
            'username'  => $dbConf['user'],
            'password'  => $dbConf['password'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        $capsule->bootEloquent();
    }
}