<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';
//require_once __FILE__."/../../../model/UserModel.class.php";

$config = [
    'settings' => [
        'displayErrorDetails' => true,
    ]
];
$app = new \Slim\App($config);

$app->group('/parkingmeter',function() use ($app){
    $app->group('/v1',function() use ($app){
        //$app->get('/account/test');
        $app->group('/admin',function() use ($app){
            $app->get('/test', function($request, $response, $args){

                return $response->write("Hello, admin!");
            });
        });
        // $app->get('/account/test', function($request, $response, $args){

        //     return $response->write("Hello, Slim!");
        // });
    });
});
// $app->get('/parkingmeter/v1/account/test', function($request, $response, $args){

// 	return $response->write("Hello, Slim!");
// });

// $app->get('/hello/{name}', function (Request $request, Response $response) {
//     $name = $request->getAttribute('name');
//     $response->getBody()->write("Hello, $name");

//     return $response;
// });

// $app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
//     $name = $args['name'];
//     $response->getBody()->write("Hello, $name");

//     return $response;
// });

//路由
//require_once dirname(__FILE__)."/../../routes/routes.php";

$app->run();
