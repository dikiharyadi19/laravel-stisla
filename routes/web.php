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
    return view('partials.dashboard');
});

//Route::resource('pages','PagesController');

Route::get('/404','PagesController@notfound')->name('pages.404');
Route::get('/buttons','PagesController@button')->name('pages.buttons');
Route::get('/chart','PagesController@chart')->name('pages.chartjs');
Route::get('/flag','PagesController@flag')->name('pages.flag');
Route::get('/font','PagesController@font')->name('pages.fontawesome');
Route::get('/forgot','PagesController@forgot')->name('pages.forgot');
Route::get('/general','PagesController@general')->name('pages.general');
Route::get('/icon','PagesController@icon')->name('pages.icon-icons');
Route::get('/login','PagesController@login')->name('pages.login');
Route::get('/register','PagesController@register')->name('pages.register');
Route::get('/reset','PagesController@reset')->name('pages.reset');
Route::get('/simple','PagesController@simple')->name('pages.simple');
Route::get('/table','PagesController@table')->name('pages.table');
Route::get('/toast','PagesController@toast')->name('pages.toast');
Route::get('/component','PagesController@component')->name('pages.component');
Route::get('/credits','PagesController@credits')->name('pages.credits');