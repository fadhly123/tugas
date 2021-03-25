<?php

require 'koneksi.php';
if(isset ($_POST["submit"])) {

	$id_barang = htmlspecialchars($_POST["id_barang"]);
	$nama_barang = htmlspecialchars($_POST["nama_barang"]);
	$harga_barang = htmlspecialchars($_POST["harga_barang"]);
	$bobot_barang = htmlspecialchars($_POST["bobot_barang"]);

	$query = "INSERT INTO tb_barang(nama_barang, harga_barang, bobot_barang) VALUES('$nama_barang', '$harga_barang', '$bobot_barang')";
	$result = mysqli_query($conn, $query);
	
	if($result) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	}	else {
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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data</title>
</head>
<body>
	
	<h1>Tambah Data Barang</h1>

	<form action="add.php" method="POST">
	<ul>
		<li>
			<label for="id_barang">ID Barang : </label>
			<input type="text" name="id_barang" id="id_barang">
		</li>
		<li>
			<label for="nama_barang">Nama Barang : </label>
			<input type="text" name="nama_barang" id="nama_barang">
		</li>
		<li>		
			<label for="harga_barang">Harga Barang : </label>
			<input type="text" name="harga_barang" id="harga_barang">
		</li>
		<li>
			<label for="bobot_barang">Bobot Barang : </label>
			<input type="text" name="bobot_barang" id="bobot_barang">
		</li>
			<button type="submit" name="submit">Tambah Data</button>
	</ul>

	</form>


</body>
</html>