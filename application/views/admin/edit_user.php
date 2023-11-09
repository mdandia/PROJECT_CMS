<?php foreach ($user as $aa) { ?>
    <form action="<?= base_url('admin/user/update'); ?>" method="post">
        <input name="id_user" type="hidden" value="<?= $aa['id_user']; ?>">
        <h6 class="mb-6">Edit Data</h6>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" readonly name="username" value="<?= $aa['username']; ?>">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nama" value="<?= $aa['nama']; ?>">
            <label for="floatingInput">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="level">
                <option selected></option>
                <option value="admin" <?php if ($aa['level'] == 'admin') {
                    echo "selected";
                } ?>>Admin</option>
                <option value="siswa" <?php if ($aa['level'] == 'siswa') {
                    echo "selected";
                } ?>>Siswa</option>
            </select>
            <label for="floatingSelect">Level</label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan perubahan</button>
    </form>
<?php } ?>