<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/site-settings', 'ApiGetSpaController@site_settings');
Route::get('/programmes', 'ApiGetSpaController@programmes');
Route::get('/episodes', 'ApiGetSpaController@episodes');
Route::get('/blogs', 'ApiGetSpaController@blogs');
Route::get('/as-it-drops', 'ApiGetSpaController@asitdrops');
Route::get('/oaps', 'ApiGetSpaController@oaps');
Route::get('/roles', 'ApiGetSpaController@roles');
Route::get('/header-images', 'ApiGetSpaController@header_images');
Route::get('/adverts', 'ApiGetSpaController@adverts');

// Single APIs
Route::get('/programme/{slug}', 'ApiGetSpaController@single_programme');
Route::get('/episode/{slug}', 'ApiGetSpaController@single_episode');
Route::get('/blog/{slug}', 'ApiGetSpaController@single_blog');
