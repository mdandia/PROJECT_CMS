<div id='myalert'>
    <?= $this->session->flashdata('alert', true); ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfigurasi</h1>
        </div>
        <div class="modal-body">
                <div class="mb-3 mt-4">
                    <label class="form-label">Judul Website</label>
                    <input type="text" class="form-control" name="judul_website" value="<?= $konfig->judul_website; ?>">
                </div>
                <div class="mb-3 mt-4">
                    <label class="form-label">Judul Profil</label>
                    <input type="text" class="form-control" name="judul_profil" value="<?= $konfig->judul_profil; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Profile Website</label>
                    <textarea class="form-control" id="konten" placeholder="" style="height: 150px;" name="profil_website"><?= $konfig->profil_website; ?></textarea>
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
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Whatsapp</label>
                    <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</form>
