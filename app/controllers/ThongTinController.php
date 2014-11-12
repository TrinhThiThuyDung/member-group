<?php 
class ThongTinController extends BaseController{
   public function thongtin(){
   	$id_dv = Session::get('id_dv');

   	$member = DoanVien::thongtin($id_dv);


   	return View::make('doanvien.infor-mem')->with('member',$member);
   }
}
?>