<?= $this->extend('layout/main_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-3">Buat Feedback</h1>
            <p class="text-center">Beritahu kami apa yang menjadi keluhan dan saran kami siap membantu.</p>
            <hr>
        </div>
    </div>
    <?= session()->get('pesan'); ?>
    <div class="row">
        <div class="col-md-6">
            <form action="/Peserta_feedback/submit_feedback" method="POST">
                <input type="text" id="nama_peserta" name="nama_peserta" placeholder="text here.." class="form-control" autofocus value="<?= session()->get('nama'); ?>" hidden>
                <br>

                <?php if ($validation->getError('text')) { ?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        text tidak boleh kosong
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>

                <label for="">Masukan keluhan dan saran anda :</label>
                <textarea name="text" id="text" rows="8" class="form-control form-control-user"></textarea>
                <br>

                <button type="submit" href="" class="btn btn-success btn-lg mb-3">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>