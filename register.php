<?php
require 'controller.php';

    if( isset($_POST["register"])){
        if( register($_POST) > 0){
            echo "<script>
                alert('akun berhasil ditambahkan');
                document.location.href = 'input-data.php';
                </script>";
            
        }else{
            mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="position-absolute top-50 start-50 translate-middle">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h3 class="text-center ">REGISTRASI</h3>
        <form action="" method="post">
                <label for="">Username</label><br>
                <input type="text" name="username" id="" autocomplete="off" ><br>
                <label for="">Password</label><br>
                <input type="text" name="password" id="" autocomplete="off"><br>
                <label for="">Konfirmasi password</label><br>
                <input type="text" name="conf_password" id="" autocomplete="off"><br><br>
            <button type="submit" name="register" class="btn btn-outline-primary">Kirim</button>
        </form>
    </ul>
  </div>
</div>
</div>


</body>
</html>