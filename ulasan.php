<?php
$menu = "ulasan";
include 'header.php';
include 'services/ulasan.php';
?>
<style>
.container {
    padding: 40px 0;
}

h4.judul-video {
    font-size: 2em;
    font-weight: bold;
    color: #D2691E;
    /* Chocolate color */
    margin-bottom: 30px;
}

.komentar-form {
    margin-bottom: 40px;
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.komentar-form label {
    font-size: 1.2em;
    color: #555;
}

.komentar-form input,
.komentar-form textarea {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.komentar-form button {
    background-color: #D2691E;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.komentar-form button:hover {
    background-color: #c5571b;
}

.card {
    margin-bottom: 30px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 30px;
}

.card img {
    border-radius: 50%;
}

.card h6 {
    font-size: 1.5em;
    font-weight: bold;
}

.card p {
    font-size: 1.1em;
    color: #555;
}

.badge {
    margin-left: 10px;
}

.link-muted {
    color: #bbb;
    margin-left: 10px;
}

.link-muted:hover {
    color: #888;
}

.link-success {
    color: #28a745;
    margin-left: 10px;
}

.link-success:hover {
    color: #218838;
}

.link-danger {
    color: #dc3545;
    margin-left: 10px;
}

.link-danger:hover {
    color: #c82333;
}

@media (max-width: 576px) {
    .card-body {
        padding: 20px;
    }

    .komentar-form {
        padding: 20px;
    }
}
</style>

<div class="container">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="card text-body">
                    <div class="card-body p-4">
                        <h4 class="mb-0">Komentar Terbaru</h4>
                        <p class="fw-light mb-4 pb-2">Bagian Komentar terbaru oleh pengguna</p>

                        <div class="d-flex flex-start">
                            <div>
                                <?php foreach ($dataUlasan as $du) : ?>
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-1">
                                        <?= $du['nama'] ?>
                                    </h6>
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0">
                                            <?= $du['tanggal'] ?>
                                        </p>
                                        <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                                        <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                                        <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                                    </div>
                                    <p class="mb-2">
                                        <?= $du['ulasan'] ?>
                                    </p>
                                    <hr class="mt-3" />
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <section class="ulasan" id="Ulasan" data-aos="fade-up" data-aos-duration="1500">
                    <header>
                        <h4 class="judul-video">Ulasan</h4>
                    </header>
                    <form action="services/tambahUlasan.php" method="POST" class="komentar-form">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" required>

                        <label for="ulasan">Ulasan</label>
                        <textarea id="ulasan" name="ulasan" rows="4" required></textarea>

                        <button type="submit">Kirim</button>
                    </form>
                </section>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>