<?php
include("./koneksi.php");
$id = $_GET["id"];

$sql = 'DELETE FROM `tbl_barang` WHERE id='.$id;



$query_result = mysqli_query($koneksi,$sql);
if(!$query_result){
    echo 'delete gagal';
}
header("location: index.php");
?>