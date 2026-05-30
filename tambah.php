<!DOCTYPE html>
<html>
<body>

<h2>Tambah Cerita</h2>

<form action="simpan.php" method="post" enctype="multipart/form-data">
Judul: <input type="text" name="judul"><br><br>
Karakter: <input type="text" name="karakter"><br><br>
Isi:<br>
<textarea name="isi"></textarea><br><br>
Gambar: <input type="file" name="gambar"><br><br>

<button type="submit">Simpan</button>
</form>

</body>
</html>