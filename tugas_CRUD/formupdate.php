<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/main.css">
    <title>addform page</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include("update.php");
    ?>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="namabarang">Nama Barang</label>
            <input type="text" class="form-control" id="namabarang" name="namabarang"
            placeholder="Masukkan Nama Barang">
        </div>
        <div class="form-group">
            <label for="jumlahbarang">Jumlah Barang</label>
            <textarea class="form-control" name="jumlahbarang" id="jumlahbarang" cols="30" rows="2"
            placeholder="Masukkan Jumlah Barang"></textarea>
        </div>
        <div class="form-group">
            <label for="hargabarang">Harga Barang</label>
            <input type="text" class="form-control" id="hargabarang" name="hargabarang"
            placeholder="Masukkan Harga Barang">
        </div>
        <input type="submit" value="Simpan" name="submit"/>
    </form>
</body>

</html>