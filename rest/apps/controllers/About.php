<?php
include '../core/controller.php';
class About extends Controller {
		public static function index(){
			parent::view("../templates/Header/header");
			parent::view('../views/About/index');
			parent::view("../templates/Footer/footer");
		}

}
