<?php 
class QuanLy extends Eloquent{
	protected $table='management';
	public static function getAdminThongTin($username){
		$admin = self::where('username',$username);
		return $admin;
	}
}
?>