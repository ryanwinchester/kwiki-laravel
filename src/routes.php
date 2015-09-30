<?php

// I tested with a for loop and that works fine,
// but I prefer the simplicity of this this.
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
