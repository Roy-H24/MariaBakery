<?php
$menu = "kontak";
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
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="Whatsapp-logo"
                    class="img-fluid mx-5">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7 p-2">
                <h2 class="mb-5 section-title">Kontak Kami</h2>
                <form>
                    <div class="mb-4 col-12">
                        <label for="exampleNoTelp" class="form-label">No. Telp</label>
                        <input type="notelp" class="form-control" id="exampleNoTelp" aria-describedby="noTelpHelp"
                            value="+62 857-4177-9225" disabled>
                    </div>
                    <div class="mb-4 col-12">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            disabled>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=6285741779225&text" class="btn btn-success">Hubungi
                        Sekarang</a>
                </form>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>