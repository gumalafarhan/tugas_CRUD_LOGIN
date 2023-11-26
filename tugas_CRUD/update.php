<?php
include("koneksi.php");

// session_start();
if (isset($_POST['submit'])) {
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries["id"];
    $nama_barang = $_POST["namabarang"];
    $jumlah_barang = $_POST["jumlahbarang"];
    $harga_barang = $_POST["hargabarang"];
    

        //Query
        $sql = "UPDATE `tbl_barang` SET `nama_barang`='{$nama_barang}',`jumlah_barang`='{$jumlah_barang}',`harga_barang`='{$harga_barang}' WHERE `id`='{$id}'";

    //EXECUTE
    $result = mysqli_query($koneksi,$sql);
    header('Location: http://localhost/farhan/tugas_CRUD/');
// or die();
exit();
    if(!$result){
        die("error".mysqli_error($koneksi));
    }
}

?>