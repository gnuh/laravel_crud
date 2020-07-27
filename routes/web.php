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
});
//Route::get('/contacts', function(){return view('welcome');});
Route::resource('contacts', 'ContactController');

/* LOGIN ROUTES */
Route::get('login', [
    'uses'=>'LoginController@index',
    'as'=>'login'
]);
Route::resource('login', 'LoginController');
Route::post('login', [
    'uses' => 'LoginController@signin',
    'as' => 'login'
]);
Route::get('signout', [
    'uses' => 'LoginController@signout',
    'as' => 'login.out'
]);

/* DASHBOARD*/
Route::middleware(['auth'])->group(function (){
    Route::get('dashboard', 'DashMainController@index');
    Route::get('dashboard/users', [
        'uses'  => 'DashUsersController@index',
        'as'    => 'dashboard.users'
    ]);
    Route::get('dashboard/users/edit/{id}', 'DashUsersController@edit');
    Route::put('dashboard/users/edit/{id}', 'DashUsersController@update');
    Route::get('dashboard/users/create', [
        'uses' => 'DashUsersController@create',
        'as' => 'dashboard.users.create'
    ]);
    Route::post('dashboard/users/create', [
        'uses' => 'DashUsersController@store',
        'as' => 'dashboard.users.store'
    ]);
    Route::delete('dashboard/users/{id}', 'DashUsersController@destroy');
});
