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
		return Redirect::to('admin/dang-nhap/login-admin');
	}
});


Route::get('/admin/trang-chu','HomeController@adminHome');

Route::get('/admin/dang-xuat','DangXuatController@dangXuatAdmin');

Route::get('/admin/chinh-sua-tin-tuc/{id_loai}/{id_tin}','TinTucController@chinhSuaTinTuc');
Route::post('/admin/cap-nhap/{id_loai}/{id_tin}','TinTucController@CapNhat');

Route::get('/admin/xoa-tin-tuc/{id_loai}/{id_tin}','TinTucController@xoaTinTuc');
Route::get('/admin/dang-tin/','TinTucController@DangTin');
Route::post('/admin/dang-tin-moi','TinTucController@DangTinMoi');

Route::get('/admin/them-doan-vien','DoanVienController@themDoanVien');
Route::post('/admin/them-moi','DoanVienController@themDoanVienMoi');

Route::get('/admin/tim-kiem-doan-vien/','DoanVienController@timKiemDoanVien');
Route::get('/admin/tim-kiem/','DoanVienController@TimKiem');

Route::get('/admin/danh-sach-doan-vien-guong-mau','DoanVienController@DoanVienGuongMau');
Route::post('/admin/danh-sach-guong-mau','DoanVienController@LayDanhSachGuongMau');

Route::get('/admin/danh-sach-doan-vien-yeu-kem','DoanVienController@DoanVienYeuKem');
Route::post('/admin/danh-sach-yeu-kem','DoanVienController@LayDanhSachYeuKem');
/***************************************************************/