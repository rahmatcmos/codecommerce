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
        Route::get('create', [
            'as'   => 'create_category',
            'uses' => 'AdminCategoriesController@create'
        ]);
        Route::post('create', [
            'as'   => 'new_category', 
            'uses' => 'AdminCategoriesController@store'
        ]);
        Route::get('{category}/edit', [
            'as'   => 'edit_category',
            'uses' => 'AdminCategoriesController@edit'
        ]);
        Route::put('{category}', [
            'as'   => 'update_category', 
            'uses' => 'AdminCategoriesController@update'
        ]);
        Route::get('{category}/delete', [
            'as'   => 'confirm_delete_category',
            'uses' => 'AdminCategoriesController@destroy'
        ]);
        Route::delete('{category}', [
            'as'   => 'delete_category', 
            'uses' => 'AdminCategoriesController@delete'
        ]);
        Route::get('{category?}',[
            'as'   => 'categories', 
            'uses' => 'AdminCategoriesController@index'
        ]);
    });
    Route::group(['prefix' => 'products'], function() {
        Route::get('create', [
            'as'   => 'create_product',
            'uses' => 'AdminProductsController@create'
        ]);
        Route::post('create', [
            'as'   => 'new_product', 
            'uses' => 'AdminProductsController@store'
        ]);
        Route::get('{product}/edit', [
            'as'   => 'edit_product',
            'uses' => 'AdminProductsController@edit'
        ]);
        Route::put('{product}', [
            'as'   => 'update_product', 
            'uses' => 'AdminProductsController@update'
        ]);
        Route::get('{product}/delete', [
            'as'   => 'confirm_delete_product',
            'uses' => 'AdminProductsController@destroy'
        ]);
        Route::delete('{product}', [
            'as'   => 'delete_product', 
            'uses' => 'AdminProductsController@delete'
        ]);
        Route::get('{product?}',[
            'as'   => 'products', 
            'uses' => 'AdminProductsController@index']
        );
    });    
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
