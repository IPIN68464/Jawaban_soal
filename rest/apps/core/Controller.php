<?php
class Controller{
	public static function view($url,$data=[]){
		include "$url.php";
	}
}