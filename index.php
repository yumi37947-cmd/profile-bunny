<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
    font-family:sans-serif;
    background:linear-gradient(135deg,#ff9a9e,#fad0c4);
}
.card{
    background:white;
    margin:10px;
    padding:15px;
    border-radius:10px;
}
a{ text-decoration:none; }
</style>
</head>

<body>

<h1>BUATLAH CERITA</h1>

<a href="tambah.php">➕ Tambah Cerita</a>

<?php
$data = $conn->query("SELECT * FROM stories ORDER BY id DESC");

while($d=$data->fetch_assoc()){
    echo "<div class='card'>
    <h3>".$d['judul']."</h3>
    <p>".$d['karakter']."</p>
    <a href='baca.php?id=".$d['id']."'>Baca</a>
    </div>";
}
?>

</body>
</html>