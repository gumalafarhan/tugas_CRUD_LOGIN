<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <title>CRUD Barang</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
include('./koneksi.php');
$sql = 'SELECT * FROM tbl_barang';
$query_result = mysqli_query($koneksi,$sql);
$row_count = mysqli_num_rows($query_result);

if(!($query_result)){
    echo 'retrieval of data from Database Failed - #'.mysqli_errno($koneksi) . ' : ' .mysqli_error($koneksi);
}else {
    ?>
    <a href="addform.php">Tambah</a>
<table class="table">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jumlah Barang</th>
        <th scope="col">Harga Barang</th>
    </tr>
</thead>
<tbody>
    <?php
    if($row_count == 0){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
    }else{
        while($row = mysqli_fetch_assoc($query_result)){
            echo "<tr>
         
            <td>{$row['id']}</td>
            <td>{$row['nama_barang']}</td>
            <td>{$row['jumlah_barang']}</td>
            <td>{$row['harga_barang']}</td>

            <td>
            <a href='formupdate.php?id={$row['id']}'>Update<a/>
            <a href='delete.php?id={$row['id']}'>Delete<a/>
            </td>

            </tr>\n";
        }
    }
    ?>
</tbody>
</table>
<?php }?>
</body>
</html>