<?php 
session_start();
unset($_SESSION['user']);
unset($_SESSION['pid']);
unset($_SESSION['aut']);
session_destroy();
$host='localhost';
$user='Website';
$passw='4r1f1n';
$db='karyawan';
$conn=mysqli_connect($host,$user,$passw,$db);
$sql='select * from USER ;';
$query=mysqli_query($conn, $sql);
$view=[];
while($view_data=mysqli_fetch_assoc($query)){
	$view[]=$view_data;
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
#header{background-image:url('../views/img/desktop.jpg');background-position:1px -105px;color:skyblue;font-face:'Serif';background-size:cover;background-repeat:no-repeat;padding:2%;text-align:center;line-height:235%}
#content{margin:2%;padding:1%}
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
.border-user{width:99%;margin:1% 0 3% 0;border-bottom:5px solid orange;padding:0.5%}
th{text-align: left;width: 45%}
.font-decor{font-family:monospace;text-decoration: none}
.center{text-align: center}
</style>
</head>
<body>
	<div id='side-menu'></div>
	<div id='Container'>
		<div id='header'>
			<h1> Daftar User </h1>
			<div class='underline'></div>
		</div>
		<div id='content'>
			<label class='border-title'><b>USER DETAILS</b></label>
			<div class="kotak">
				<div class='border-user'>
					<div class='kotak1'>
						<div class='kotak2'>
							<div id="label1">
								<table border=1px cellspacing="0" cellpadding="9">
									<tr>
										<th>ID_USER</th>
										<th class="center">Action</th>
									</tr>
									<?php foreach($view as $data):?>
									<tr>
										<td><?=$data['ID_USER'];?></td>
										<td class='center'><a href='login.php?PID=<?=$data["ID_USER"];?>' class='font-decor'>Login</a></td>
									</tr>
									<?php endforeach;?>
								</table>
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
