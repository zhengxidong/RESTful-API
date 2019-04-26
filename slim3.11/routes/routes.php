<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
//require_once dirname(__FILE__)."/../pear/model/require.php";

$app->get('/test', function($request, $response, $args){
    //$userInfo = UserModel::last();
    //var_dump($userInfo);
    //exit;
    //return $response->write($userInfo->username);
	return $response->write("Hello, Slim!");
});