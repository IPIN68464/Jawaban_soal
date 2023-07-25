<?php
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