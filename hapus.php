<?php
require 'koneksi.php';
$id = $_GET["id"];
function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_supplier WHERE id_supplier = $id");
	return mysqli_affected_rows($conn);

}



if( hapus($id) > 0  ) {

	echo ";
	<script>
		alert('Data Berhasil Dihapus');
		document.location.href = 'index.php';
	</script>
	";

} else {
	echo "
	<script>
		alert('Data Gagal Dihapus');
		document.location.href = 'index.php';
	</script>
	";
}

?>