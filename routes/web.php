<?php

Auth::routes();

Route::get('/', 'HomeController@show')->name('home');

Route::get('/tweet/','TweetsController@index')->name('tweet');
Route::get('/users','UsersController@show')->name('users');
Route::get('/users/{id}', 'UsersController@info')->name('info');
Route::get('/create','TweetsController@show')->name('create');
Route::post('/create', 'TweetsController@create')->name('add');
Route::get('/comments/{tweetId}/{userId}', 'CommentsController@show')->name('comments');
Route::post('/comments', 'CommentsController@create')->name('new-comments');
Route::get('/comments/{tweetId}', 'CommentsController@index')->name('allComments');

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@home')->name('new-home');
