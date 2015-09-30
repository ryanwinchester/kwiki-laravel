<?php

$router->get('/', [
    'uses' => 'KwikiController@makePage',
    'as'   => 'kwiki.index'
]);
$router->get('{one}', 'KwikiController@makePage');
$router->get('{one}/{two}', 'KwikiController@makePage');
$router->get('{one}/{two}/{three}', 'KwikiController@makePage');
$router->get('{one}/{two}/{three}/{four}', 'KwikiController@makePage');
$router->get('{one}/{two}/{three}/{four}/{five}', 'KwikiController@makePage');
$router->get('{one}/{two}/{three}/{four}/{five}/{six}', 'KwikiController@makePage');
$router->get('{one}/{two}/{three}/{four}/{five}/{six}/{seven}', 'KwikiController@makePage');
