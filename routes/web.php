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

Route::get('/', function () {
    return view('welcome');
})->name('top');

// Auth::routes();

// 顧客用のルーティング
Auth::routes([
    'register' => true,
    'reset'    => false,
    'verify'   => false
]);

// 顧客のhome（認証後は/homeへ）
Route::middleware('auth:customer')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});


// 管理者用のルーティング
Route::namespace('Employee')->prefix('employee')->name('employee.')->group(function () {
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // 従業員のhome（認証後は/employee/homeへ）
    Route::middleware('auth:employee')->group(function () {
        Route::get('home', 'HomeController@index')->name('home');
    });
});


Route::get('/home', 'HomeController@index')->name('home');
