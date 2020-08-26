<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Buat Artikel Baru</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="">Input Judul</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                        <label for="">Upload Gambar</label>
                        <input type="file" class="form-control form-control-user" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Input Keterangan Singkat</label>
                        <textarea name="" id="" rows="5" class="form-control form-control-user"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col">
                        <label for="">Isi artikel</label>
                        <textarea name="" id="" rows="5" class="form-control form-control-user"></textarea>
                    </div>
                </div>
                <a href="" class="btn btn-primary">Submit</a>
                <a href="/admin/manajemen_artikel" class="btn btn-warning">Manajemen Artikel</a>
            </form>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>