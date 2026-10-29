<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Perpustakaan - Data Buku</title>
</head>
<body>
    <h2>Daftar Koleksi Buku</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
        </tr>
        <?php foreach ($buku_list as $buku): ?>
        <tr>
            <td><?= $buku['id_buku']; ?></td>
            <td><?= $buku['judul']; ?></td>
            <td><?= $buku['penulis']; ?></td>
            <td><?= $buku['tahun_terbit']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>