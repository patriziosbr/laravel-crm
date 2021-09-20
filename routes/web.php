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

Auth::routes(['register' => false]);

Route::middleware('auth') //autenticazione
    ->namespace('Admin') //-> direttiva al path Admin/HomeController
    ->name('admin.') // direttiva alla route admin.pizzas.index admin.yournames.show
    ->prefix('admin') //url rotte
    ->group(function() {

        Route::get('/', 'HomeController@index')->name('dashboard');
        Route::resource('company', 'CompanyController');	

        // Route::get("{any?}", "HomeController@index")->where("any", ".*");
    });

Route::get("{any?}", "HomeController@index")->where("any", ".*")->name('home');



