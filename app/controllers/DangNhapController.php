<?php
/**
* 
*/
class DangNhapController extends BaseController
{
	
	public function  getIndex(){
       return View::make('doanvien.login');
	}

	public function postKiemTraDangNhap(){
      
        
        $id_dv=$_POST['id_dv'];
        $pass_dv =$_POST['pass_dv'];
        
        $member = DB::table('members')->select('id','fullname')->where('id','=',$id_dv)->where('pass','=',$pass_dv)->get();
       
       
        
        if($member==null){
        	return Response::json(0);
        }
        else {
        	Session::put('id_dv',$member[0]->id);
            Session::put('name_dv',$member[0]->fullname);
            return Response::json(1);
        	
        }
	}

    public function getDangNhapThanhCong(){
        return Redirect::to('/trang-chu');
    }
    public function getLoginAdmin(){
        return View::make('quanly.login');
    }
    
    public function postKiemTraDangNhapAdmin(){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $admin = DB::table('management')->select('username','fullname')->where('username',$username)->where('pass',$password)->get();

        if($admin==null){
            return Response::json(0);
        }
        else{
            Session::put('username',$admin[0]->username);
            Session::put('fullname',$admin[0]->fullname);

            return Response::json(1);
        }
    }
    public function getDangNhapThanhCongAdmin(){
        if(Session::has('username')){
            return Redirect::to('/admin/home');
        }
        else{
            return Redirect::to('/admin/dang-nhap/login-admin');
        }
    }
}
?>