<?php
require 'vendor/autoload.php';
require_once('../classes/User.php');

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app = AppFactory::create();
$openapi = \OpenApi\Generator::scan(['./']);
header('Content-Type: application/x-yaml');
echo $openapi->toYaml();


$users = array(
    new User(1, 'John Doe', 'john@example.com'),
    new User(2, 'Jane Smith', 'jane@example.com')
);


$app->get('/users', function (Request $request, Response $response, $args) use ($users) {
    return $response->withJson($users);
});


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
