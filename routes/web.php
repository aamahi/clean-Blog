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

Route::get('','cleanBlog@home')->name('home');
//Route::get('{id}','cleanBlog@post');

Route::get('/addCategories','cleanBlog@addCategories')->name('addCategories');
Route::Post('/addCategories','cleanBlog@addCategoriesP');

Route::get('/allCategory','cleanBlog@allCategory')->name('allCategory');

Route::get('/edit/{id}','cleanBlog@edit')->name('edit');
Route::post('/edit/{id}','cleanBlog@updateCategory');

Route::get('/delete/{id}','cleanBlog@delete')->name('delete');

Route::get('/write_post','cleanBlog@write_post')->name('write_post');
Route::post('/write_post','cleanBlog@write_post_p');
