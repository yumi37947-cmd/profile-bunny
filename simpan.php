<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$karakter = $_POST['karakter'];
$isi = $_POST['isi'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp, "uploads/".$gambar);

$conn->query("INSERT INTO stories 
(judul,karakter,isi,gambar)
VALUES
('$judul','$karakter','$isi','$gambar')");

header("Location: index.php");
?>