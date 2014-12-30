<?php
class DoanVien extends Eloquent{
	protected $table='members';
    
   
	public function DanhGia(){
		return $this->hasOne('DanhGia','id_mem');
	}

	public static function thongtin($id_dv){
		
		$thongtin = DB::table('members')->where('id','=',$id_dv)->get();

		return $thongtin;
	}

	public static function getThongTinDoanVien($id,$name,$lop,$khoa){
		$query = "SELECT members.* FROM members
		          WHERE members.id = '$id' or members.fullname LIKE '%$name%' or members.class = '$lop' or members.khoa = '$khoa' ";

		$result = DB::select($query);
		return $result;
	}
} 
?>