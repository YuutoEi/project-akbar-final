<?php
include 'connection.php';

//Menangkap data yang dikirim
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$JenjangPendidikan = $_POST['JenjangPendidikan'];
$JenisKelamin = $_POST['JenisKelamin'];
$Menemukan1 = implode(", ", $_POST['Menemukan1']);
$Menemukan2 = $_POST['Menemukan2']; 
$Pertanyaan1 = $_POST['Pertanyaan1'];
$Pertanyaan2 = $_POST['Pertanyaan2'];
$Pertanyaan3 = $_POST['Pertanyaan3'];
$Pertanyaan4 = $_POST['Pertanyaan4'];
$Saran = $_POST['Saran'];



//input ke data base
mysqli_query($koneksi, "insert into support VALUES ('', '$Nama','$Email','$JenjangPendidikan','$JenisKelamin','$Menemukan1', '$Menemukan2', '$Pertanyaan1','$Pertanyaan2','$Pertanyaan3','$Pertanyaan4','$Saran');");

//kembali ke index.php
header("location:showData.php");


?>