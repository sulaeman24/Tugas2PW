<?php
    include 'dbconnect.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>NIM:</label><br>
        <input type="text" name="nim" value="<?php echo $row['nim']; ?>" required><br>
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
        <label>Jenis Kelamin:</label><br>
        <input type="text" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>" required><br>
        <label>Alamat:</label><br>
        <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required><br>
        <label>Program Studi:</label><br>
        <input type="text" name="program_studi" value="<?php echo $row['program_studi']; ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php
$conn->close();
?>
