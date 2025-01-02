<?php
include "Koneksi.php";  

// Ambil data dari form
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];

// Cek koneksi
if (!$konek) {
    die('<script>alert("Koneksi ke database gagal: ' . mysqli_connect_error() . '");</script>');
}

// Gunakan prepared statement untuk keamanan
$stmt = $konek->prepare("INSERT INTO pembelian (nama_lengkap, alamat, nama_produk, jumlah_produk) VALUES (?, ?, ?, ?)");
if ($stmt) {
    $stmt->bind_param("sssi", $nama_lengkap, $alamat, $nama_produk, $jumlah_produk); // s = string, i = integer
    $execute = $stmt->execute();

    if ($execute) {
        // Jika berhasil
        echo '<script>
                alert("Terima kasih ' . $nama_lengkap . ' telah membeli ' . $jumlah_produk . ' product aksesoris ' . $nama_produk . ' dari AlsyaCollection");
                window.location.href = "forminputdatadiri.php";
              </script>';
    } else {
        // Jika gagal eksekusi query
        echo '<script>alert("Data Gagal Disimpan: ' . $stmt->error . '")</script>';
        echo '<meta HTTP-EQUIV="REFRESH" content="0;url=forminputdatadiri.php">';
    }
    $stmt->close(); // Tutup statement
} else {
    // Jika gagal mempersiapkan statement
    echo '<script>alert("Gagal mempersiapkan query: ' . $konek->error . '")</script>';
    echo '<meta HTTP-EQUIV="REFRESH" content="0;url=forminputdatadiri.php">';
}

// Tutup koneksi
$konek->close();
?>
