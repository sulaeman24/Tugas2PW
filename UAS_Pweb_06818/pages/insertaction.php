<?php
include 'dbconnect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $program_studi = $_POST['program_studi'];

    
    $sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, alamat, program_studi) VALUES ('$nim', '$nama', '$jenis_kelamin', '$alamat', '$program_studi')";

    if ($conn->query($sql) === TRUE) {
        echo "Data mahasiswa berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
