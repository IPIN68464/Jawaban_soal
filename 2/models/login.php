<?php 
session_start();
if(!isset($_GET['PID'])){
	header('Location: Dashboard.php');
};
?>
<html>
<head>
	<title>Login</title>
</head>
<style>
body{background-color:brown}
.container{display:flex;width:80%;height:90%;justify-content:center;align-items:center;margin:auto}
.log{width:202px;display:flex;flex-direction:column;border:1px solid cyan;border-radius:5px;height:100px;padding:10px}
div.pass{margin-top:5px;display:flex;justify-content:space-between}
div.tombol{margin:12px auto;}
</style>
<body>
<div class="container">
	<form method="post" action="filter.php">
		<div class="log">
			<div class="pass">
				<input type="text" placeholder="Username" id="nama" name="nama">
			</div>
			<div class="pass">
				<input type="password" id="password" placeholder="Password" name="pass">
			</div>
			<div class="pass">
				<input type="hidden" id="PID" value="<?=$_GET['PID']?>" name="PID">
			</div>
			<div class="tombol">
				<button name="submit" value="submit">Kirim!</button>
			</div>
		</div>
			<?php if (isset($_GET["error"])):?>
					<label>Password/User salah</label>
			<?php endif;?>
	</form>
</div>
</body>
</html>
