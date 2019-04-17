<?php
// use \Psr\Http\Message\ServerRequestInterface as Request;
// use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';
//require_once __FILE__."/../../../model/UserModel.class.php";

$config = [
    'settings' => [
        'displayErrorDetails' => true,
    ]
];
$app = new \Slim\App($config);


//$app->config($config);

// $app->get('/test', function($request, $response, $args){
// 	return $response->write("Hello, Slim!");
// });


// $app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
//     $name = $args['name'];
//     $response->getBody()->write("Hello, $name");

//     return $response;
// });

//路由
require_once dirname(__FILE__)."/../../routes/routes.php";

$app->run();
