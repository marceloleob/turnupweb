<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

/**
 * Change Language
 */
Route::get('locale/{locale?}', function ($locale) {
	// set new language
	Session::put('locale', $locale);
	// go back
	return redirect()->back();
});


/**
 * Rotas do Site
 */
Route::group(['namespace' => 'Site'], function () {
	// Home
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('home', 'HomeController@index');

	// Contact Us
	Route::get('contato', 'ContactController@index')->name('contact');
	Route::post('contato', 'ContactController@send')->name('contact');

});
