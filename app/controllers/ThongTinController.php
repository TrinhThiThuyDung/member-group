<?php 
class ThongTinController extends BaseController{
   public function thongtin(){
   	if(Session::has('id_dv')){

   	$id_dv = Session::get('id_dv');
   	$member = DoanVien::thongtin($id_dv);

   	return View::make('doanvien.infor-mem')->with('member',$member);
   }
   else{
   	return Redirect::to('dang-nhap/index');
   }
   }
   public function getKetQuaDanhGia(){
      if(Session::has('id_dv')){

         $id = Session::get('id_dv');
         $result = DanhGia::getKetQua($id);
         return View::make('doanvien.assessment-results')->with('result',$result);
      }
      else{
         return Redirect::to('dang-nhap/index');
      }
   }
   public function askAdmin(){
      $question = HoiDap::getAll();
      if(Session::has('admin')){
         return View::make('quanly.answer')->with('ask',$question);
      }
      else{
         return View::make('doanvien.ask')->with('ask',$question);
      }
   }
}
?>