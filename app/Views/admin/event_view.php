<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Form tambah event</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="">Judul event</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                        <label for="">Upload banner</label>
                        <input type="file" class="form-control form-control-user" id="">

                        <label for="">Keterangan</label>
                        <textarea name="" id="" rows="8" class="form-control form-control-user"></textarea>

                        <a href="" class="btn btn-primary mt-3 btn-lg">Submit</a>

                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>