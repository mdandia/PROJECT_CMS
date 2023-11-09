<div id='myalert'>
    <?= $this->session->flashdata('alert', true); ?>
</div>
<div class="col-xl-12">
    <div class="card">
        <h5 class="card-header">File Input</h5>
        <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="judul foto">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pilih foto dengan ukuran 1:3</label>
                    <input type="file" class="form-control" name="foto" accept="image/png, image/gif, image/jpeg">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    <?php foreach ($cara as $aa) { ?>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/upload/carousel/' . $aa['foto']) ?>">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $aa['judul'] ?>
                    </h5>
                    <a href="<?= base_url('admin/caraousel/hapus_foto/' . $aa['foto']); ?>" class="btn btn-outline-danger"
                        onclick="return confirm('yakin deck, mau hapus?')">
                        <span class="tf-icons bx bx-trash">Hapus</span>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>