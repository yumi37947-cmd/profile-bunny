<?php
$conn = new mysqli("localhost","root","","mlp_story");

if($conn->connect_error){
    die("Koneksi gagal");
}
?>