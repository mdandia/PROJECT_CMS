<div id='myalert'>
    <?= $this->session->flashdata('alert', true); ?>
</div>
<!-- Button trigger modal -->

<button type="button" class="btn btn-outline-dark m-1" data-bs-toggle="modal" data-bs-target="#produk">
    Tambah Pricelist
</button>

<div class="modal fade" id="produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pricelist</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/pricelist/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3 mt-4">
                        <label class="form-label">Kategori Menu</label>
                        <select name="id_menu" class="form-select">
                            <?php foreach ($menu as $dd) { ?>
                                <option value="<?= $dd['id_menu']; ?>">
                                    <?= $dd['nama_menu']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="mb-3 mt-4">
                        <label class="form-label">Keterangan</label>
                        <textarea class="form-control" rows="10" cols="80" placeholder="" style="height: 150px;"
                            name="keterangan"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">foto</label>
                        <input type="file" class="form-control" name="foto" accept="image/png, image/gif, image/jpeg">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<table class="table table-hover" style="width:100%">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Kategori Menu</th>
            <th scope="col">Harga</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($servis as $qq) { ?>
            <tr>
                <th scope="row">
                    <?= $no; ?>
                </th>
                <td>
                    <?= $qq['judul']; ?>
                </td>
                <td>
                    <?= $qq['keterangan']; ?>
                </td>
                <td>
                    <?= $qq['nama_menu']; ?>
                </td>
                <td>
                    Rp<?= $qq['harga']; ?>
                </td>
                <td>
                    <a href="<?= base_url('assets/upload/pricelist/' . $qq['foto']) ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>Lihat Foto
                    </a>
                </td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $no; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen"
                            viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                        </svg></button>
                    <a href="<?= base_url('admin/pricelist/hapus_konten/' . $qq['foto']) ?>"
                        onclick="return confirm('Anda Yakin menghapus data ini?')">
                        <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg> </button>
                    </a>
                    <div class="modal fade" id="edit<?= $no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        <?= $qq['judul']; ?>
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('admin/pricelist/update_list') ?>" method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" value="<?= $qq['foto']; ?>" name="nama_foto">
                                        <div class="mb-3 mt-4">
                                            <label class="form-label">Kategori Menu</label>
                                            <select name="id_menu" class="form-select">
                                                <?php foreach ($menu as $tt) { ?>
                                                    <option <?php if ($tt['id_menu'] == $qq['id_menu']) {
                                                        echo "selected";
                                                    } ?> value="<?= $tt['id_menu']; ?>"><?= $tt['nama_menu']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" class="form-control" name="judul"
                                                value=" <?= $qq['judul']; ?>">
                                        </div>
                                        <div class="mb-3 mt-4">
                                            <label class="form-label">Keterangan</label>
                                            <textarea class="form-control" placeholder="" style="height: 150px;"
                                                name="keterangan"> <?= $qq['keterangan']; ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga</label>
                                            <input type="text" class="form-control" name="harga"   value=" <?= $qq['harga']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">foto</label>
                                            <input type="file" class="form-control" name="foto"
                                                accept="image/png, image/gif, image/jpeg">
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
                    </div>
                </td>
            </tr>
            <?php $no++;
        } ?>
    </tbody>
</table>