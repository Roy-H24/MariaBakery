<?php
include 'koneksi.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tanggal = date('Y-m-d');
    $ulasan = $_POST['ulasan'];

    if (empty($nama) || empty($tanggal) || empty($ulasan)) {
        echo "Nama, Tanggal, dan Ulasan harus diisi.";
    } else {
        $query = "INSERT INTO ulasan (nama, tanggal, ulasan) VALUES ('$nama', '$tanggal', '$ulasan')";

        if (mysqli_query($db, $query)) {
            $_SESSION['success_message'] = "Ulasan berhasil ditambahkan.";
            header("Location: ../ulasan.php");
            exit();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }
    }
} else {
    echo "Akses tidak sah.";
}