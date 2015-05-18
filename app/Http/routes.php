<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::patterns(['id' => '[0-9]+']);

Route::get('/', 'WelcomeController@index');

Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'categories'], function() {
        Route::get('{category?}',[
            'as' => 'categories', 
            'uses' => 'AdminCategoriesController@index'
        ]);
        Route::post('', [
            'as' => 'new_category', 
            'uses' => 'AdminCategoriesController@create'
        ]);
        Route::put('{category}', [
            'as' => 'edit_category', 
            'uses' => 'AdminCategoriesController@update'
        ]);
        Route::delete('{category}', [
            'as' => 'delete_category', 
            'uses' => 'AdminCategoriesController@delete'
        ]);
    });
    Route::group(['prefix' => 'products'], function() {
        Route::get('{product?}',[
            'as' => 'products', 
            'uses' => 'AdminProductsController@index']
        );
        Route::post('', [
            'as' => 'new_product', 
            'uses' => 'AdminProductsController@create'
        ]);
        Route::put('{product}', [
            'as' => 'edit_product', 
            'uses' => 'AdminProductsController@update'
        ]);
        Route::delete('{product}', [
            'as' => 'delete_product', 
            'uses' => 'AdminProductsController@delete'
        ]);
    });    
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
