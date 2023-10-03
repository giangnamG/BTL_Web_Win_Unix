<?php 
require_once 'autoload.php';
session_start();
use config\core;
use router\Route;

core::init();

Route::Route();


Route::get('/','controllers\user\loginController@index');
Route::post('/','controllers\user\loginController@login');
Route::get('/login','controllers\user\loginController@index');
Route::post('/login','controllers\user\loginController@login');
Route::post('/logout','controllers\user\logoutController@logout');

Route::get('/home','controllers\user\homeController@index');
Route::get('/home/category','controllers\user\homeController@category');
Route::get('/home/category/all','controllers\user\homeController@category');
Route::get('/home/category/men','controllers\user\homeController@category');
Route::get('/home/category/women','controllers\user\homeController@category');
Route::get('/home/category/accessories','controllers\user\homeController@category');

Route::post('/home/search','controllers\user\homeController@search');


Route::get('/admin','controllers\admin\homeAdminController@index');

Route::get('/admin/users','controllers\admin\userController@index');

Route::post('/admin/user/edit','controllers\admin\userController@show'); // get id user
Route::get('/admin/user/edit','controllers\admin\userController@show');
Route::post('/admin/user/update','controllers\admin\userController@update');
Route::post('/admin/user/changePermistion','controllers\admin\userController@changePermistion');

Route::get('/admin/products','controllers\admin\productController@index');
Route::get('/admin/products/create','controllers\admin\productController@create'); //show form 
Route::POST('/admin/products/store','controllers\admin\productController@store'); // store form



Route::get('/migrate','controllers\db\migrateController@index');
Route::get('/seed','controllers\db\seedController@index');
Route::get('/migrateAndSeed','controllers\db\migrateAndSeedController@index');

?>