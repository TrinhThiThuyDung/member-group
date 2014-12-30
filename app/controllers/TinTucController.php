<?php
/**
* 
*/
class TinTucController extends BaseController
{
	
	
	public function getNoti($id_noti){
		$noti = ThongBao::getNoti($id_noti);
		return View::make('doanvien.noti-detail')->with('noti',$noti);
	}
	public function getNews($id_news){
		$news = News::getNews($id_news);
		return View::make('doanvien.news-detail')->with('news',$news);
	}

	public function getAllNoti(){
        $noti = ThongBao::getAllNoti();
        return View::make('doanvien.noti')->with('noti',$noti);
	}

	public function getAllNews(){
       $news = News::getAllNews();
       return View::make('doanvien.news')->with('news',$news);
	}



	public function xoaTinTuc($id_loai,$id_tin){
		if(!(Session::has('id_admin'))){
				return Redirect::to('/admin/dang-nhap/login-admin');
		}
		else{
       if($id_loai==1){
            ThongBao::xoaThongBao($id_tin);
            return Response::json(1);
       }
       else{
          News::xoaTin($id_tin);
         
          	return Response::json(1);
       
       }
   }
	}
	public function chinhSuaTinTuc($id_loai,$id_tin){
		if(!(Session::has('id_admin'))){
				return Redirect::to('/admin/dang-nhap/login-admin');
		}
		if($id_loai==1){
			$news = ThongBao::getNoti($id_tin);
			return View::make('quanly.edit-news')->with('news',$news)->with('id_loai',$id_loai);
		}
		else{
			$news= News::getNews($id_tin);
			return View::make('quanly.edit-news')->with('news',$news)->with('id_loai',$id_loai);
		}
		
	}
	public function CapNhat($id_loai,$id_tin){
		$title = $_POST['title'];
		$content = $_POST['content'];
        $date = getdate(date("U"));
        if($id_loai==1){
      
        	DB::table('noti')->where('id',$id_tin)->update(array("title"=>$title,"content"=>$content,"date"=>$date['year'].'-'.$date['mon'].'-'.$date['mday']));

        }
        else{
        	DB::table('news')->where('id',$id_tin)->update(array("title"=>$title,"content"=>$content,"date"=>$date['year'].'-'.$date['mon'].'-'.$date['mday']));
        }
        return Redirect::to('admin/trang-chu');
	}

	public function DangTin(){
		if(!(Session::has('id_admin'))){
				return Redirect::to('/admin/dang-nhap/login-admin');
		}
		return View::make('quanly.post-news');
	}
	public function DangTinMoi(){
		if(!(Session::has('id_admin'))){
				return Redirect::to('/admin/dang-nhap/login-admin');
		}
		
		$loai = $_POST['kind'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = getdate(date("U"));
        $current_date = $date['year'].$date['mon'].$date['mday'];
        if($loai==1){
        	//thông báo
        	$id = DB::table('noti')->insert(array(
        		"title"=>$title,
        		"content"=>$content,
        		"date"=>$current_date));
        }
        else{
        	//tin mới
        	$id = DB::table('news')->insert(array(
        		"title"=>$title,
        		"content"=>$content,
        		"date"=>$current_date));

        }
        return Redirect::to('/admin/dang-tin');
	}
	public function getTinTuc($loai,$id_tin){
		if($loai==1){
			$news = ThongBao::getNoti($id_tin);
		}
		else{
			$news = News::getNews($id_tin);
		}

		return View::make('quanly.news-detail')->with('news',$news);
	}
}
?>