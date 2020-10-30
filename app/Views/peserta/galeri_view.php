<?= $this->extend('layout/galeri_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1>Galeri Gambar Yoshiko</h1>

    <div class="col kotak">
        <ul class="gallery">
            <li>
                <a href="#gambar-1">
                    <img src="/assets/galeri/img/thumb/1.jpg" alt="Daenerys Targaryen">
                </a>

                <div class="overlay" id='gambar-1'>
                    <a href="#" class="close">X Close</a>
                    <img src="/assets/galeri/img/full/1.jpg" alt="">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                Denerys Targaryen
                                <br>
                                <p>the mother of dragon sebagai julukannya. dibuat dengan versi anime dengan style gambar yang dimiliki yoshiko.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <div class="clear"></div>
        </ul>
    </div>

</div>

<?= $this->endSection(); ?>