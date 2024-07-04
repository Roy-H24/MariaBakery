<?php
$db = mysqli_connect('localhost', 'root', '', 'db_kue');

if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}