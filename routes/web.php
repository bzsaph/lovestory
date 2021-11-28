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

Route::get('/','Userscontroller@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Createstory','HomeController@Createstory');
Route::post('/submitstoror','HomeController@submitstoror');
Route::get('/Read/{id}','Userscontroller@Readstory');
Route::post('/Comenttostory','Userscontroller@Comenttostory');
Route::get('Previous/{id}', 'Userscontroller@Previous');
Route::get('Next/{id}', 'Userscontroller@Next');
Route::get('/createcategory', 'Userscontroller@createcategory');
Route::post('/postcategory', 'Userscontroller@postcategory');
Route::post('/suggestion', 'Userscontroller@suggestion');
Route::get('/still', 'Userscontroller@still');
Route::get('/Message', 'Userscontroller@Messages');
