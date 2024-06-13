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
    <?php
    session_start();
        if($_SESSION['is_logged_in'] != TRUE)
        {
            header('Location: form_login.html');
            exit();
        }

        echo $_SESSION['nama'];
    ?>
    
    <div class="container mt-5">
    <div class="row">
        <!-- Menu Kiri -->
        <h1>Selamat Datang, <?php echo $_SESSION['nama']?></h1>
        <div class="col-md-3">
            <ul class="list-group">
                <a href="halaman2.php" class="list-group-item">Beranda</a>
                <a href="Jadwal Kuliah.php" class="list-group-item">Jadwal Kuliah</a>
                <a href="Biodata.php" class="list-group-item">Biodata</a>
                <a href="logout.php" class="list-group-item">logout</a>
            </ul>
        </div>
</body>
</html>