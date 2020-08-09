<?php

namespace Core\controllers;

use Core\models\User;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Psr7\Request as Psr7Request;

class UserController extends BaseController
{
    public function createUser(Request $request, Response $response)
    {
        $user = new User();
        $data = json_decode($request->getBody($request, $response), true);
        if($user->create($data)) {
            return $this->jsonResponse($request, $response, ['message' => 'success']);
        } else {
            return $this->jsonResponse($request, $response, ['message' => 'error']);
        }
    }
}