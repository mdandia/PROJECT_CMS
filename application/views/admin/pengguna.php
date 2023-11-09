<div id='myalert'>
    <?= $this->session->flashdata('alert', true); ?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-dark m-1" data-bs-toggle="modal" data-bs-target="#kategori">
    Tambah Pengguna
</button>

<!-- Modal -->
<div class="modal fade" id="kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('admin/user/simpan'); ?>">
                    <h6 class="mb-6">Input Data</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="username">
                        <label>Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nama">
                        <label>Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password">
                        <label>Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="level">
                            <option selected></option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        <label>Level</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<table id="coba" class="table table-hover" style="width:100%">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Level</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($user as $aa) { ?>
            <tr>
                <th scope="row">
                    <?= $no; ?>
                </th>
                <td>
                    <?= $aa['username']; ?>
                </td>
                <td>
                    <?= $aa['nama']; ?>
                </td>
                <td>
                    <?= $aa['level']; ?>
                </td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#exampleModal<?= $aa['id_user'] ?>" href="<?= base_url('admin/user/edit/') ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen"
                            viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                        </svg></button>
                    </a>
                    <a href="<?= base_url('admin/user/hapus/' . $aa['id_user']) ?>"
                        onclick="return confirm('Anda Yakin menghapus data ini?')">
                        <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg> </button>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?= $aa['id_user'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('admin/user/update'); ?>" method="post">
                                        <input name="id_user" type="hidden" value="<?= $aa['id_user']; ?>">
                                        <h6 class="mb-6">Edit Data</h6>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" readonly name="username"
                                                value="<?= $aa['username']; ?>">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </td>
            </tr>
            <?php $no++;
        } ?>
    </tbody>
</table>