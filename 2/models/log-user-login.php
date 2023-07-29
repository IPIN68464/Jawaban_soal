<?php
$host='localhost';
$user='Website';
$pass='4r1f1n';
$db='karyawan';
$conn=mysqli_connect($host, $user, $pass, $db);
$line="insert into USER_ACTIVITY values(null,'$pid','$messageL','login','$DBjenis','1','$pid',NOW());";
$sql=mysqli_query($conn, $line);
?>
