<?php
require ("server.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$id_komoditas = $_POST["id_komoditas"];
	$namakomoditas = $_POST["namakomoditas"];
	$jumlah = $_POST["jumlah"];
	$awal = $_POST["awal"];
	$akhir = $_POST["akhir"];
	$desa = $_POST["desa"];
	$kecamatan = $_POST["kecamatan"];

	$perintah = "UPDATE tb_komoditas SET namakomoditas = '$namakomoditas', jumlah = '$jumlah', awal = '$awal', akhir = '$akhir', desa = '$desa', kecamatan = '$kecamatan' WHERE id_komoditas = '$id_komoditas'";
	$eksekusi = mysqli_query($con, $perintah);
	$cek      = mysqli_affected_rows($con);

	if ($cek > 0) {
		$response["kode"] = 1;
		$response["pesan"] = "Data Berhasil Diubah";
	}
	else{
		$response["kode"] = 0;
		$response["pesan"] = "Data Gagal Diubah";
	}

}
else{
	$response["kode"] = 0;
	$response["pesan"] = "Tidak ada Post Data";
}
echo json_encode($response);
mysqli_close($con);
?>