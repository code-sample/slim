<?php

namespace bootstrap\api;

use Slim\App;


// require_once 'app/routes.php';
// require_once __DIR__ . '/../app/routes.php';

$app = new App();

$app->add('routes', function($app)
{
	require_once __DIR__.'/../app/routes.php';
});

// $app->get('/hello/{name}', function ($request, $response, $args) {

//     return $response->write("Hello, " . $args['name']);

//     // return $response;

// });




