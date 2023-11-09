<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
    style="background-image: url(<?= base_url('assets/publik/') ?>images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Gallery
    </h2>
</section>

<div class="section-gallery p-t-118 p-b-100">
    <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
        <?php foreach ($gallery as $yy) { ?>
            <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom">
                <img src="<?= base_url('assets/upload/gallery/' . $yy['foto']); ?>" alt="IMG-GALLERY">

                <div class="overlay-item-gallery trans-0-4 flex-c-m">
                    <a class="btn-show-gallery flex-c-m fa fa-search"
                        href="<?= base_url('assets/upload/gallery/' . $yy['foto']); ?>" data-lightbox="gallery"></a>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
<div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
    <?= $this->pagination->create_links(); ?>
</div>