<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Form stok barang</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="">

                <div class="form-group row">
                    <div class="col-md-6">

                        <label for="">id barang</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                        <label for="">nama barang</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                        <label>jenis barang</label>
                        <select class="form-control" name="">
                            <option value="disable">== pilih jenis==</option>
                            <option value="">Painting</option>
                            <option value="">Drawing</option>
                            <option value="">Crayon</option>

                        </select> <br>

                        <label for="">jumlah barang</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Text here..."><br>

                        <a href="" class="btn btn-primary btn-lg">Simpan</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>