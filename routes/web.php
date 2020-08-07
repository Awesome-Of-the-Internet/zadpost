<?php

use App\Http\Controllers\VoteController;
use App\Http\Controllers\CommentController;
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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'searchController@search');

Route::resource('/subscribe', 'SubscribeUsersController');
Route::resource('/posts', 'PostsShowController');

Route::resource('/arabic', 'arabicController');
Route::resource('/books', 'booksController');
Route::resource('/drasat', 'drasatController');
Route::resource('/plastien', 'plastienController');
Route::resource('/newscoll', 'newscollController');
Route::resource('/israel', 'israelController');
Route::resource('/translate', 'translateController');
Route::resource('/video', 'videoController');
Route::resource('/worldNews', 'worldNewsController');
Route::resource('/egyptnews', 'EgyptionController');


Route::resource('/StoreUrl', 'YoutupeVideoController');

Auth::routes();
Route::resource('/UserInfo', 'UserInfoController');
Route::resource('/dashboard', 'UserDashboardController');


Route::group(['middleware' => 'admin'], function() {
    Route::PUT('/UserStatus/{id}', 'UserStatusController@updateinfo');
    Route::resource('/UserStatus', 'UserStatusController');
});

Route::group([ 'middleware' => 'AuthAdEd'], function() {
    Route::PUT('/AdminDashboard/{id}', 'AdminPanelController@updateinfo');
    Route::resource('/AdminDashboard', 'AdminPanelController');
});


Route::middleware(['auth'])->group(function () {
    Route::post('comments/{News}', [CommentController::class, 'store']);
    Route::post('votes/{entityId}/{type}', [VoteController::class, 'vote']);
});


Route::get('news/{news}/comments', [CommentController::class, 'index']);
Route::get('comments/{comment}/replies', [CommentController::class, 'show']);








