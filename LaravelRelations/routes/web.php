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

Route::get('/', 'HomeController@home')
    ->name('home');


Route::get('/pilot/{id}', 'HomeController@pilot')
    -> name('pilot');

Route::get('/car/new', 'HomeController@createCar')
    -> name('create-car');


Route::post('/car/store', 'HomeController@storeCar')
    -> name('store-car');
