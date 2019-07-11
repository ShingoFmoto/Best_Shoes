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

// ルート
Route::get('/', function () {
    return redirect('/top');
});

Auth::routes();

// ユーザーホーム
Route::get('/home', 'HomeController@index')->name('home');
// トップ
Route::get('/top', 'TopController@index')->name('top');
// メーカー一覧
Route::get('/maker-list', 'MakerListController@index')->name('maker_list');
// メーカー
Route::get('/maker/{id}', 'MakerController@index')->name('maker');
// シューズ
Route::get('/shoes/{id}', 'ShoesController@index')->name('shoes');
// レビュー新規投稿
Route::get('/post/create/{id}', 'PostController@create')->name('posts_create');
Route::post('/post/create/{id}', 'PostController@post')->name('posts_post');
// レビュー詳細
Route::get('/post/{id}', 'PostController@show')->name('posts_show');
// コメント投稿
Route::post('/post/{id}', 'CommentController@store')->name('comments_store');
// レビュー編集、削除
Route::get('/post/post_edit/{id}', 'PostController@edit')->name('posts_edit');
Route::put('/post/post_update/{id}', 'PostController@update')->name('posts_update');
Route::delete('/post/post_delete/{id}', 'PostController@destroy')->name('posts_destroy');
// コメント編集、削除
Route::get('/post/comment_edit/{id}', 'CommentController@edit')->name('comments_edit');
Route::put('/post/comment_update/{id}', 'CommentController@update')->name('comments_update');
Route::delete('/post/comment_delete/{id}', 'CommentController@destroy')->name('comments_destroy');
// 検索結果一覧
Route::get('/search', 'SearchController@index')->name('search_index');
