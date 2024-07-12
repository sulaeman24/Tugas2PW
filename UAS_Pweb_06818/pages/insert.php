<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method="post" action="insertaction.php">
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br>
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>
        <label>Jenis Kelamin:</label><br>
        <input type="text" name="jenis_kelamin" required><br>
        <label>Alamat:</label><br>
        <input type="text" name="alamat" required><br>
        <label>Program Studi:</label><br>
        <input type="text" name="program_studi" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
