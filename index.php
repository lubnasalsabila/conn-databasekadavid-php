<?php
    // $conn = mysqli_connect("localhost", "root", "", "latihan_xpplg");
    require 'controller.php';

    $students = query("SELECT * FROM students");

    //mengembalikan indeks angka
    // $cek = mysqli_fetch_row($result);

    //mengembalikan indeks string
    // $cek = mysqli_fetch_assoc($result);
    // var_dump($cek["nama"]);

    if ( isset($_POST["search"])){
        $students = search($_POST["keyword"]);
    }
    
    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table {
        border-collapse: collapse;
        color: #232323;
        }
        table, th, td {
        border-style: dotted solid;
        margin-right: auto;
        margin-left: auto;
        padding: 25px;
        position: relative;
        border: 1px solid #868B8E;
        }
</style>
<body>
    <a href="tambah.php">tambah data</a><br>

    <form action="" method="post">
        <input type="text" name="keyword" >
        <button type="submit" name="search">cari</button>
    </form>

    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nis</th>
                <th>Rombel</th>
                <th>Rayon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($students as $student){?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?php echo $student["nama"] ?></td>
                    <td><?php echo $student["nis"] ?></td>
                    <td><?php echo $student["rombel"] ?></td>
                    <td><?php echo $student["rayon"] ?></td>
                    <td><?php echo $student["status"] ?></td>
                    <td>
                        <a href="delete.php?id=<?= $student ['id']?>">hapus</a>

                        <a href="update.php?id=<?= $student ['id']?>">ubah</a>
                    </td>

                </tr>
                <?php $i++ ?>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>