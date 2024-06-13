<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/halaman1.css">
    <title>halaman 1</title>
</head>
<body>
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <a href="form_login.php" class="list-group-item">Login Kembali</a>
            </ul>
        </div>
</body>
</html>
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $u = 'sulaeman';
    $p = 'polke001';

    if($username == $u AND $password == $p)
    {
        session_start();
        $_SESSION['nama'] = $username;
        $_SESSION['is_logged_in'] = TRUE;

        header("Location: halaman1.php");
    }
    else
    {
        echo "Username atau password salah";
    }