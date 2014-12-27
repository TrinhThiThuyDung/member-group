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
	
}
?>