<div id='myalert'>
    <?= $this->session->flashdata('alert', true); ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post" enctype="multipart/form-data">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfigurasi</h1>
        </div>
        <div class="modal-body">
            <input type="hidden" value="<?= $konfig->foto; ?>" name="nama_foto">
            <div class="mb-3 mt-4">
                <label class="form-label">Judul Website</label>
                <input type="text" class="form-control" name="judul_website" value="<?= $konfig->judul_website; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Profile Website</label>
                <textarea class="form-control" id="konten" placeholder="" style="height: 150px;"
                    name="profil_website"><?= $konfig->profil_website; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Instagram</label>
                <input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Facebook</label>
                <input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tik Tok</label>
                <input type="text" class="form-control" name="tiktok" value="<?= $konfig->tiktok; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat (ISI DENGAN LENGKAP)</label>
                <input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Whatsapp</label>
                <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">ID Link Youtube</label>
                <input type="text" class="form-control" name="id_yt" value="<?= $konfig->id_yt; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Jam Buka</label>
                <input type="text" class="form-control" name="jam_buka" value="<?= $konfig->jam_buka; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" accept="image/png, image/gif, image/jpeg">
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <img class="card-img-top" style="width: 150px"
                    src="<?= base_url('assets/upload/konfig/' . $konfig->foto); ?>">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form>