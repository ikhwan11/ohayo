<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Kelola Gallery</h1>
        </div>
    </div>
    <div class="col-md-6">
        <form action="">
            <div class="form-group">
                <label for="">Upload Foto</label>
                <input type="file" class="form-control form-control-user" id="">
            </div>
            <div class="form-group">
                <label>Kategori Foto</label>
                <select class="form-control" name="">
                    <option value="disable">== pilih kategori Foto==</option>
                    <option value="travel">lg-8</option>
                    <option value="news">lg-6</option>
                    <option value="kuliner">lg-4</option>
                    <option value="teknologi">lg-3</option>
                </select>
            </div>
            <a href="#" class="btn btn-primary">Submit</a>
        </form>
    </div>

</div>

<?= $this->endSection(); ?>