<?php
class News extends Eloquent{
	protected $table='news';

	public static function getAllNews(){
		$news = self::all();
		return $news;
	}
	public static function getNews($id_news){
		$news = self::find($id_news);
		return $news;
	}
}
?>