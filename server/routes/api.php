<?php

use Illuminate\Http\Request;

Route::get('user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
// get topics
Route::get('/topics', 'TopicController@getAllTopics');
// get topics and child messages
Route::get('/topics/{id}', 'TopicController@getTopic');
// add post
Route::post('message', 'TopicController@addPost')->middleware('auth:api');
// create topic
Route::post('topic', 'TopicController@createTopic')->middleware('auth:api');
//delete message
Route::delete('dropMsg/{id}', 'TopicController@dropMsg')->middleware('auth:api');
//drop  topic
Route::delete('dropTopic/{id}', 'TopicController@dropTopic')->middleware('auth:api');

// get menu & sub menu
Route::get('/menu', 'MenuController@getMenu');

//get all anime
Route::get('anime', 'AnimeController@getAllAnime');
// get anime by id
Route::get('anime/{id}', 'AnimeController@getAnimeById');
// get similar anime
Route::get('anime/similar/{str}/{id}', 'AnimeController@getSimilar');
// get anime by param
Route::get('filter/{type}/{name}', 'AnimeController@getAnimeByParam');

// auth register
Route::post('register', 'AuthController@register');

//comments
Route::get('comment/{id}', 'CommentsController@getComment');
Route::post('comment', 'CommentsController@addComment')->middleware('auth:api');

//persons
Route::get('persons', 'PersonController@getPersons');
//person by id
Route::get('persons/{id}', 'PersonController@getPersonById');

//get new by id
Route::get('new/{id}', 'NewsController@getNewById');
//get last news
Route::get('last/news', 'NewsController@getLastNews');