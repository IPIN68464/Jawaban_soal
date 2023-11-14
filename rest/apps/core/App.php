<?php
ini_set('display_errors',1);
class App{
	public $url=[];
	public $controller='Home';
	public $method='index';
	public $params=[];

	public function getUrl(){
		if(isset($_GET['url'])){
			$this->url=$_GET['url'];
		}else{
			$this->url=['Home'];
		}

		$this->validasi();
	}
	public function validasi(){
		$url=rtrim($this->url,'/');
		$url=filter_var($url,FILTER_SANITIZE_URL);
		$url=explode('/',$url);
		if(file_exists("../controllers/$url[0].php")){
			$this->controller=$url[0];
			unset($url[0]);
			include "../controllers/$this->controller.php";
			new $this->controller();
		}else{
			header('Location: http://localhost/Home/rest/Home/');
		}
		if(isset($url[1])){
			$this->method=$url[1];
			if(method_exists($this->controller,$this->method)){
				unset($url[1]);
			}
		}
		if(!empty($url)){
			$this->params=$url;
		}
		call_user_func_array([$this->controller,$this->method], $this->params);
	}

}
$e=new App;
$e->getUrl();


?>