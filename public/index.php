<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// $app->get('/', function (Request $request, Response $response, array $args) {
//     dd($request);
// });

$app->get('/', 'app\controllers\HomeController:index');
$app->get('/user/update/{id}', 'app\controllers\UserController:show');

$app->run();