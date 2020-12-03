<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:api', 'cors'])->group(function () {

		// songs
		Route::prefix('songs')->group(function () {
				Route::match(['get', 'options'], '/', 'Console\Api\SongsController@index')->name('api_console_songs');
				Route::get('/most-requested', 'Console\Api\SongsController@mostRequested')->name('api_console_songs_most_requested');
				Route::get('/{id}', 'Console\Api\SongsController@view')->name('api_console_songs_view');
		});

		// artists
		Route::prefix('artists')->group(function () {
				Route::get('/', 'Console\Api\ArtistsController@index')->name('api_console_artists');
				Route::get('/{id}', 'Console\Api\ArtistsController@view')->name('api_console_artists_view');
		});

		// languages
		Route::prefix('languages')->group(function () {
				Route::get('/', 'Console\Api\LanguagesController@index')->name('api_console_languages');
				Route::get('/{id}', 'Console\Api\LanguagesController@view')->name('api_console_languages_view');
		});

		// tags
		Route::prefix('tags')->group(function () {
				Route::get('/', 'Console\Api\TagsController@index')->name('api_console_tags');
				Route::get('/{id}', 'Console\Api\TagsController@view')->name('api_console_tags_view');
		});

		// playlist
		Route::prefix('playlist')->group(function () {
				Route::get('/', 'Console\Api\PlaylistController@index')->name('api_console_playlist');
				Route::post('/', 'Console\Api\PlaylistController@addSong')->name('api_console_playlist_post');

				Route::get('/{id}/delete', 'Console\Api\PlaylistController@deleteSong')->name('api_console_playlist_delete');

				Route::delete('/{id}', 'Console\Api\PlaylistController@deleteSongSubmit')->name('api_console_playlist_delete_delete');
		});

});
