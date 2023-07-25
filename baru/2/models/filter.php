<?php
if(isset($_POST['submit'])){
		$pid=$_POST['PID'];
		$username=$_POST['nama'];
		$pass=$_POST['pass'];
		$sql="select * from USER where ID_USER='$pid' ;";
		require('../core/Koneksi.php');
		foreach ($view as $data) {
			$DBuser=$data['USERNAME'];
			$DBpass=$data['PASSWORD'];
			$DBjenis=$data['ID_JENIS_USER'];
		};
}else{
			header('Location: Dashboard.php');
};

if($username === $DBuser){
	if($pass === $DBpass){
		session_start();
		$_SESSION['user']=$DBuser;
		$_SESSION['pid']=$pid;
		$_SESSION['aut']=$DBjenis;
		if($DBjenis === '1' or $DBjenis === 1){

			header('Location: root_page.php');
		}else{
			header('Location: user_page.php');
		}
	}else{
		header('Location: login.php');
	}
}else{
		header('Location: login.php');
};
?>