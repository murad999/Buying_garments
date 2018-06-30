<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', [

	'uses'=>'FrontEndController@index',
	'as'=>'index'

]);



Auth::routes();




Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

//Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/home', [

		'uses'=>'HomeController@index',
		'as'=>'home'
	]);
//Product route.....................................
Route::get('/products',[

	'uses'=>'ProductsController@index',
	'as'=>'products'

]);

Route::get('/products/add',[

	'uses'=>'ProductsController@create',
	'as'=>'products.add'

]);

//Category route.....................................
Route::get('/categories',[

	'uses'=>'CategoriesController@index',
	'as'=>'categories'

]);

Route::post('/categories/store',[

	'uses'=>'CategoriesController@store',
	'as'=>'categories.store'

]);

// Route::get('/categories/edit/{id}',[

// 	'uses'=>'CategoriesController@edit',
// 	'as'=>'categories.edit'

// ]);

Route::post('/categories/update',[

	'uses'=>'CategoriesController@update',
	'as'=>'categories.update'

]);
Route::post('/categories/destroy',[

	'uses'=>'CategoriesController@destroy',
	'as'=>'categories.destroy'

]);

});