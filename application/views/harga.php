
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(<?= base_url('assets/publik/') ?>images/bg-title-page-02.jpg);">
        <h2 class="tit6 t-center">
            Menu
        </h2>
    </section>



    <div class="section-gallery p-t-118 p-b-100">
        <div
            class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
            <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
                All Menu
            </button>
            <?php foreach ($kategmen as $qq) { ?>
                <button class="label-gallery txt25 trans-0-4" data-filter=".<?= $qq['id_menu'] ?>">
                    <?= $qq['nama_menu'] ?>
                </button>
            <?php } ?>
        </div>
        <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
            <?php foreach ($menu as $rr) { ?>
                <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom <?= $rr['id_menu']; ?>">
                    <img src="<?= base_url('assets/upload/pricelist/' . $rr['foto']); ?>" alt="IMG-GALLERY">

                    <div class="overlay-item-menu trans-0-4 flex-c-m">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body" style="background-color: ;">
                                <h5 class="card-title">
                                    <?= $rr['judul']; ?>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">Rp
                                    <?= $rr['harga']; ?>
                                </h6>
                                <p class="card-text">
                                    <?= $rr['keterangan']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


   