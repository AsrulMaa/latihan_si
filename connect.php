<?php 
//Buat koneksi ke database

//Deklarasikan variabel koneksi
// 1. alamat servernya
// 2. user mysql
// 3. password mysql
// 4. nama database
$con = new mysqli('localhost','root', '', 'latihan_si');

if (mysqli_connect_error($con)) {
	die('Error : koneksi gagal !.');
}

?>