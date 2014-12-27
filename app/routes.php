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

Route::get('/trang-chu',function(){
	return View::make('doanvien.index');
});

Route::controller("dang-nhap","DangNhapController");
Route::controller('admin/dang-nhap','DangNhapController');

/********************Route trang đoàn viên*************************/

Route::get('/trang-chu','HomeController@homeDoanVien');
Route::get('/dang-xuat','DangXuatController@dangXuatMember');

Route::get('/thong-tin-doan-vien','ThongTinController@thongtin');

Route::get('/thong-bao','TinTucController@getAllNoti');
Route::get('/thong-bao/{id_noti}','TinTucController@getNoti');

Route::get('/tin-tuc','TinTucController@getAllnews');
Route::get('/tin-tuc/{id_news}','TinTucController@getNews');

Route::get('/ket-qua-danh-gia/','ThongTinController@getKetQuaDanhGia');
Route::get('hoi-dap/','ThongTinController@askAdmin');

Route::get('/hoi/{ask}','ThongTinController@addQuestion');

/**************************************************/

/****************Route trang quản lý đoàn viên******************/



Route::group(array("prefix"=>"admin"),function(){
	if (!(Session::has("admin"))) {
		return Redirect::to('admin/dang-nhap');
	}
});


Route::get('/admin/home','HomeController@adminHome');


/***************************************************************/