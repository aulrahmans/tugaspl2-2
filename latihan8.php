<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
// Ambil data berdasarkan NIK Dosen
$nik= $_GET['nik'];
 
// Perintah delete data berdasarkan NIK Dosen
$query=mysqli_query($con,"DELETE FROM tbl_dosen WHERE nik=$nik")or die(mysql_error());
 

header('location:latihan5.php');
?>