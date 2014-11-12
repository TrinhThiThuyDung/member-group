<?php
class DoanVien extends Eloquent{
	protected $table='members';

	public function danhgia(){
		return $this->hasOne('danhgia');
	}

	public static function thongtin($id_dv){
		
		$thongtin = DB::table('members')->where('id','=',$id_dv)->get();

		return $thongtin;
	}

	
} 
?>