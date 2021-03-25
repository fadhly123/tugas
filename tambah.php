<?php
require 'koneksi.php';
if(isset ($_POST["submit"]) ) {	

	$id_supplier     = htmlspecialchars($_POST[  "id_supplier"  ]);
	$nama_supplier   = htmlspecialchars($_POST[ "nama_supplier" ]);
	$alamat_supplier = htmlspecialchars($_POST["alamat_supplier"]);
	$nohp_supplier   = htmlspecialchars($_POST[ "nohp_supplier" ]);
	$password = md5($password);

	$query = "INSERT INTO tb_supplier(nama_supplier, alamat_supplier, nohp_supplier) VALUES('$nama_supplier', '$alamat_supplier', '$nohp_supplier')";
	$result = mysqli_query($conn, $query);

if(	$result) {
	echo "
	<script>
		alert('data berhasil ditambahkan');
		document.location.href = 'index.php';
	</script>
	";

} else {
	echo "
	<script>
		alert('data gagal ditambahkan');
		document.location.href = 'index.php';
	</script>
	";

}

}
?>

<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset    = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content="IE=edge">
	<meta name       = "viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Tambah Data Supplier </title>

</head>
<body>

	<h1 align="center">Tambah Data Supplier</h1>

	<form action="" method="post" align= "center">
		<table align ="center"><tr>
		
	<tr>
		<td>
			<label for="nama_supplier">Nama Supplier</label>
		</td>
		<td>:</td>
		<td>
			<input type="text" name="nama_supplier">
		</td>
	</tr>
	<tr>
		<td>
			<label for="alamat_supplier">Alamat Supplier</label>
		</td>
		<td>:</td>
		<td>
			<input type="text" name="alamat_supplier">
		</td>
	</tr>
	<tr>
		<td>
			<label for="nohp_supplier">Nohp Supplier</label>
		</td>
		<td>:</td>
		<td>
			<input type="text" name="nohp_supplier">
		</td>
	</tr>
	<tr>
		<td align="right"><button type="submit" name="submit">Tambahkan</button></td>
	</tr>
</table>
	
		</form>

</body>
</html>