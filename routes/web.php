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

// Route::redirect('/', '/admin/comments');

Route::get('/', function () {
  return view('user.comments.index');
});

// admin
Route::namespace('Admin')->group(function () {

  // comments
  Route::resource('/admin/comments', 'CommentController')->only('index', 'edit', 'update', 'destroy')->names('admin.comments');
});

Auth::routes(['verify' => true, 'register' => false]);
