<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});

//untuk menyimpan
$router->post('user', 'UserController@store');

//untuk menampilkan semua data
$router->get('user', 'UserController@index');

//untuk menampilkan salah satu data
$router->get('user/{id}', 'UserController@show');

//untuk mengubah data
$router->put('user/{id}', 'UserController@update');

//untuk menghapus data
$router->delete('user/{id}', 'UserController@destroy');

//untuk menyimpan
$router->post('git', 'GitController@store');

//untuk menampilkan semua data
$router->get('git', 'GitController@index');

//untuk menampilkan salah satu data
$router->get('git/{id}', 'GitController@show');

//untuk mengubah data
$router->put('git/{id}', 'GitController@update');

//untuk menghapus data
$router->delete('git/{id}', 'GitController@destroy');