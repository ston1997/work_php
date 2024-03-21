<?php
require 'vendor/autoload.php';

$app = new Slim\App();

// Redirect root URL to Swagger UI
$app->get('/', function ($request, $response, $args) {
    return $response->withRedirect('public/dist/index.html', 301);
    return $response->withRedirect('public/redoc.html', 301);

});

$app->run();
