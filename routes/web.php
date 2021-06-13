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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
  return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/forum', function () {
    return view('forum');
});


Route::get('/signin', function () {
  return view('signin');
});

Route::get('/signup', function () {
  return view('signup');
});

Route::get('/postingan', function () {
  return view('postingan');
});

Route::get('/index-signed', function () {
  return view('index-signed');
});

Route::get('/forum-signed', function () {
  return view('forum-signed');
});

Route::get('/postingan-signed', function () {
  return view('postingan-signed');
});

Route::get('/profile-main', function () {
  return view('profile-main');
});

Route::get('/profile-edit', function () {
  return view('profile-edit');
});

Route::get('/profile-act', function () {
  return view('profile-act');
});

Route::get('/forum-post', function () {
  return view('forum-post');
});

Route::get('/forum-edit', function () {
  return view('forum-edit');
});