<?php
include 'dbconnect.php';

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

if (!$result) {
    die("Query Error: " . $conn->error);
}
?>

    
    <section class="hero is-hero-bar">
        <div class="hero-body">
            <div class="level">
                <div class="level-left">
                    <div class="level-item"><h1 class="title">
                        Data Mahasiswa
                    </h1></div>
                </div>
                <div class="level-right" style="display: none;">
                    <div class="level-item"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-main-section">
        <div class="card has-table has-mobile-sort-spaced">
            <header class="card-header">
                <a href="#" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <div class="b-table has-pagination">
                    <div class="table-wrapper has-mobile-cards">
                        <table class="table is-fullwidth is-striped is-hoverable is-sortable is-fullwidth">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Program Studi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                            <td>{$row['nim']}</td>
                                            <td>{$row['nama']}</td>
                                            <td>{$row['jenis_kelamin']}</td>
                                            <td>{$row['alamat']}</td>
                                            <td>{$row['program_studi']}</td>
                                            <td>
                                                <a href='edit.php?id={$row['id']}'>Edit</a> | 
                                                <a href='delete.php?id={$row['id']}'>Delete</a>
                                            </td>
                                        </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>Tidak ada data mahasiswa.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <br>
    <a href="insert.php">Tambah Data Mahasiswa</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$conn->close();
?>
