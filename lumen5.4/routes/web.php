<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//dingo api路由
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', ['namespace' => 'App\Http\Controllers\V1'], function($api){
    //测试
    $api->get('test', function(){
        return 'hi Evan';
    });
    $api->get('article', 'ArticleController@index');
});
#$app->get('/', function () use ($app) {
#    return $app->version();
#});
