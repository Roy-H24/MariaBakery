<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kue";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="widht=device-width">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icons/icon.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>MariaBakery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <selection class="menu">
        <!-- <div class="nav">
            <div class="logo">
                <a href="index.php" style="text-decoration:none">
                    <h1>Maria<b>Bakery</b></h1>
                </a>
            </div>
            <div>
                <ul>
                    <li><a href="index.php" class="<?php echo ($menu == "beranda" ? "active" : "") ?>">Beranda</a></li>
                    <li><a href="produk.php" class="<?php echo ($menu == "produk" ? "active" : "") ?>">Produk</a></li>
                    <li><a href="tentangkami.php" class="<?php echo ($menu == "tentangkami" ? "active" : "") ?>">Tentang
                            Kami</a></li>
                    <li><a href="ulasan.php" class="<?php echo ($menu == "ulasan" ? "active" : "") ?>">Ulasan</a></li>
                    <li><a href="kontak.php" class="<?php echo ($menu == "kontak" ? "active" : "") ?>">Kontak</a></li>
                </ul>
                </nav>
            </div>
            <div>
                <input class="signin" type="submit" value="Sign in" name="Signin">
                <input class="signup" type="submit" value="Sign up" name="Signup">
            </div>
        </div> -->
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #ee8dc4 !important;">
            <div class="container-fluid">
                <h1 class="ms-3">Maria<b>Bakery</b></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 p-3" style="font-family: Quicksand; font-weight: 600;">
                        <li class="nav-item m-2">
                            <a class="nav-link active" href="index.php">BERANDA</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link active" href="produk.php">PRODUK</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link active" href="tentangkami.php">TENTANG KAMI</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link active" href="ulasan.php">ULASAN</a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link active" href="kontak.php">KONTAK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </selection>