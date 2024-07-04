<?php
$menu = "tentangkami";
include 'header.php';
?>

<style>
.container {
    padding: 40px 0;
}

h2 {
    font-size: 2.5em;
    font-weight: bold;
    color: #D2691E;
    /* Chocolate color */
}

p {
    font-size: 1.1em;
    line-height: 1.6;
    color: #555;
}

.section-title {
    margin-bottom: 40px;
}

img {
    border-radius: 15px;
}

.bg-light {
    background-color: #f9f9f9;
    border-radius: 15px;
    padding: 30px;
}

.highlight {
    color: #D2691E;
    font-weight: bold;
}
</style>

<div class="container">
    <section class="bg-light">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="image/cakeLogo.png" alt="Maria Bakery Logo" class="img-fluid">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <h2 class="mb-5 section-title">Tentang Kami</h2>
                <p>Selamat datang di <span class="highlight">Maria Bakery</span>, toko kue yang didirikan dengan cinta
                    dan dedikasi untuk memberikan kue-kue terbaik bagi Anda. Kami percaya bahwa setiap momen spesial
                    layak dirayakan dengan kue yang istimewa.</p>
                <p><span class="highlight">Maria Bakery</span> didirikan pada tahun <strong>2024</strong> oleh
                    <strong>Michayla</strong>, seorang pecinta kue yang berkomitmen untuk menghadirkan rasa dan kualitas
                    terbaik. Dari kue ulang tahun yang megah hingga cupcake yang lezat, kami selalu menggunakan
                    bahan-bahan berkualitas tinggi dan resep terbaik.
                </p>
                <p>Visi kami adalah menjadi toko kue terkemuka yang dikenal dengan kelezatan dan inovasi produk kami.
                    Misi kami adalah menyajikan kue yang tidak hanya memanjakan lidah tetapi juga menciptakan kenangan
                    manis bagi setiap pelanggan.</p>
                <p>Terima kasih telah memilih <span class="highlight">Maria Bakery</span>. Kami berharap dapat menjadi
                    bagian dari setiap perayaan dan momen spesial Anda.</p>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>