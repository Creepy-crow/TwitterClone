<?php

Auth::routes();

Route::get('/', 'HomeController@show')->name('home');

Route::group(['middleware' => ['web', 'auth']], function (){
Route::get('/home','TweetsController@index')->name('home');
Route::get('/users','UsersController@show')->name('users');
Route::get('/users/{id}', 'UsersController@info')->name('info');
Route::get('/create','TweetsController@show')->name('create');
Route::post('/create', 'TweetsController@create')->name('add');
Route::get('/update/{id}','TweetsController@edit')->name('edit');
Route::put('/update/{id}','TweetsController@update')->name('update');
Route::get('/edit/{id}','CommentsController@edit')->name('editComment');
Route::put('/edit/{id}','CommentsController@update')->name('updateComment');
Route::get('/comments/{tweetId}/{userId}', 'CommentsController@show')->name('comments');
Route::post('/comments', 'CommentsController@create')->name('new-comments');
Route::get('/comments/{tweetId}', 'CommentsController@index')->name('allComments');
});

//Route::resource('twiits', 'TweetsController' );
