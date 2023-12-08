<!-- Slide1 -->
<section class="section-slide">

    <div class="wrap-slick1">
        <div class="slick1">
            <?php $no = 1;
            foreach ($caraousel as $cara) { ?>
                <div class="item-slick1 item<?php if ($no == 1) {
                    echo 'active';
                } ?>-slick1"
                    style="background-image: url(<?= base_url('assets/upload/carousel/' . $cara['foto']); ?>)">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                            Welcome to
                        </span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            <?= $konfig->judul_website; ?>
                        </h2>
                    </div>
                </div>
                <?php $no++;
            } ?>
        </div>

        <div class="wrap-slick1-dots"></div>
    </div>

</section>

<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-120 p-b-105">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-welcome t-center">
                    <span class="tit2 t-center">
                        Classic Restaurant
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-5">
                        Welcome
                    </h3>

                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        <?= mb_substr($konfig->profil_website, 0, 183, 'UTF-8'); ?>
                    </p>

                    <a href="<?= base_url('about/') ?>" class="txt4">
                        Cek Selengkapnya
                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="<?= base_url('assets/upload/konfig/' . $konfig->foto); ?>" alt="IMG-OUR">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Intro -->
<section class="section-intro">
    <div class="header-intro parallax100 t-center p-t-135 p-b-158"
        style="background-image: url(<?= base_url('assets/publik/') ?>images/bg-intro-01.jpg);">
        <span class="tit2 p-l-15 p-r-15">
            Discover
        </span>

        <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
            <?= $konfig->judul_website; ?>
        </h3>
    </div>

    <div class="content-intro bg-white p-t-77 p-b-133">
        <div class="container">
            <div class="row">
                <?php foreach ($konten as $konten) { ?>
                    <div class="col-md-4 p-t-30">
                        <!-- Block1 -->

                        <div class="blo1">
                            <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                                <a href="#"><img src="<?= base_url('assets/upload/konten/' . $konten['foto']) ?>"
                                        width="564" height="284" alt="IMG-INTRO"></a>
                                <div class="time-blog">
                                    <?= $konten['tanggal']; ?>
                                </div>
                            </div>

                            <div class="wrap-text-blo1 p-t-35">
                                <a href="#">
                                    <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        <?= $konten['judul']; ?>
                                    </h4>
                                </a>

                                <p class="m-b-20">
                                    <?= mb_substr($konten['keterangan'], 0, 83, 'UTF-8'); ?>
                                </p>

                                <a href="<?= base_url('blog/artikel/' . $konten['slug']) ?>" class="txt4">
                                    Learn More
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!-- Our menu -->
<section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
    <div class="container">
        <div class="title-section-ourmenu t-center m-b-22">
            <span class="tit2 t-center">
                Discover
            </span>

            <h3 class="tit5 t-center m-t-2">
                Our Menu
            </h3>
        </div>

        <div class="row">
            <?php foreach ($kategmen as $men) { ?>
                <div class="col-md-4">
                    <div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
                        <img src="<?= base_url('assets/upload/kategori/' . $men['foto_menu']) ?>" alt="IMG-MENU">

                        <a href="<?= base_url('menu/') ?>" class="btn2 flex-c-m txt5 ab-c-m size4">
                            <?= $men['nama_menu']; ?>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
</section>
<!-- Booking -->
<section class="section-booking bg1-pattern p-t-100 p-b-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-b-30">
                <div class="t-center">
                    <span class="tit2 t-center">
                        Reservation
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-2">
                        Book table
                    </h3>
                </div>

                <form class="wrap-form-booking" action="<?= base_url('reservasi/simpan') ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Date -->
                            <span class="txt9">
                                Date
                            </span>

                            <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="tanggal">
                                <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
                            </div>

                            <!-- Time -->
                            <span class="txt9">
                                Time
                            </span>

                            <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <!-- Select2 -->
                                <select class="selection-1" name="jam">
                                    <option value="9:00">9:00</option>
                                    <option value="9:30">9:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:30">15:30</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:30">17:30</option>
                                    <option value="18:00">18:00</option>
                                </select>
                            </div>

                            <!-- People -->
                            <span class="txt9">
                                People
                            </span>

                            <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <!-- Select2 -->
                                <select class="selection-1" name="jumlah_orang">
                                    <option value="1">1 person</option>
                                    <option value="2">2 people</option>
                                    <option value="3">3 people</option>
                                    <option value="4">4 people</option>
                                    <option value="5">5 people</option>
                                    <option value="6">6 people</option>
                                    <option value="7">7 people</option>
                                    <option value="8">8 people</option>
                                    <option value="9">9 people</option>
                                    <option value="10">10 people</option>
                                    <option value="11">11 people</option>
                                    <option value="12">12 people</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Name -->
                            <span class="txt9">
                                Name
                            </span>

                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nama"
                                    placeholder="Name">
                            </div>

                            <!-- Phone -->
                            <span class="txt9">
                                Phone
                            </span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="no_telp"
                                    placeholder="Phone">
                            </div>

                            <!-- Email -->
                            <span class="txt9">
                                Email
                            </span>

                            <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="email" name="email"
                                    placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="wrap-btn-booking flex-c-m m-t-6">
                        <!-- Button3 -->
                        <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                            Book Table
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 p-b-30 p-t-18">
                <div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="<?= base_url('assets/publik/') ?>images/booking-01.jpg" alt="IMG-OUR">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video -->
<section class="section-video parallax100"
    style="background-image: url(<?= base_url('assets/publik/') ?>images/bgjawa.jpg);">
    <div class="content-video t-center p-t-225 p-b-250">
        <span class="tit2 p-l-15 p-r-15">
            Discover
        </span>

        <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
            Our Video
        </h3>

        <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal"
            data-target="#modal-video-01">
            <div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
                <i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>