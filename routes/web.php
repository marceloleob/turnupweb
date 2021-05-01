<?php

use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
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
// Route::get('locale/{locale}', function ($locale) {
// 	// set new language
// 	Session::put('locale', $locale);
// 	// go back
// 	return redirect()->back();
// });


/**
 * Rotas do Site
 */
Route::group(['namespace' => 'Site'], function () {
	// Home
	Route::get('/', [HomeController::class, 'index'])->name('home');
	// About
	Route::get('about', [AboutController::class, 'index'])->name('about');
	// Contact
	Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
	Route::post('contact', [ContactController::class, 'send'])->name('contact.send');
	// Route::get('email-company', 'ContactController@testCompany');
	// Route::get('email-customer', 'ContactController@testCustomer');

	// Resume
	// Route::get('resume-marcelo-leopold', 'ResumeController@index')->name('resume');
});
