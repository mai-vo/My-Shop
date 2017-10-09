<?php 

$router->get('admin/users','UsersController@index');
$router->get('admin/users/add','UsersController@add');
$router->post('admin/users/add','UsersController@store');
$router->get('admin/users/edit','UsersController@edit');
$router->post('admin/users/edit','UsersController@update');
$router->get('admin/users/delete','UsersController@destroy');
$router->get('admin/users/active','UsersController@changeActive');


?>