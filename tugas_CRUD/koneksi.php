<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "barang";

$koneksi = mysqli_connect($host,$username,$password);
if ($koneksi){
    mysqli_select_db($koneksi,$database);
    echo "koneksi berhasil";
}else{
    echo "Gagal Terhubung";
    die("koneksi gagal!!");
}

?>