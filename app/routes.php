<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('doanvien.index');
});

Route::get('/login',function(){
	return View::make('doanvien.login');
});

Route::get('/infor-mem',function(){
	return View::make('doanvien.infor-mem');
});

Route::get('/assessment-result',function(){
	return View::make('doanvien.assessment-results');
});

Route::get('/ask-and-answer',function(){
	return View::make('doanvien.question');
});

Route::get('/admin/login-manage',function(){
	return View::make('quanly.login');
});

Route::get('/admin/add-members',function(){
	return View::make('quanly.add-member');
});

Route::get('/admin/search-member',function(){
	return View::make('quanly.search-mem');
});
Route::get('/admin/good-member-list',function(){
	return View::make('quanly.good-mem');
});

Route::get('/admin/not-school-fee-member-list',function(){
	return View::make('quanly.not-fee');
});

Route::get('/admin/assessment-class',function(){
	return View::make('quanly.assessment-class');
});

Route::get('/admin/post-news',function(){
	return View::make('quanly.post-news');
});

Route::get('/admin/index',function(){
	return View::make('quanly.admin-index');
});

Route::get('/admin/ask-and-answer',function(){
	return View::make('quanly.answer');
});