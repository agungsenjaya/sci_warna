<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes([
	'register' => false,
	'password.reset' => false,
	'reset' => false
]);
Route::GET('/',[
    'uses'  => 'ClientController@home',
    'as'    => 'index.home'
]);
Route::GET('/palet-warna',[
    'uses'  => 'ClientController@palet',
    'as'    => 'palet'
]);
Route::GET('/gallery',[
    'uses'  => 'ClientController@gallery',
    'as'    => 'gallery'
]);
Route::GET('/palet-warna/{a}',[
    'uses'  => 'ClientController@palet_a',
    'as'    => 'palet.a'
]);
Route::GET('/palet-warna/{a}/{b}',[
    'uses'  => 'ClientController@palet_b',
    'as'    => 'palet.b'
]);
Route::GET('/kartu-warna',[
    'uses'  => 'ClientController@kartu',
    'as'    => 'kartu.warna'
]);
Route::GET('/tren-warna',[
    'uses'  => 'ClientController@tren',
    'as'    => 'tren.warna'
]);
Route::GET('/tren-warna/view/{slug}',[
    'uses'  => 'ClientController@tren_view',
    'as'    => 'tren.view'
]);
Route::GET('/simulasi-warna',[
    'uses'  => 'ClientController@simulasi',
    'as'    => 'simulasi.warna'
]);
Route::POST('/simulasi-warna/send',[
    'uses'  => 'ClientController@simulasi_send',
    'as'    => 'simulasi.send'
]);

// Sitemap
Route::get('/sitemap', 'SitemapController@index');
Route::get('/sitemap/tren-warna', 'SitemapController@trends');
Route::get('/sitemap/kartu-warna', 'SitemapController@kartus');
Route::get('/sitemap/palet-warna', 'SitemapController@warnas');
// End Sitemap

Route::GROUP(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::GET('/inspirasi-warna',[
        'uses' => 'InspirasiController@index',
        'as'    => 'index.inspirasi'
    ]);
    Route::GET('/inspirasi-warna/create',[
        'uses' => 'InspirasiController@create',
        'as'    => 'create.inspirasi'
    ]);
    Route::POST('/inspirasi-warna/create/store',[
        'uses' => 'InspirasiController@store',
        'as'    => 'store.inspirasi'
    ]);
    Route::GET('/inspirasi-warna/edit/{id}',[
        'uses' => 'InspirasiController@edit',
        'as'    => 'edit.inspirasi'
    ]);
    Route::GET('/inspirasi-warna/delete/{id}',[
        'uses' => 'InspirasiController@destroy',
        'as'    => 'delete.inspirasi'
    ]);
    Route::GET('/warna',[
        'uses' => 'WarnaController@index',
        'as'    => 'index.warna'
    ]);
    Route::GET('/produk',[
        'uses' => 'ProductController@index',
        'as'    => 'index.produk'
    ]);
    Route::GET('/produk/create',[
        'uses' => 'ProductController@create',
        'as'    => 'create.produk'
    ]);
    Route::POST('/produk/create/store', [
		'uses'	=> 'ProductController@store',
		'as'	=> 'store.produk'
	]);
	Route::GET('/produk/edit/{id}', [
		'uses'	=> 'ProductController@edit',
		'as'	=> 'edit.produk'
	]);
	Route::GET('/produk/delete/{id}', [
		'uses'	=> 'ProductController@destroy',
		'as'	=> 'delete.produk'
    ]);
    Route::GET('/kartu',[
		'uses'	=> 'KartuController@index',
		'as'	=> 'index.kartu'
	]);
    Route::GET('/kartu/create',[
		'uses'	=> 'KartuController@create',
		'as'	=> 'create.kartu'
	]);
	Route::POST('/kartu/create/store',[
		'uses'	=> 'KartuController@store',
		'as'	=> 'store.kartu'
	]);
	Route::GET('/kartu/edit/{id}',[
		'uses'	=> 'KartuController@edit',
		'as'	=> 'edit.kartu'
	]);
	Route::POST('/kartu/edit/update/{id}',[
		'uses'	=> 'KartuController@update',
		'as'	=> 'update.kartu'
	]);
	Route::GET('/kartu/delete/{id}',[
		'uses'	=> 'KartuController@destroy',
		'as'	=> 'delete.kartu'
	]);
	Route::GET('/trend',[
		'uses'	=> 'TrendController@index',
		'as'	=> 'index.trend'
	]);
	Route::GET('/trend/create',[
		'uses'	=> 'TrendController@create',
		'as'	=> 'create.trend'
	]);
	Route::POST('/trend/create/store',[
		'uses'	=> 'TrendController@store',
		'as'	=> 'store.trend'
	]);
	Route::GET('/trend/edit/{id}',[
		'uses'	=> 'TrendController@edit',
		'as'	=> 'edit.trend'
	]);
	Route::POST('/trend/edit/update/{id}',[
		'uses'	=> 'TrendController@update',
		'as'	=> 'update.trend'
	]);
});