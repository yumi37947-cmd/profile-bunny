<?php
include 'koneksi.php';

$id = $_GET['id'];
$d = $conn->query("SELECT * FROM stories WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
    margin:0;
    background:url('uploads/<?php echo $d['gambar'];?>') no-repeat center/cover;
    color:white;
    font-family:sans-serif;
}
.overlay{
    background:rgba(0,0,0,0.7);
    height:100vh;
    padding:20px;
}
</style>
</head>

<body>

<div class="overlay">

<h2><?php echo $d['judul']; ?></h2>
<h4><?php echo $d['karakter']; ?></h4>

<p><?php echo nl2br($d['isi']); ?></p>

<a href="index.php">⬅ Kembali</a>

</div>

</body>
</html>