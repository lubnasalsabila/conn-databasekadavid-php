<?php 

   $conn =  mysqli_connect("localhost", "root", "", "latihan_xpplg");

   function query( $query ) {
    global $conn;
    $result =  mysqli_query( $conn, $query);
    $kotaks = [];
    while ( $kotak = mysqli_fetch_assoc($result) ) {
        $kotaks[] = $kotak;
    }
    return $kotaks;
   }

   function tambahData($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $rombel = htmlspecialchars($data["rombel"]);
    $rayon= htmlspecialchars($data["rayon"]);
    $status = htmlspecialchars($data["status"]);

    $query = "INSERT INTO students
             VALUES
             ('', '$nama', '$nis', '$rombel', '$rayon', '$status' )
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
   }    

    function delete( $id ){
        global $conn;
        mysqli_query($conn, "DELETE FROM students WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

       function ubahData($data){
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon= htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
    
        $query = "UPDATE students SET
                    nama = '$nama',
                    nis = '$nis',
                    rombel = '$rombel',
                    rayon = '$rayon',
                    status = '$status'
                WHERE id = $id
        ";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

    function search ( $keyword){
        $query = "SELECT * FROM students
                 WHERE 
                 nama LIKE '%$keyword%' OR
                 nis LIKE '%$keyword%' OR
                 rombel LIKE '%$keyword%' OR
                 rayon LIKE '%$keyword%' OR
                 status LIKE '%$keyword%'";

        return query($query);
    }

    function register( $data ){
        global $conn;

        $username = strtolower( stripslashes($data['username']));
        $password = $data['password'];
        $conf_password = $data['conf_password'];
        if( $password !== $conf_password ){
            echo "<script>
                alert('akun berhasil ditambahkan')
                </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users
                VALUES
                    ('', '$username', '$password')";
                    
        mysqli_query( $conn, $query );

        return mysqli_affected_rows($conn);
    }
?>