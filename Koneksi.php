<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "projectsim";

$konek = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
