<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}






?>

<!DOCTYPE html>
<html>
<head>
    <title>halaman admin</title>
</head>
<body>
   
<h1>daftar mahasiswa</h1>

<a href="tambah.php">tambah data mahasiswa</a>

<br></br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus
    placeholder="masukan keyword pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>

</form>
<br>

<table border="1" cellpedding="10" cellspacing="0">

<tr>
    <th>no.</th>
    <th>aksi</th>
    <th>gambar</th>
    <th>nrp</th>
    <th>nama</th>
    <th>email</th>
    <th>jurusan</th>
</tr>

<?php $i = 1; ?>
<?php foreach( $mahasiswa as $row) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
            return confirm('bener nih?');">hapus</a>
    </td>
    <td><img src="<?= $row["gambar"]; ?>" width="50"></td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

</table>


</body>
</html>