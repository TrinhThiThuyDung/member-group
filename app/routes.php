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

Route::get('/',function(){
	return View::make('doanvien.index');
});
//Route::post('/dang-nhap-thanh-cong','DangNhapController@dangnhapthanhcong');

Route::get('dang-nhap','DangNhapController@index');
Route::post('kiem-tra-dang-nhap','DangNhapController@KiemTraDangNhap');
Route::post('dang-nhap-thanh-cong','DangNhapController@DangNhapThanhCong');

Route::get('/thong-tin-doan-vien','ThongTinController@thongtin');