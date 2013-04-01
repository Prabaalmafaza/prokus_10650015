<?php
  session_start();
	include "1/koneksi.php";
?>
<html>
	<body>
		<?php include "1/header.php";?>
		<?php include "1/menu.php";?>
		<?php
		if(!isset($_SESSION['sebagai'],$_SESSION['nama'],$_SESSION['pass'])){
			include "1/login.php";
		}else{
			include "1/in.php";
		}?>
		<?php include "1/link.php";?>
		<?php include "1/footer.php";?>
	</body>
</html>
