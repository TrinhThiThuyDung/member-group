<?php 
/**
* 
*/
class DanhGia extends Eloquent
{
	protected $table='assessment';
	
	public function DoanVien(){
		return $this->belongsTo('DoanVien');
	}

	public static function getDanhSachGuongMau($year){
		if($year == 1){
			$query = "SELECT members.id,members.fullname,members.class,assessment.ky1 FROM members,assessment 
			WHERE assessment.ky1 = 'Xuất sắc' or assessment.ky1 = 'Tốt'"; 
		}
		else if($year == 2){
			$query = "SELECT members.id,members.fullname,members.class,assessment.ky2 FROM members,assessment 
			WHERE assessment.ky2 = 'Xuất sắc' or assessment.ky2 = 'Tốt'"; 
		}
		
		else{
			$query = "SELECT members.id,members.fullname,members.class,assessment.ky1,assessment.ky2 FROM members,assessment 
			WHERE (assessment.ky1 = 'Xuất sắc' or assessment.ky1 = 'Tốt') and (assessment.ky2='Xuất sắc' or assessment.ky2 = 'Tốt')"; 
		}

		$result = DB::select($query);
		return $result;
        
	}
     
     public static function getDanhSachYeuKem($year){
     	if($year == 1){
			$query = "SELECT members.id,members.fullname,members.class,assessment.ky1 FROM members,assessment 
			WHERE assessment.ky1 = 'Yếu' or assessment.ky1 = 'Kém'"; 
		}
		else if($year == 2){
			$query = "SELECT members.id,members.fullname,members.class,assessment.ky2 FROM members,assessment 
			WHERE assessment.ky2 = 'Yếu' or assessment.ky2 = 'Kém'"; 
		}
		
		else{
			$query = "SELECT members.id,members.fullname,members.class,assessment.ky1,assessment.ky2 FROM members,assessment 
			WHERE (assessment.ky1 = 'Yếu' or assessment.ky1 = 'Kém') and (assessment.ky2='Yếu' or assessment.ky2 = 'Kém')"; 
		}

		$result = DB::select($query);
		return $result;
     }



	public static function getKetQua($id){
		$result = self::where('id_mem',$id)->get();
		return $result;
	}
}
?>