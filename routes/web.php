<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'MainController@main');

Route::get('/creating_orders', 'MainController@creating_orders');

Route::get('/sign_in', 'MainController@sign_in');

Route::post('/creating_orders/check', 'MainController@creating_orders_check');
// Route::get('/', function () {
//     return view('welcome');
// });
