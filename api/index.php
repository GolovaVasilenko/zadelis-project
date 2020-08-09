<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;
use Core\database\DataBase;

require __DIR__ . '/vendor/autoload.php';

$conf = require __DIR__ . '/config/database.php';

$db = new DataBase($conf);

$app = AppFactory::create();


$app->get('/', function (Request $request, Response $response, array $args) {
    $payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json');
});

$app->get('/users', function (Request $request, Response $response, array $args) {
    $user = new \Core\models\User();
    $payload = json_encode(['users' => $user->index()], JSON_PRETTY_PRINT);
    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json');
});
$app->post('/user/create', function (Request $request, Response $response, array $args) {
    $user = new \Core\models\User();
    var_dump($request->getBody()->getContents()); die;
    if($user->create($request->getBody())) {
        $payload = json_encode(['answer' => 'success'], JSON_PRETTY_PRINT);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    } else {
        $payload = json_encode(['users' => 'error'], JSON_PRETTY_PRINT);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    }

});

$app->run();