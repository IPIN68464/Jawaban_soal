<?php
session_start();
if(!isset($_SESSION['pid']) or !isset($_SESSION['aut']) or !isset($_SESSION['user'])){
	header('Location: Dashboard.php');
};
$pid=$_SESSION['pid'];
$aut=$_SESSION['aut'];
$usr=$_SESSION['user'];
$sql="select * from USER where ID_USER='$pid';";
$host='localhost';
$user='Website';
$passw='4r1f1n';
$db='karyawan';
$conn=mysqli_connect($host,$user,$passw,$db)or die('gagal menghubungkan database');
$query=mysqli_query($conn, $sql);
$view=[];
while ($data_view=mysqli_fetch_assoc($query)) {
	$view[]=$data_view;
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
.side-icon {margin-top:6%;border-radius:50%;witdh:41px;height:41px;}
#Container{margin:0 0 0 6%;background-color:#efffff;position:absolute;width:94%}
#header{background-image:url('../public/img/header.jpeg');background-position:1px -105px;color:skyblue;font-face:'Serif';background-size:cover;background-repeat:no-repeat;padding:2%;text-align:center;line-height:235%}
#content{padding:0.9%}
#footer{margin:3%;border:1px solid brown;padding:1%}
.img{margin-top:6%;border-radius:50%;width:90%;box-shadow:1px 0px 3px 1px white}
.border-title{background-color:orange;display:flex;margin-bottom:10px;width:100%;height:40px;justify-content:center;align-items:center}
.border-user{width:99%;margin:1% 0 2% 0;padding:0.3%;border-bottom:5px solid orange;display: flex;}
.kotak1{width: 75%;}
.kotak2{width:30%;display: flex;justify-content: center}
.hero{width: 50%;height: 64%}
.TS{text-align: left;font-family: monospace;width:45%}
.warning{background-color: orange;padding:.6%;width: 5%;text-align: center;margin:0.1%}
</style>
</head>
<body>
	<div id='side-menu'>
		<div>
			<a href='../models/Dashboard.php'><img src='../public/img/logout.png' class='side-icon'/></a>
		</div>
	</div>
	<div id='Container'>
		<div id='header'>
			<h1> HALLO, <?=$usr;?> </h1>
			<div class='underline'></div>
		</div>
		<div id='content'>
			<label class='border-title'><b>USER DETAILS</b></label>
			<div class="kotak">
				<?php foreach ($view as $data):?>
					<div class="warning">
						<a class='text' href="edit-account.php?id_user=<?=$data['ID_USER'];?>&nama_user=<?=$data['NAMA_USER'];?>&username=<?=$data['USERNAME'];?>&password=<?=$data['PASSWORD'];?>&email=<?=$data['EMAIL'];?>&no_hp=<?=$data['NO_HP'];?>&wa=<?=$data['WA'];?>&PIN=<?=$data['PIN'];?>&id_jenis_user=<?=$data['ID_JENIS_USER'];?>&status_user=<?=$data['STATUS_USER'];?>&BTN=2">Edit</a>
					</div>
					<div class='border-user'>
						<div class='kotak1'>
							<table>
								<tr>
									<th class='TS'>ID_USER</th>
									<td class='TS'><?=$data['ID_USER'];?></td>
								</tr>
								<tr>
									<th class='TS'>NAMA_USER</th>
										<td class='TS'><?=$data['NAMA_USER'];?></td>
								</tr>
								<tr>
									<th class='TS'>USERNAME</th>
									<td class='TS'><?=$data['USERNAME'];?></td>
								</tr>
								<tr>
									<th class='TS'>PASSWORD</th>
									<td class='TS'><?=$data['PASSWORD'];?></td>
								</tr>
								<tr>
									<th class='TS'>EMAIL</th>
									<td class='TS'><?=$data['EMAIL'];?></td>
								</tr>
								<tr>
									<th class='TS'>NO_HP</th>
									<td class='TS'><?=$data['NO_HP'];?></td>
								</tr>
								<tr>
									<th class='TS'>WA</th>
									<td class='TS'><?=$data['WA'];?></td>
								</tr>
								<tr>
									<th class='TS'>PIN</th>
									<td class='TS'><?=$data['PIN'];?></td>
								</tr>
								<tr>
									<th class='TS'>ID_JENIS_USER</th>
									<td class='TS'><?=$data['ID_JENIS_USER'];?></td>
								</tr>
								<tr>
									<th class='TS'>STATUS_USER</th>
									<td class='TS'><?=$data['STATUS_USER'];?></td>
								</tr>
								<tr>
									<th class='TS'>DELETE_MARK</th>
									<td class='TS'><?=$data['DELETE_MARK'];?></td>
								</tr>
								<tr>
									<th class='TS'>CREATE_BY</th>
									<td class='TS'><?=$data['CREATE_BY'];?></td>
								</tr>
								<tr>
									<th class='TS'>CREATE_DATE</th>
									<td class='TS'><?=$data['CREATE_DATE'];?></td>
								</tr>
								<tr>
									<th class='TS'>UPDATE_BY</th>
									<td class='TS'><?=$data['UPDATE_BY'];?></td>
								</tr>
								<tr>
									<th class='TS'>UPDATE_DATE</th>
									<td class='TS'><?=$data['UPDATE_DATE'];?></td>
								</tr>
								<tr>
									<th class='TS'>FOTO</th>
									<td class='TS'><?=$data['FOTO'];?></td>
								</tr>
							</table>
						</div>
						<div class="kotak2">
							<img class='hero'src='<?=$data['FOTO'];?>' />
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
		<div id='footer'>
			footer
		</div>
	</div>
</body>
</html>
