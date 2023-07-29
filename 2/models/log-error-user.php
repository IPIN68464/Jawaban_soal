<?php
$host='localhost';
$user='Website';
$pass='4r1f1n';
$db='karyawan';
$line="insert into I_ERROR_APPLICATION values(null,'$pid','$messageError','error','$DBjenis','$pid',NOW());";
$conn=mysqli_connect($host, $user, $pass, $db);
$sql=mysqli_query($conn, $line);
?>