<?php 
/**
* 
*/
class DanhGia extends Eloquent
{
	protected $table='assessment';
	
	public static function getKetQua($id){
		$result = self::where('id_mem',$id)->get();
		return $result;
	}
}
?>