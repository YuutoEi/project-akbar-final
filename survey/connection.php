<?php
$koneksi = mysqli_connect("localhost","root","","sparkdatabase");

//cek koneksi
if (mysqli_connect_errno()) {
    # code..
    echo "Koneksi Database Gagal". mysqli_connect_error();
}

?>