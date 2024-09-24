<?php

// load the autoloader
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\ViewController;

use App\Router;
use App\HTTP\Response;
use App\HTTP\Request;

Router::Resource(
    url: "/home/{parameter}", 
    controller: HomeController::class
)->exceptMethods(
    methods: ["GET", "POST"]
);


Router::Resource(
    url: "/home/{parameter}", 
    controller: HomeController::class
)->onlyMethods(
    methods: ["GET", "POST"]
);

Router::Get(url: "/home/{id}", target: function (Request $request, Response $response, $id) {
    $response->headers(headers: ["x-custom-header" => md5(string: $id)]);
    return $response->json(data: [$id => $request->get(key: 'id')]);
});

Router::Get(url: "/data/{id}/user/{user_id}", target: function (Request $request, Response $response) {

    $viewController = new ViewController();
    $string = $viewController->merge(id: $request->get('id'), user_id: $request->get(key: 'user_id'));

    return $response->json(data: [
        'message' => $string,
        'id' => $request->get(key: 'id')
    ]);
});

$routes = Router::routes();
echo '<pre>' . print_r($routes, true) . '</pre>';

// Run the router
Router::matchRoute();
