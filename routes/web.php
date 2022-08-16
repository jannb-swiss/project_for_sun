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

Route::get('/', 'PageController@page1')->name('page1');
Route::get('/two', 'PageController@page2')->name('page2');
Route::get('/three', 'PageController@page3')->name('page3');
Route::get('/four', 'PageController@page4')->name('page4');
Route::get('/five', 'PageController@page5')->name('page5');
Route::get('/six', 'PageController@page6')->name('page6');
Route::get('/seven', 'PageController@page7')->name('page7');
Route::get('/eight', 'PageController@page8')->name('page8');
Route::get('/nine', 'PageController@page9')->name('page9');
Route::get('/ten', 'PageController@page10')->name('page10');
