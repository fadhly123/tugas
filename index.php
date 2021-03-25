<?php

require 'koneksi.php';

$result = mysqli_query ($conn, "SELECT * FROM tb_supplier");

?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
</head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>

	<h1>Daftar Suppllier</h1>
	<a href="tambah.php">Tambah Data Supplier</a>
	<br><br>
	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>  Id Supplier  </th>
			<th> Nama Supplier </th>
			<th>Alamat Supplier</th>
			<th> Nohp Supplier </th>
			<th>    Edit       </th>
		</tr>

		<?php $i =1; ?>
		<?php while ($row = mysqli_fetch_assoc($result)) :?> 
			
		<tr>
			<td><?= $row["id_supplier"    ];?></td>
			<td><?= $row["nama_supplier"  ];?></td>
			<td><?= $row["alamat_supplier"];?></td>
			<td><?= $row["nohp_supplier"  ];?></td>
			<td><a href="edit.php?id=<?php echo $row["id_supplier"];?> ">Edit</a>
				<a href="hapus.php?id=<?php echo $row["id_supplier"];?>"onclick="return confirm('YAKIN?');" >Hapus</a>
			</td>
			
		</tr>
		<?php $i++?>
	<?php endwhile; ?>
	</table>

</body>
</html>