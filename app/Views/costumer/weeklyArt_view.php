<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>

<!--================Home Banner Area =================-->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/ohayo_item/weekly-1-min.jpg" class="tales" alt="...">
            <div class="carousel-caption text-left">
                <div class="col">
                    <h1>Art and emotion</h1>
                </div>

                <div class="col-md-6">
                    <p>In psychology of art, the relationship between art and emotion has newly been the subject of extensive study thanks to the intervention of esteemed art historian Alexander Nemerov. Emotional or aesthetic responses to do art have previously been viewed as basic stimulus response, but new theories and research have suggested that these experiences are more complex and able to be studied experimentally.</p>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/ohayo_item/weekly-2-min.jpg" class="tales" alt="...">
            <div class="carousel-caption text-left">
                <div class="col">
                    <h1>Art is an Expression</h1>
                </div>

                <div class="col-md-6">
                    <p>Art is an expression—an expression of feeling, belief, and character. The simplicity of that sentence is rather deceptive and seems tidier than its implications. Just the statement that art is an expression is complex and raises questions: What does art express? Why does art express? How does art express?</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/assets/ohayo_item/weekly-3-min.jpg" class="tales" alt="...">
            <div class="carousel-caption text-left">
                <div class="col">
                    <h1>Art is Creation</h1>
                </div>

                <div class="col-md-6">
                    <p>Art is more godlike than science. Science discovers: art creates – John Opie</p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--================End Home Banner Area =================-->

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-5">Best Weekly Art</h1>
            <p class="text-center">weekly art adalah karya-karya yang dibuat peserta kursus diluar dari module yang diberikan coach</p>
            <hr>
        </div>
    </div>
    <div class="row">

        <?php foreach ($weekly as $w) : ?>
            <div class="col-md-6 mb-3">
                <div class="text-left">
                    <div class="caption">
                        <h3><?= $w['judul_karya']; ?></h3>
                        <p><?= $w['nama_peserta']; ?></p>
                        <p>Kelas <?= $w['kelas']; ?></p>
                        <p><?= $w['umur']; ?> tahun</p>
                    </div>
                    <img src="/img/weekly_art/<?= $w['gambar']; ?>" class="rounded art" style="weight:100px;" alt="...">
                    <p><?= $w['keterangan']; ?></p>
                </div>
                <hr>
            </div>
        <?php endforeach; ?>

    </div>
</div>


<?= $this->endSection(); ?>