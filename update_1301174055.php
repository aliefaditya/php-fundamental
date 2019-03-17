<?php
// include database connection file
include_once("config_1301174055.php");

//MASUKKAN QUERY UNTUK UPDATE
//SETELAH UPDATE BERHASIL AKAN DILANJUTKAN KE HALAMAN REKAP NILAI

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "UPDATE `nilai` SET `uts`=$_POST[uts],`uas`=$_POST[uas],`kuis`=$_POST[kuis],`tubes`=$_POST[tubes] WHERE id=$id");
if ($result) {
	header("Location:rekapNilai_1301174055.php");
}

?>