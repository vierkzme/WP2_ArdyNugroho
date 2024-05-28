<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>

    <div class="row">
        <div class="col-lg">
            <a href="<?= base_url('kategori/tambah'); ?>" class="btn btn-primary mb-3">Tambah Kategori</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kategori as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['kategori']; ?></td>
                            <td>
                                <a href="<?= base_url('kategori/edit/' . $k['id']); ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('kategori/hapus/' . $k['id']); ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus kategori ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
