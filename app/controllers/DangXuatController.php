<?php
/**
* 
*/
class DangXuatController extends BaseController
{
	
	public function dangXuatMember()
	{
		if (Session::has('id_dv')) {
			Session::forget('id_dv');
			Session::forget('name_dv');
			return Redirect::to('/trang-chu');
		}
	}
	public function dangXuatAdmin(){
		if (Session::has('admin')) {
			//
		}
	}
}
?>