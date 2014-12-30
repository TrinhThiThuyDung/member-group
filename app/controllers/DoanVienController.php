<?php 
/**
* 
*/
class DoanVienController extends BaseController
{
	
	public function themDoanVien(){
		return View::make('quanly.add-member');
	}

    public function checkMaDoanVien($nam){
		$id = rand(1000,9999);
		$id_dv = $nam.$id;

		$mem = DoanVien::thongtin($id_dv);
		if($mem==null){
			return $id_dv;
		}
		else{
			return 0;
		}
	}




	public function themDoanVienMoi(){
		$infor = $_POST['data'];
       

		$nam = $infor['nam'];
        $name = $infor['name'];
        $birth = $infor['birth'];
        $class = $infor['lop'];
        $khoa = $infor['khoa'];
        $address = $infor['address'];
        $date = $infor['date'];
        
       
        while(($id_dv = $this->checkMaDoanVien($nam))==0);
     
        $pass = $this->creatPass($birth);
    
        
        DB::table('members')->insert(array(
        	"id"=>$id_dv,
        	"fullname"=>$name,
        	"pass"=>$pass,
        	"birth"=>$birth,
        	"class"=>$class,
        	"khoa"=>$khoa,
        	"address"=>$address,
        	"date_assign"=>$date));
        return Response::json(1);

	}
	
	public function creatPass($birth){
     
        
        $array_date = explode("-", $birth);
        $date_temp = $array_date[2].$array_date[1].$array_date[0];

        return $date_temp;
	}

	public function DoanVienGuongMau(){
		return View::make('quanly.good-mem');
	}

    
    public function LayDanhSachGuongMau(){
      $year = $_POST['year'];
       
       $result = DanhGia::getDanhSachGuongMau($year);
       
       if($result==null){
       	return Response::json(0);
       }
       return Response::json($result);
    }

	public function DoanVienYeuKem(){
		return View::make('quanly.bad-member');
	}


	public function LayDanhSachYeuKem(){
		 $year = $_POST['year'];
       
       $result = DanhGia::getDanhSachYeuKem($year);
       
       if($result==null){
       	return Response::json(0);
       }
       return Response::json($result);
	}

	public function timKiemDoanVien(){
		return View::make('quanly.search-mem');
	}
	public function Timkiem(){
	
$id = Input::get('id');
$name = Input::get('name');
$class = Input::get('lop');
$khoa = Input::get('khoa');
		$result = DoanVien::getThongTinDoanVien($id,$name,$class,$khoa);
		if($result==null){
			return Response::json(0);
		}
		return Response::json($result);
	}
}
?>