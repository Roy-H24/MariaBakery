<?php
$menu = "produk";
include 'header.php';
?>
<style>
a {
    text-decoration: none;
    color: black;
}

.img-produk {
    width: 100%;
    height: 200px;
    object-fit: contain;
}

.card {
    width: 100%;
    height: 100%;
}

.col-sm-3 {
    display: flex;
    justify-content: center;
    align-items: center;
}

@media (max-width: 576px) {
    .col-sm-3 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .col-sm-3 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

@media (min-width: 769px) and (max-width: 992px) {
    .col-sm-3 {
        flex: 0 0 33.33%;
        max-width: 33.33%;
    }
}

@media (min-width: 993px) {
    .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }
}
</style>

<div class="container">
    <div class="row">
        <?php
        $sql = "SELECT * FROM produk";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
        <div class="col-sm-3 mb-3 text-center p-3">
            <div class="card border border-danger">
                <a
                    href="https://api.whatsapp.com/send?phone=6285741779225&text=Halo, saya ingin memesan kue <?= $row["nm_produk"] ?>">
                    <img class="img-produk mt-4" src="image/cake/<?= $row["image"]; ?>" alt="trulli">
                    <div class="card-body">
                        <h4 class="p-2"><?= ucwords($row["nm_produk"]) ?></h4>
                        <p>Rp<?= number_format($row["harga"], 0, ',', '.'); ?></p>
                    </div>
                </a>
            </div>
        </div>
        <?php }
        } else {
            echo "<p class='col-12 text-center'>0 results</p>";
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>