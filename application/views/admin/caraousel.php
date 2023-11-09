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
        <div class="col-md-12 mb-3 mt-3">
            <div class="card h-100">
                <img src="<?= base_url('assets/upload/carousel/' . $aa['foto']) ?>" class="card-img-top" alt="50px">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $aa['judul'] ?>
                    </h5>
                    <a href="<?= base_url('admin/caraousel/hapus_foto/' . $aa['foto']) ?>"
                        onclick="return confirm('Anda Yakin menghapus data ini?')">
                        <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg> </button>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>