<?php
include("koneksi.php");

// session_start();
if (isset($_POST['submit'])) {
    $nama_barang = $_POST["namabarang"];
    $jumlah_barang = $_POST["jumlahbarang"];
    $harga_barang = $_POST["hargabarang"];
    


        //Query
        $sql = "INSERT INTO `tbl_barang`( `nama_barang`, `jumlah_barang`,`harga_barang`) VALUES ('{$nama_barang}','{$jumlah_barang}','{$harga_barang}')";

    //EXECUTE
    $result = mysqli_query($koneksi,$sql);
    header('Location: http://localhost/farhan/tugas_CRUD/');
// or die();
exit();
    if(!$result){
        die("error".mysqli_error($koneksi));
    }
}
