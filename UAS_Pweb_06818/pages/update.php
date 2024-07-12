<?php
include 'dbconnect.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$program_studi = $_POST['program_studi'];

$sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', program_studi='$program_studi' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data mahasiswa berhasil diperbarui.";
} else {
    echo "Error: ";
}

$conn->close();
?>
