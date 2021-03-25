<?php
require 'koneksi.php';

$id = $_GET["id"];

$result = mysqli_query($conn, "SELECT * FROM tb_supplier WHERE id_supplier = '$id'");

if(isset ($_POST["submit"]) ) {	

	$id_supplier     = htmlspecialchars($_POST[  "id_supplier"  ]);
	$nama_supplier   = htmlspecialchars($_POST[ "nama_supplier" ]);
	$alamat_supplier = htmlspecialchars($_POST["alamat_supplier"]);
	$nohp_supplier   = htmlspecialchars($_POST[ "nohp_supplier" ]);
	


	$query = "UPDATE tb_supplier SET 
		nama_supplier     = '$nama_supplier', 
		alamat_supplier   = '$alamat_supplier',
		nohp_supplier     = '$nohp_supplier'
		WHERE id_supplier = '$id'";

			   

	$result = mysqli_query ($conn, $query);
	//var_dump('nama_supplier');
	//while ($data=mysqli_fetch_array ($result)) ;

 
if(	$result) {	
	echo "
	<script>
		alert('Data Berhasil Diedit!');
		document.location.href = 'index.php';
	</script>
	";
} else {
	echo "
	<script>
		alert('Data Gagal Diedit!');
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
	
	<title>Edit Data Supplier </title>

</head>
<body>
	
		<div id = "card" align="center">
	<h1 align="center">Edit Data Supplier</h1>

	<form action="" method="post" align= "center">
		<input type="hidden" name="id">
		<table align ="center">
<?php while ($row =mysqli_fetch_array ($result) ) : ?>		
	<tr>
		<td>
			<label for="nama_supplier">Nama Supplier</label>
		</td>
		<td>:</td>
		<td>
			<input type="text" name="nama_supplier"
			 required value="<?= $row ["nama_supplier"];?>">
		</td>
	</tr>
	<tr>
		<td>
			<label for="alamat_supplier">Alamat Supplier</label>
		</td>
		<td>:</td>
		<td>
			<input type="text" name="alamat_supplier"
			 required value="<?= $row ["alamat_supplier"];?>">
		</td>
	</tr>
	<tr>
		<td>
			<label for="nohp_supplier">Nohp Supplier</label>
		</td>
		<td>:</td>
		<td>
			<input type="text" name="nohp_supplier"
			 required value="<?= $row ["nohp_supplier"];?>">
		</td>
	</tr>
	<tr>
		<td align="right">
			<input type="hidden" name="id" id="id" value="<?= $id ?>">
			<button type="submit" name="submit">Edit</button></td>

	</tr>
		<?php endwhile; ?>
</table>
	
		</form>

</body> 
	</div>

</html>
