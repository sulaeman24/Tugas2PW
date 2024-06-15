<?php
    include("dbconnect.php");

    $user = $_POST['username'];
    $paswd = md5(sha1($_POST['paswd']));
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $program_studi = $_POST['program_studi'];
    $status = $_POST['status'];

    $insert = $k->query("INSERT INTO users (username,nama,email,paswd,active) VALUES ('".$user."','".$nama."','".$email."','".$paswd."',1)");
    if($insert)
    {
       header("Location: main.php");
    }
    else
    {
        echo "insert data gagal";
    }