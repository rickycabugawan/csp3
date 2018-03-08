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

Route::get('/','ArticleController@listHomeItems');
Route::get('/label/{category}','ArticleController@listCategory');
Route::get('/search/{search}','ArticleController@listSearch');
Route::get('/archive/{archive}','ArticleController@listArchive');
Route::get('/articles/{id}','ArticleController@showArticle');
Route::get('/random','ArticleController@randomArticle');
Route::post('/comments', 'CommentController@storeComment');
Route::post('/replies', 'ReplyController@storeReply');
Route::post('/comments/{id}', 'CommentController@destroyComment');
Route::post('/replies/{id}', 'ReplyController@destroyReply');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
