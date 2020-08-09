<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;

use Core\database\DataBase;

require __DIR__ . '/vendor/autoload.php';

$conf = require __DIR__ . '/config/database.php';

$db = new DataBase($conf);
$app = AppFactory::create();

require_once __DIR__ . '/core/bootstrap/routes.php';

$app->run();