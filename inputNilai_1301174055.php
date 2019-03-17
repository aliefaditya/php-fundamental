<!DOCTYPE html>
<html lang="en">
<?php 

	session_start();

	require_once("config_1301174055.php");
	
	
	//Masukan Kode disini
	if(isset($_POST['submit'])){
		$data = mysqli_fetch_assoc(mysqli_query($conn,'SELECT * FROM akun'));
		$username = $_POST['nim'];
		$password = $_POST['password'];

		if ($username != $data['nim'] || $password != $data['password']){
			header('location:login_1301174055.php');
		}
		else{
			$_SESSION['loggedIn'] = TRUE;
		}
	}
	else{
		if ($_SESSION['loggedIn']){
			header('location:inputNilai_1301174055.php');
		}
	}
	
	//NOTE: JIKA NIM DAN PASSWORD BENAR MAKA HALAMAN INPUT NILAI TERBUKA. JIKA SALAH KEMBALI KE MENU LOGIN
	
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Nilai-<?php echo $username; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="input">
            <h1>input nilai - <?php echo $username; ?></h1>
            <form action="insert_1301174055.php" method="POST">
                <input type="text" placeholder="NIM" name="nim" value= '<?php echo $username; ?>' readonly>
                <input type="text" placeholder="UTS" name="uts">
                <input type="text" placeholder="UAS" name="uas">
                <input type="text" placeholder="Kuis" name="kuis">
                <input type="text" placeholder="Tubes" name="tubes">
                <button type="submit" name='submit'>Input</button>
            </form>
        </div>
    </div>
</body>
</html>