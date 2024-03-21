<?php
require 'vendor/autoload.php';
require_once('../classes/User.php');

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app = AppFactory::create();

// Test users
$users = array(
    new User(1, 'John Doe', 'john@example.com'),
    new User(2, 'Jane Smith', 'jane@example.com')
);

// Get user list
$app->get('/users', function (Request $request, Response $response, $args) use ($users) {
    return $response->withJson($users);
});

// Create new user
$app->post('/users', function (Request $request, Response $response, $args) use ($users) {
    $data = $request->getParsedBody();
    if (!isset($data['name']) || !isset($data['email'])) {
        return $response->withStatus(400)->withJson(['error' => 'Name and email are required']);
    }
    $user = new User(/* параметры */);
    $users[] = $user;
    return $response->withStatus(201)->withJson(['message' => 'User created']);
});

// Get specific user by ID
$app->get('/users/{id}', function (Request $request, Response $response, $args) use ($users) {
    $id = $args['id'];
    foreach ($users as $user) {
        if ($user->id == $id) {
            return $response->withJson($user);
        }
    }
    return $response->withStatus(404)->withJson(['error' => 'User not found']);
});

$app->run();
