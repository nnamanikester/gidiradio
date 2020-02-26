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
Route::get('/user/{id}', 'ApiGetSpaController@profile_details');
Route::get('/programmes', 'ApiGetSpaController@programmes');
Route::get('/episodes', 'ApiGetSpaController@episodes');
Route::get('/blogs', 'ApiGetSpaController@blogs');
Route::get('/as-it-drops', 'ApiGetSpaController@asitdrops');
Route::get('/oaps', 'ApiGetSpaController@oaps');
Route::get('/roles', 'ApiGetSpaController@roles');
Route::get('/header-images', 'ApiGetSpaController@header_images');
Route::get('/adverts', 'ApiGetSpaController@adverts');

// Single GET APIs
Route::get('/programme/{slug}', 'ApiGetSpaController@single_programme');
Route::get('/episode/{slug}', 'ApiGetSpaController@single_episode');
Route::get('/blog/{slug}', 'ApiGetSpaController@single_blog');
Route::get('/oap/{slug}', 'ApiGetSpaController@single_oap');

// CREATE APIs
Route::post('/role/create', 'ApiPostSpaController@role');
Route::post('/advert/create', 'ApiPostSpaController@advert');
Route::post('/programmes/create', 'ApiPostSpaController@programmes');
Route::post('/episodes/create', 'ApiPostSpaController@episodes');
Route::post('/asitdrops/create', 'ApiPostSpaController@asitdrops');
Route::post('/oaps/create', 'ApiPostSpaController@oaps');


//  UPDATE APIs
Route::post('/role/{id}/update', 'ApiUpdateSpaController@role');
Route::post('/site-settings/{id}/update', 'ApiUpdateSpaController@site_settings');
Route::post('/advert/{id}/update', 'ApiUpdateSpaController@advert');
Route::post('/programme/{id}/update', 'ApiUpdateSpaController@programme');
Route::post('/episode/{id}/update', 'ApiUpdateSpaController@episode');
Route::post('/asitdrop/{id}/update', 'ApiUpdateSpaController@asitdrop');
Route::post('/oap/{id}/update', 'ApiUpdateSpaController@oap');


// DELETE APIs
Route::post('/role/{id}/delete', 'ApiDeleteSpaController@role');
Route::post('/advert/{id}/delete', 'ApiDeleteSpaController@advert');
Route::post('/programme/{id}/delete', 'ApiDeleteSpaController@programme');
Route::post('/episode/{id}/delete', 'ApiDeleteSpaController@episode');
Route::post('/asitdrop/{id}/delete', 'ApiDeleteSpaController@asitdrop');
Route::post('/oap/{id}/delete', 'ApiDeleteSpaController@oap');
