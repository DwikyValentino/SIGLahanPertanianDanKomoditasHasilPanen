<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbsig";

$con = mysqli_connect($server, $username, $password) or die("<h1>Koneksi Mysqli Error : </h1>" .   mysqli_connect_error());
mysqli_select_db($con, $database) or die("<h1>Koneksi Kedatabase Error : </h1>" . mysqli_error($con));

@$operasi = $_GET['operasi'];
switch    ($operasi) {
    case "view":
    $query_tampil_komoditas = mysqli_query($con,"SELECT * FROM tb_komoditas") or die (mysqli_error($con));
    $data_array = array();
    while ($data = mysqli_fetch_assoc($query_tampil_komoditas)) {
    $data_array[]=$data; 
    }
    echo json_encode($data_array);

    break;

    case "insert":
    @$namakomoditas = $_GET['namakomoditas'];
    @$jumlah = $_GET['jumlah'];
    @$awal = $_GET['awal'];
    @$akhir = $_GET['akhir'];
    @$desa = $_GET['desa'];
    @$kecamatan = $_GET['kecamatan'];
    $query_insert_data = mysqli_query($con, "INSERT INTO tb_komoditas (namakomoditas,jumlah,awal,akhir,desa,kecamatan) VALUES ('$namakomoditas','$jumlah','$awal','$akhir','$desa','$kecamatan')");
    if ($query_insert_data) {
        echo "Data Berhasil Disimpan";
        } else {
        echo "Maaf Insert Ke Dalam Database Error" . mysqli_error($con);
        }

    break;

    case "get_komoditas_by_id":
    @$id_komoditas = $_GET['id_komoditas'];
    $query_tampil_komoditas = mysqli_query($con, "SELECT * FROM tb_komoditas WHERE id_komoditas='$id_komoditas'") or die (mysqli_error($con));
    $data_array = array();
    $data_array = mysqli_fetch_assoc($query_tampil_komoditas);
    echo "[" . json_encode ($data_array) . "]";

    break;

    case "update":
    @$namakomoditas = $_GET['namakomoditas'];
    @$jumlah = $_GET['jumlah'];
    @$awal = $_GET['awal'];
    @$akhir = $_GET['akhir'];
    @$desa = $_GET['desa'];
    @$kecamatan = $_GET['kecamatan'];
    @$id_komoditas = $_GET['id_komoditas'];
    $query_update_komoditas = mysqli_query($con, "UPDATE tb_komoditas SET namakomoditas='$namakomoditas', jumlah='$jumlah', awal='$awal', akhir='$akhir', desa='$desa', kecamatan='$kecamatan' WHERE id_komoditas='$id_komoditas'");
    if ($query_update_komoditas) {
        echo "Update Data Berhasil";
        }
        else {
        echo mysqli_error($con);
        }
    
    break;

    case "delete":
    @$id_komoditas = $_GET['id_komoditas'];
    $query_delete_komoditas = mysqli_query($con, "DELETE FROM tb_komoditas WHERE id_komoditas='$id_komoditas'");
    if ($query_delete_komoditas) {
        echo "Data Berhasil Dihapus";
        }
        else {
        echo mysqli_error($con);
        }

    break;

    default;
    break;
}
?>