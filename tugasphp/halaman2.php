<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="halaman2.css" rel="stylesheet">
    <title>Halaman2</title>
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
        <!-- Menu_kanan -->
        <div class="col-md-3">
            <h3>SULAEMAN_06818</h3>
            <ul class="list-group">
                <a href="halaman1.php" class="list-group-item">Halaman 1</a>
                <a href="Biodata.php" class="list-group-item">Biodata</a>
                <a href="Jadwal Kuliah.php" class="list-group-item">Jadwal Kuliah</a>
                <a href="logout.php" class="list-group-item">Logout</a>
                
            </ul>
        </div>
   <!-- Konten Beranda -->
   <div class="col-md-9">
            <h1>HALAMAN 2</h1>
            <section class="mt-4">
                <h2>Latar Belakang </h2>
                <p>
                    "Nama saya Sulaeman. Saya sekarang masih berkuliah semester 4 di Universitas Dian Nuswantoro dengan Jurusan Sistem informasi. Selama ini, saya sudah terbiasa melakukan perkuliahan dan memahami materi yang diajarkan
                    jadi, dengan pemahaman tersebut, saya ingin mengembangkan karir di bidang serupa dan sebagai seseorang yang menyukai 
                    bermain game dan tantangan dan belajar, mendaftar magang di perusahaan unu langkah yang saya rasa tepat untuk saya ingin mengembangkan ilmu dan keahlian lebih dalam"
                </p>
            </section>
            <img src="gambar2.jpeg">
            <section class="mt-4">
                <h2>Cerpen </h2>
                <p>Aku punya kucing yang lucu dan manis. Namanya adalah Katty. Dia berwarna putih dengan corak abu-abu di tubuhnya. Dia memiliki telinga dan mata yang bulat. Kucingku juga sangat suka makan dan tidur seharian.
                    Katty adalah teman baikku. Dia selalu menemaniku untuk bermain di rumah setelah aku pulang. Dia suka mengendus-endus dan berlari-lari di sekitarku. Katty juga suka dielus dan dipeluk. Dia sangat jinak dan tidak pernah menggigit ataupun mencakar.
                    Aku sangat sayang Katty. Aku selalu merawatnya dengan baik. Aku pun sering memberi makan dan minum yang cukup. Tidak lupa, aku pun sering membersihkan kandangnya setiap hari. Dan juga membawanya ke dokter hewan saat Katty sakit.
                    Katty adalah kucing yang lucu dan manis. Aku sangat beruntung memiliki dia sebagai temanku. Aku berharap dia bisa hidup lama dan sehat selalu.
                </p>
            </section>
        </div>
    </div>
</div>
    
</body>
</html>