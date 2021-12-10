<?php
require("server.php");
$perintah = "SELECT * FROM tb_komoditas";
$eksekusi = mysqli_query($con, $perintah);
$cek = mysqli_affected_rows($con);

if ($cek > 0) {
	$response["kode"] = 1;
	$response["pesan"] = "Data Tersedia";
	$response["data"] = array();

	while($ambil = mysqli_fetch_object($eksekusi)){
		$F["id_komoditas"] = $ambil->id_komoditas;
		$F["namakomoditas"] = $ambil->namakomoditas;
		$F["jumlah"] = $ambil->jumlah;
		$F["awal"] = $ambil->awal;
		$F["akhir"] = $ambil->akhir;
		$F["desa"] = $ambil->desa;
		$F["kecamatan"] = $ambil->kecamatan;

		array_push($response["data"], $F);
	}
}
else{
	$response["kode"] = 0;
	$response["pesan"] = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($con);