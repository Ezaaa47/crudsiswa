<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

$siswa = $conn->query("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<footer class="text-center mt-0 py-0" style="background-color: DarkSlateGray; color: white;">
    Server IP : <?= $_SERVER['SERVER_ADDR'] ?>
</footer>
<?php include 'menu.php'; ?>

<div class="container mt-4">
        <div style='text-align:center;'>
            <h2>CRUD Siswa</h2>
            <h5>SMKN 1 Banyumas</h5>
            <hr>
        </div>

    <h2>Data Siswa</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Absen</th>
                <th>Foto</th>
                <th style="width: 20%;">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $siswa->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['kelas']) ?></td>
            <td><?= $row['absen'] ?></td>
            <td><img src="uploads/<?= $row['foto'] ?>" width="50"></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
