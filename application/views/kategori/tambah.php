<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6">
            <?= form_open('kategori/tambah'); ?>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori">
                <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <?= form_close(); ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
