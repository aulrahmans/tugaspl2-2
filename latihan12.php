<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
// Ambil data berdasarkan NIK Dosen
$kode_mk= $_GET['kode_mk'];
 
// Perintah delete data berdasarkan NIK Dosen
$query=mysqli_query($con,"DELETE FROM tbl_matkul WHERE kode_mk=$kode_mk")or die(mysql_error());
 

header('location:latihan9.php');
?>