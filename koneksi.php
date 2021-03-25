<?php
$servername = "localhost";
$database   ="db_kasir1";
$username	="root";
$password	="";

$conn = mysqli_connect ($servername, $username, $password, $database);
if (!$conn) {
	die("koneksi gagal:" . mysqli_connect_error());
}
//function edit($data) {
	//global $conn;

	//$id_supplier     = htmlspecialchars($_POST[  "id_supplier"  ]);
	//$nama_supplier   = htmlspecialchars($_POST[ "nama_supplier" ]);
	//$alamat_supplier = htmlspecialchars($_POST["alamat_supplier"]);
	//$nohp_supplier   = htmlspecialchars($_POST[ "nohp_supplier" ]);
//}

	?>