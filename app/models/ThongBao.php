<?php
class ThongBao extends Eloquent{
	protected $table='noti';

	public static function getAllNoti(){
        $noti = self::all();
        return $noti;
	}

	public static function getNoti($id_noti){
		$noti = self::find($id_noti);
		return $noti;
	}
	public static function xoaThongBao($id){
		$news = self::where('id',$id)->delete();
	}
	
}
?>