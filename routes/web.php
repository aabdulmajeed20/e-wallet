<?php

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
// Route::get('/register', function() {
//     return view('register');
// });

// use MongoDB\Client as Mongo;
// Route::get('mongo', function(Request $request) {
//     $collection = (new Mongo)->mydatabase->mycollection;
//     return $collection->find()->toArray();
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'TestController@index');
