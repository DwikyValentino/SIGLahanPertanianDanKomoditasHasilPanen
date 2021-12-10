<?php
require ("server.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$namakomoditas = $_POST["namakomoditas"];
	$jumlah = $_POST["jumlah"];
	$awal = $_POST["awal"];
	$akhir = $_POST["akhir"];
	$desa = $_POST["desa"];
	$kecamatan = $_POST["kecamatan"];

	$perintah = "INSERT INTO tb_komoditas (namakomoditas, jumlah, awal, akhir, desa, kecamatan) VALUES ('$namakomoditas', '$jumlah', '$awal', '$akhir', '$desa', '$kecamatan')";
	$eksekusi = mysqli_query($con, $perintah);
	$cek      = mysqli_affected_rows($con);

	if ($cek > 0) {
		$response["kode"] = 1;
		$response["pesan"] = "Simpan Data Berhasil";
	}else{
		$response["kode"] = 0;
		$response["pesan"] = "Gagal Menyimpan Data";
	}

}
else{
	$response["kode"] = 0;
	$response["pesan"] = "Tidak ada Post Data";
}
echo json_encode($response);
mysqli_close($con);
?>