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

Route::middleware(['auth'])->group(function () {

	// console
	Route::prefix('console')->group(function () {

		// home
		Route::get('/', 'Console\HomeController@index')->name('console_home');

		// songs
		Route::prefix('songs')->group(function () {
		    Route::get('/', 'Console\SongsController@index')->name('console_songs');
			Route::get('/most-requested', 'Console\SongsController@mostRequested')->name('console_songs_most_requested');
			Route::get('/most-recent', 'Console\SongsController@mostRecent')->name('console_songs_most_recent');
			Route::get('/{id}', 'Console\SongsController@view')->name('console_songs_view');
		});

		// artists
		Route::prefix('artists')->group(function () {
		    Route::get('/', 'Console\ArtistsController@index')->name('console_artists');
			Route::get('/{id}', 'Console\ArtistsController@view')->name('console_artists_view');
		});

		// languages
		Route::prefix('languages')->group(function () {
		    Route::get('/', 'Console\LanguagesController@index')->name('console_languages');
			Route::get('/{id}', 'Console\LanguagesController@view')->name('console_languages_view');
		});

		// tags
		Route::prefix('tags')->group(function () {
		    Route::get('/', 'Console\TagsController@index')->name('console_tags');
			Route::get('/{id}', 'Console\TagsController@view')->name('console_tags_view');
		});

		// playlist
		Route::prefix('playlist')->group(function () {
		    Route::get('/', 'Console\PlaylistController@index')->name('console_playlist');
			Route::post('/', 'Console\PlaylistController@addSong')->name('console_playlist_post');
			Route::get('/{id}/delete', 'Console\PlaylistController@deleteSong')->name('console_playlist_delete');
			Route::delete('/{id}', 'Console\PlaylistController@deleteSongSubmit')->name('console_playlist_delete_delete');
		});

	});

	// player
	Route::get('/player', 'Player\PlayerController@index')->name('player_player');

	// admin
	Route::prefix('admin')->group(function () {

		// tags
		Route::prefix('tags')->group(function () {
		    Route::get('/', 'Admin\TagsController@edit')->name('admin_tags_edit');
			Route::put('/', 'Admin\TagsController@update')->name('admin_tags_update');
		});

	});
});

Auth::routes();
