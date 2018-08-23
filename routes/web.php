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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [
    'uses' => 'PagesController@index',
    'as' => 'layouts.index'
]);

Route::get('/aktualnosci', [
    'uses' => 'PagesController@aktualnosci',
    'as' => 'layouts.posts'
]);

Route::get('/poznajmy-sie', [
    'uses' => 'PagesController@poznajmySie',
    'as' => 'layouts.page'
]);

Route::get('/dlaczego-warto', [
    'uses' => 'PagesController@dlaczegoWarto',
    'as' => 'layouts.page'
]);

Route::get('/oferta', [
    'uses' => 'PagesController@oferta',
    'as' => 'layouts.page'
]);

Route::get('/program-szkoly-rodzenia', [
    'uses' => 'PagesController@programSzkolyRodzenia',
    'as' => 'layouts.page'
]);

Route::get('/kontakt', [
    'uses' => 'PagesController@kontakt',
    'as' => 'layouts.page'
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
