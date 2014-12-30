<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function homeDoanVien(){
		$noti = ThongBao::getAllNoti();
		$news = News::getAllNews();
        
		return View::make('doanvien.index')->with('noti',$noti)->with('news',$news);
	}
	public function adminHome(){
		if(!(Session::has('id_admin'))){
			return Redirect::to('/admin/dang-nhap/login-admin');
		}
		else{
			$id_admin = Session::get('id_admin');
			if($id_admin==1){
				return View::make('quanly.search-mem');
			}
			elseif($id_admin==2){
				$noti = ThongBao::getAllNoti();
				$news = News::getAllNews();

				return View::make('quanly.trangchu-tintuc')->with('noti',$noti)->with('news',$news);
			}
			elseif($id_admin==3){
				return View::make('quanly.trangchu-danhgia');
			}
			elseif($id_admin==4){
				return View::make('quanly.trangchu-hoidap');
			}
			
		}
		
	}

}
