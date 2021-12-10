<?php
require ("server.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$id_komoditas = $_POST["id_komoditas"];

	$perintah = "DELETE FROM tb_komoditas WHERE id_komoditas = '$id_komoditas'";
	$eksekusi = mysqli_query($con, $perintah);
	$cek      = mysqli_affected_rows($con);

	if ($cek > 0) {
		$response["kode"] = 1;
		$response["pesan"] = "Data Berhasil dihapus";
	}else{
		$response["kode"] = 0;
		$response["pesan"] = "Gagal Menghapus Data";
	}

}
else{
	$response["kode"] = 0;
	$response["pesan"] = "Tidak ada Post Data";
}
echo json_encode($response);
mysqli_close($con);
?>