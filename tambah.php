<?php
    require 'controller.php';

    if (isset($_POST["submit"])){

        if( tambahData($_POST)>0){
        echo "data berhasil dimasukan";
        }else{
        echo "data gagal dimasukkan";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nama </label><br>
        <input type="text" name="nama"><br>
        <label for="">Nis </label><br>
        <input type="number" name="nis"><br>
        <label for="">Rombel </label><br>
        <input type="text" name="rombel"><br>
        <label for="">Rayon </label><br>
        <input type="text" name="rayon"><br>
        <label for="">Status </label><br>
        <input type="text" name="status"><br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>