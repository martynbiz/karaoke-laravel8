<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Console;
use App\Http\Controllers\Player;
use App\Http\Controllers\Admin;

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
		Route::get('/', [Console\HomeController::class, 'index'])->name('console_home');

		// songs
		Route::prefix('songs')->group(function () {
		    Route::get('/', [Console\SongsController::class, 'index'])->name('console_songs');
			Route::get('/most-requested', [Console\SongsController::class, 'mostRequested'])->name('console_songs_most_requested');
			Route::get('/most-recent', [Console\SongsController::class, 'mostRecent'])->name('console_songs_most_recent');
			Route::get('/{id}', [Console\SongsController::class, 'view'])->name('console_songs_view');
		});

		// artists
		Route::prefix('artists')->group(function () {
		    Route::get('/', [Console\ArtistsController::class, 'index'])->name('console_artists');
			Route::get('/{id}', [Console\ArtistsController::class, 'view'])->name('console_artists_view');
		});

		// languages
		Route::prefix('languages')->group(function () {
		    Route::get('/', [Console\LanguagesController::class, 'index'])->name('console_languages');
			Route::get('/{id}', [Console\LanguagesController::class, 'view'])->name('console_languages_view');
		});

		// tags
		Route::prefix('tags')->group(function () {
		    Route::get('/', [Console\TagsController::class, 'index'])->name('console_tags');
			Route::get('/{id}', [Console\TagsController::class, 'view'])->name('console_tags_view');
		});

		// playlist
		Route::prefix('playlist')->group(function () {
		    Route::get('/', [Console\PlaylistController::class, 'index'])->name('console_playlist');
			Route::post('/', [Console\PlaylistController::class, 'addSong'])->name('console_playlist_post');
			Route::get('/{id}/delete', [Console\PlaylistController::class, 'deleteSong'])->name('console_playlist_delete');
			Route::delete('/{id}', [Console\PlaylistController::class, 'deleteSongSubmit'])->name('console_playlist_delete_delete');
		});

	});

	// player
	Route::get('/player', [Player\PlayerController::class, 'index'])->name('player_player');

	// admin
	Route::prefix('admin')->group(function () {

		// tags
		Route::prefix('tags')->group(function () {
		    Route::get('/', [Admin\TagsController::class, 'edit'])->name('admin_tags_edit');
			Route::put('/', [Admin\TagsController::class, 'update'])->name('admin_tags_update');
		});

		// songs
		Route::prefix('songs')->group(function () {
		    Route::get('/', [Admin\SongsController::class, 'edit'])->name('admin_songs_edit');
			Route::put('/', [Admin\SongsController::class, 'update'])->name('admin_songs_update');
		});

	});
});

Auth::routes();
