<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
    style="background-image: url(<?= base_url('assets/publik/'); ?>images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Contact
    </h2>
</section>



<!-- Contact form -->
<section class="section-contact bg1-pattern p-t-90 p-b-113">
    <!-- Map -->
    <div class="container">
        <div class="map bo8 bo-rad-10 of-hidden">
            <div class="mapouter">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=<?= $konfig->alamat; ?>&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://connectionsgame.org/">Connections NYT</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 1200px;
                            height: 400px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 1200px;
                            height: 400px;
                        }

                        .gmap_iframe {
                            width: 1200px !important;
                            height: 400px !important;
                        }
                    </style>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row p-t-135">
                <div class="col-sm-8 col-md-4 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="<?= base_url('assets/publik/'); ?>images/icons/map-icon.png" alt="IMG-ICON">
                        </div>

                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                Location
                            </span>

                            <span class="txt23 size38">
                                <?= $konfig->alamat; ?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-3 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="<?= base_url('assets/publik/'); ?>images/icons/phone-icon.png" alt="IMG-ICON">
                        </div>


                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                Call Us
                            </span>

                            <span class="txt23 size38">
                                <?= $konfig->no_wa; ?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-5 col-lg-4 m-l-r-auto p-t-30">
                    <div class="dis-flex m-l-23">
                        <div class="p-r-40 p-t-6">
                            <img src="<?= base_url('assets/publik/'); ?>images/icons/clock-icon.png" alt="IMG-ICON">
                        </div>


                        <div class="flex-col-l">
                            <span class="txt5 p-b-10">
                                Opening Hours
                            </span>

                            <span class="txt23 size38">
                                <?= $konfig->jam_buka; ?> <br />Every Day
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>