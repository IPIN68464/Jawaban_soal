<?php
ini_set('display_errors', 1);
if (!isset($_GET['BTN'])){
	header('Location: Dashboard.php');
};
$host='localhost';
$user='Website';
$passw='4r1f1n';
$db='karyawan';
$conn=mysqli_connect($host,$user,$passw,$db);

$BTN=$_GET['BTN'];
$id_usr=$_GET['id_user'];
$nama_usr=$_GET['nama_user'];
$usernama=$_GET['username'];
$passwd=$_GET['password'];
$mail=$_GET['email'];
$hp=$_GET['no_hp'];
$WA=$_GET['wa'];
$PIN=$_GET['PIN'];
$id_jenis_usr=$_GET['id_jenis_user'];
$status_usr=$_GET['status_user'];
if($BTN === 1 or $BTN === '1'){
	$sql="delete from USER where ID_USER='$id_usr';";
	if(mysqli_query($conn, $sql)){
		header('Location: root_page.php');
	};
};

if(isset($_POST['submit'])){
		$nama_user=$_POST['NAMA_USER'];
		$username=$_POST['USERNAME'];
		$password=$_POST['PASSWORD'];
		$email=$_POST['EMAIL'];
		$no_hp=$_POST['NO_HP'];
		$wa=$_POST['WA'];
		$pin=$_POST['PIN'];
		$id_jenis_user=$_POST['ID_JENIS_USER'];
		$status_user=$_POST['STATUS_USER'];
		$delete_mark=$_POST['DELETE_MARK'];
		$update_by=$_POST['UPDATE_BY'];
		$query="update USER set NAMA_USER='$nama_user',USERNAME='$username',PASSWORD='$password',EMAIL='$email',NO_HP='$no_hp',WA='$wa',PIN='$pin',ID_JENIS_USER='$id_jenis_user',STATUS_USER='$status_user',DELETE_MARK='$delete_mark',UPDATE_BY='$update_by',UPDATE_DATE=NOW() where ID_USER='$id_usr';";
		if(mysqli_query($conn,$query)){
			header('Location: root_page.php');
		};		
};
?>
<!DOCTYPE html>
<html lang='eng'>
<head>
	<meta charset='UTF-8'>
	<meta http-equiv='X-UA-Compatible' content='IE-edge'>
	<meta name='viewport' content='width-device-width,initial-scale=1.0'>
	<title>Data Mahasiswa</title>
<style>
body{background-color:#00ffff}
*{margin:0}
#side-menu{height:100%;text-align:center;box-shadow:2px 0 7px 2px;width:6%;z-index:1;display:inline-block;position:fixed;}
.side-icon {margin-top:6%;border-radius:28%;witdh:41px;height:41px;}
#Container{margin:0 0 0 6%;background-color:#efffff;position:absolute;width:94%}
#header{background-image:url('../public/img/header.jpeg');background-position:1px -105px;color:skyblue;font-face:'Serif';background-size:cover;background-repeat:no-repeat;padding:2%;text-align:center;line-height:235%}
#content{padding:0.9%}
#footer{margin:3%;border:1px solid brown;padding:1%}
.hr{width:30%;margin:auto;color:black}
.underline{line-height:115%}
h5{font-size:72%}
.img{margin-top:6%;border-radius:50%;width:90%;box-shadow:1px 0px 3px 1px white}
.border-title{background-color:orange;display:flex;margin-bottom:10px;width:100%;height:40px;justify-content:center;align-items:center}
.kotak{display:flex;flex-direction:column}
.kotak1{display:flex;flex-direction:row}
.kotak2{display:flex;width:85%}
#label1{width:73%}
.BE{padding:4px;font-size:80%;background-color:#e67e22;border-radius:5px;text-decoration:none}
.BD{padding:4px;font-size:80%;background-color:#e67e22;border-radius:5px;text-decoration:none}
.border-foto{width:30%;justify-content:center;display:flex;}
.border-user{width:99%;margin:1% 0 3% 0;border-bottom:5px solid orange;padding:0.5%}
th{text-align: left;width: 45%}
</style>
</head>
<body>
	<div id='side-menu'>
		<div>
			<a href='root_page.php'><img src='../public/img/back.png' class='side-icon'/></a>
		</div>
		<div>
			<a href='Dashboard.php'><img src='../public/img/logout.png' class='side-icon'/></a>
		</div>
	</div>
	<div id='Container'>
		<div id='header'>
			<h1> Edit Data <?=$usernama;?> </h1>
			<div class='underline'></div>
		</div>
		<div id='content'>
			<label class='border-title'><b>USER DETAILS</b></label>
			<div class="kotak">
				<div class='border-user'>
					<div class='kotak1'>
						<div class='kotak2'>
							<div id="label1">
								<form method='post' action='' enctype='multipart/form-data'>
									<table>
										<tr>
											<th>NAMA_USER</th>
											<td><input type='text' name='NAMA_USER' value="<?=$nama_usr;?>" /></td>
										</tr>
										<tr>
											<th>USERNAME</th>
											<td><input type='text' name='USERNAME' value="<?=$usernama;?>" /></td>
										</tr>
										<tr>
											<th>PASSWORD</th>
											<td><input type='text' name='PASSWORD' value="<?=$passwd;?>" /></td>
										</tr>
										<tr>
											<th>EMAIL</th>
											<td><input type='text' name='EMAIL' value="<?=$mail;?>" /></td>
										</tr>
										<tr>
											<th>NO_HP</th>
											<td><input type='text' name='NO_HP' value="<?=$hp;?>" /></td>
										</tr>
										<tr>
											<th>WA</th>
											<td><input type='text' name='WA' value="<?=$WA;?>" /></td>
										</tr>
										<tr>
											<th>PIN</th>
											<td><input type='text' name='PIN' value="<?=$PIN;?>" /></td>
										</tr>
										<tr>
											<th>ID_JENIS_USER</th>
											<td><input type='text' name='ID_JENIS_USER' value="<?=$id_jenis_usr;?>" /></td>
										</tr>
										<tr>
											<th>STATUS_USER</th>
											<td><input type='text' name='STATUS_USER' value="<?=$status_usr;?>" /></td>
										</tr>
										<tr>
											<td><input type='hidden' name='DELETE_MARK' value="1" /></td>
										</tr>
										<tr>
						
											<td><input type='hidden' name='UPDATE_BY' placeholder='UPDATE_BY' value="<?=$nama_usr;?>" /></td>
										</tr>
										<tr>
											<td><button name='submit' value='submit'>Submit</button></td>
										</tr>
									</table>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id='footer'>
			footer
		</div>
	</div>
</body>
</html>
