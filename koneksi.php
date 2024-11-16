<?php
    $namahost = "localhost";
    $user = "root";
    $password = "";
    $databases = "ppdb";
    $conn = mysqli_connect($namahost,$user,$password,$databases);
    if (!$conn) {
        echo "database tidak terhubung";
    }
?>