<div id='myalert'>
    <?= $this->session->flashdata('alert', true); ?>
</div>
<div class="col-xl-12">
    <div class="card">
        <h5 class="card-header">File Input Gallery</h5>
        <form action="<?= base_url('admin/gallery/simpan') ?>" method="post" enctype="multipart/form-data">
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
</div>
<div class="row">
    <?php foreach ($galer as $hh) { ?>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('assets/upload/gallery/' . $hh['foto']) ?>" width="288px" height="288px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $hh['judul'] ?>
                    </h5>
                    <a hhref="<?= base_url('admin/gallery/hapus_foto/' . $hh['foto']); ?>" class="btn btn-outline-danger"
                        onclick="return confirm('yakin deck, mau hapus?')">
                        <span class="tf-icons bx bx-trash">Hapus</span></a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>