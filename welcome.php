<?php

session_start();
if (! isset ($_SESSION['username'])){
	header("location: loginindex.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<h1>Selamat Datang <?php echo $_SESSION['nama_akun']; ?></h1>
	<b>Anda Sudah Masuk</b>
	<a href="logout.php">Logout</a>
</body>
</html>