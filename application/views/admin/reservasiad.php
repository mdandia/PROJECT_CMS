<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js">
<table id="example" class="table table-hover" style="width:100%">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jam</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Telepon</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($reservasi as $qq) { ?>
            <tr>
                <th scope="row">
                    <?= $no; ?>
                </th>
                <td>
                    <?= $qq['nama']; ?>
                </td>
                <td>
                    <?= $qq['jam']; ?>
                </td>
                <td>
                    <?= $qq['tanggal']; ?>
                </td>
                <td>
                    <?= $qq['no_telp']; ?>
                </td>
                <td>
                    <?= $qq['jumlah_orang']; ?> Orang
                </td>
                <td>
                    <?= $qq['email']; ?>
                </td>
                <td>
                    <a href="<?= base_url('admin/reservasiad/hapus_data/' . $qq['id_reservasi']) ?>"
                        onclick="return confirm('Anda Yakin menghapus data ini?')">
                        <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg> </button>
                    </a>
                </td>
            </tr>
            <?php $no++;
        } ?>
    </tbody>
</table>