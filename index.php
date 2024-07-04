<?php
$menu = "beranda";
include 'header.php';
?>

<style>
.container {
    display: flex;
    flex-wrap: wrap;
}

.content {
    display: flex;
    width: 100%;
}

.content-left,
.content-right {
    flex: 1;
    padding: 10px;
}

.content-right img {
    width: 100%;
    border-radius: 50%;
}

@media (max-width: 768px) {
    .content {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .content-left {
        order: 2;
    }

    .content-right {
        order: 1;
    }
}
</style>

<section>
    <video width="100%" height="550" autoplay muted>
        <source src="video/cakeVideo.mp4" type="video/mp4">
        <source src="video/video.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</section>

<section>
    <div class="container">
        <div class="content">
            <div class="content-left">
                <div class="info">
                    <h2 style="font-size: 2.8rem;">Setiap Kue Kami <br> Dibuat Dengan Cinta</h2>
                    <p> Maniskan Harimu.. <br></p>
                </div>
                <a href="produk.php"><button>Pesan Sekarang</button></a>
            </div>
            <div class="content-right">
                <img src="image/cakeLogo.png" alt="trulli">
            </div>
        </div>
    </div>
</section>

<!-- <selection id="bawah" class="grid">
</selection> -->
<?php include 'footer.php'; ?>