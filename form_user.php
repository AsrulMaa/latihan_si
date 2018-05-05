<form action="" method="post">
	Username : <input type="text" name="username"> <br>
	Password : <input type="password" name="password"> <br>
	<input type="submit" name="submit" value="Kirim">
	
</form>

<?php 
//include koneksi ke form
include 'connect.php';

//KOndisi jika tombol kirim di tekan
if (isset($_POST['submit'])) {
	//Deklarasi variabel dari metode post
	$username = $_POST['username']; 
	$password = $_POST['password'];

	//mendeklarasikan trigger
	$sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
	
	// Mencari Error, hentikan kodenya, cetak trigger nya
	// echo $sql;
	// die();

	//Mengeksekusi pemberian nilai pada trigger
	$query = mysqli_query($con, $sql);
	//Kondisi
	 if ($query) {
	 	echo "Data berhasil di simpan";
	 } else {
	 	echo "Data gagal di simpan";
	 }
}


?>
