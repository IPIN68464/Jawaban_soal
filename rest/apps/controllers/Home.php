<?php
include '../core/Controller.php';
class Home extends Controller{
		public static function index(){
			parent::view("../templates/Header/header");
			parent::view('../views/Home/index');
			parent::view("../templates/Footer/footer");
		}

}