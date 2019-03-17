<?php 
	session_start();
    require_once("config_1301174055.php");
    //MASUKKAN KODE DISINI UNTUK INPUT KE DATABASE
    //NOTE : SETELAH INPUT BERHASIL MAKA AKAN DILANJUTKAN KE HALAMAN REKAP NILAI

	if(isset($_POST['submit'])){
    	$uts = $_POST['uts'];
    	$uas = $_POST['uas'];
    	$kuis = $_POST['kuis'];
    	$tubes = $_POST['tubes'];
		
		$query = mysqli_query($conn,"INSERT INTO `nilai`(uts,uas,kuis,tubes) VALUES ('$uts','$uas','$kuis',$tubes)");

    	if($query){
    		header('location: rekapNilai_1301174055.php');
    	}
    	else{
    		echo "alert('Nilai tidak dapat diinput')";
    	}
    }
?>