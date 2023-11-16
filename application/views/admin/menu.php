<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js">
<div id='myalert'>
    <?= $this->session->flashdata('alert', true); ?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-dark m-1" data-bs-toggle="modal" data-bs-target="#menu">
    Tambah menu
</button>


<!-- Modal -->
<div class="modal fade" id="menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">menu</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('admin/menu/simpan_menu'); ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Tambah menu</label>
                        <input type="text" class="form-control" name="nama_menu">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto" accept="image/png, image/gif, image/jpeg">
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
<table id="example" class="table table-hover" style="width:100%">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama menu konten</th>
            <th scope="col">Foto menu</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($menu as $tampil) { ?>
            <tr>
                <th scope="row">
                    <?= $no; ?>
                </th>
                <td>
                    <?= $tampil['nama_menu']; ?>
                </td>
                <td>
                    <a href="<?= base_url('assets/upload/kategori/' . $tampil['foto_menu']) ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>Lihat Foto
                    </a>
                </td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#edit<?= $tampil['id_menu'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen"
                            viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                        </svg></button>
                    <a href="<?= base_url('admin/menu/hapus_menu/' . $tampil['foto_menu']) ?>"
                        onclick="return confirm('Anda Yakin menghapus data ini?')">
                        <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg> </button>
                    </a>
                    <div class="modal fade" id="edit<?= $tampil['id_menu'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">menu</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?= base_url('admin/menu/update_menu'); ?>"
                                        enctype="multipart/form-data">
                                        <input type="hidden" value="<?= $tampil['foto_menu']; ?>" name="nama_foto">
                                        <div class="mb-3">
                                            <label class="form-label">Tambah Kategori Menu</label>
                                            <input type="text" class="form-control" name="nama_menu"
                                                value="<?= $tampil['nama_menu'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Foto</label>
                                            <input type="file" class="form-control" name="foto"
                                                accept="image/png, image/gif, image/jpeg">
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
                </td>
            </tr>
            <?php $no++;
        } ?>
    </tbody>
</table>