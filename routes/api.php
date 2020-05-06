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

Route::namespace('Api')->middleware('api')->group(function () {
    Route::get('/comments', 'CommentController@index')->name('api.comments.index');
    Route::get('/comments/{comment}', 'CommentController@show')->name('api.comments.show');
    Route::put('/comments/{comment}', 'CommentController@update')->name('api.comments.update');
    Route::delete('/comments/{comment}', 'CommentController@destroy')->name('api.comments.destroy');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
