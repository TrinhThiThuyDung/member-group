<?php
class HoiDap extends Eloquent{
	protected $table = 'ask_answer';
	public static function getAll(){
		$question = self::all();
		return $question;
	}
}
?>