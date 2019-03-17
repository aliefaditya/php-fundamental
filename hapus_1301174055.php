<?php
// include database connection file
session_start();
include_once("config_1301174055.php");
//MASUKKAN QUERY UNTUK HAPUS
//SETELAH HAPUS BERHASIL AKAN DILANJUTKAN KE HALAMAN REKAP NILAI
$id = $_GET['id'];
$result = mysqli_query($conn,"DELETE FROM nilai WHERE id = $id");
if($result){
	header("Location:rekapNilai_1301174055.php");
}
?>