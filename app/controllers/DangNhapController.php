<?php
/**
* 
*/
class DangNhapController extends BaseController
{
	
	public function  index(){
       return View::make('doanvien.login');
	}

	public function KiemTraDangNhap(){
      
        
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

    public function DangNhapThanhCong(){
        return Redirect::to('/');
    }
}
?>