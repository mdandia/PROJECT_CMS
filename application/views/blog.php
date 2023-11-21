<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
    style="background-image: url(<?= base_url('assets/publik/') ?>images/bg-title-page-03.jpg);">
    <h2 class="tit6 t-center">
        Blog
    </h2>
</section>


<!-- Content page -->
<section>
    <div class="bread-crumb bo5-b p-t-17 p-b-17">
        <div class="container">
            <a href="index.html" class="txt27">
                Home
            </a>

            <span class="txt29 m-l-10 m-r-10">/</span>

            <span class="txt29">
                Blog
            </span>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">

                    <?php foreach ($konten as $konten) { ?>
                        <!-- Block4 -->
                        <div class="blo4 p-b-63">
                            <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                <a href="<?= base_url('blog/artikel/' . $konten['slug']) ?>">
                                    <img src="<?= base_url('assets/upload/konten/' . $konten['foto']) ?>" alt="IMG-BLOG">
                                </a>
                            </div>

                            <div class="text-blo4 p-t-33">
                                <h4 class="p-b-16">
                                    <a href="<?= base_url('blog/artikel/' . $konten['slug']) ?>" class="tit9">
                                        <?= $konten['judul']; ?>
                                    </a>
                                </h4>

                                <div class="txt32 flex-w p-b-24">
                                    <span>
                                        by
                                        <?= $konten['nama']; ?>
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        <?= $konten['tanggal']; ?>
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>

                                    <span>
                                        <?= $konten['nama_kategori']; ?>
                                        <span class="m-r-6 m-l-4">|</span>
                                    </span>
                                </div>

                                <p>
                                    <?= mb_substr($konten['keterangan'], 0, 200, 'UTF-8') ?>)
                                </p>

                                <a href="<?= base_url('blog/artikel/' . $konten['slug']) ?>" class="dis-block txt4 m-t-30">
                                    Continue Reading
                                    <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Pagination -->
                    <div class="pagination flex-l-m flex-w m-l--6 p-t-25">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
                    <!-- Search -->
                    <form action="<?= base_url('blog/search/') ?>" method="post">
                        <div class="search-sidebar2 size12 bo2 pos-relative">
                            <input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="keyword"
                                placeholder="Search" autocomplete="off">
                            <button type="submit" class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
                        </div>
                    </form>
                    <?php if (!empty($konten)) { ?>
                        <p style="color:orange"><b>Tidak ada data dengan kata kunci : 
                            </b></p>
                    <?php } ?>
                    <!-- Categories -->
                    <div class="categories">
                        <h4 class="txt33 bo5-b p-b-35 p-t-58">
                            Categories
                        </h4>
                        <?php foreach ($kategori as $kate) { ?>
                            <ul>
                                <li class="bo5-b p-t-8 p-b-8">
                                    <a href="<?= base_url('blog/kategori/' . $kate['id_kategori']) ?>" class="txt27">
                                        <?= $kate['nama_kategori']; ?>
                                    </a>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>

                    <!-- Most Popular -->
                    <div class="popular">
                        <h4 class="txt33 p-b-35 p-t-58">
                            Most Rencent
                        </h4>

                        <ul>
                            <?php foreach ($rencent as $baru) { ?>
                                <li class="flex-w m-b-25">
                                    <div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
                                        <a href="<?= base_url('blog/artikel/' . $baru['slug']) ?>">
                                            <img src="<?= base_url('assets/upload/konten/' . $baru['foto']) ?>"
                                                alt="IMG-BLOG">
                                        </a>
                                    </div>

                                    <div class="size28">
                                        <a href="#" class="dis-block txt28 m-b-8">
                                            <?= $baru['judul']; ?>
                                        </a>

                                        <span class="txt14">
                                            <?= $baru['tanggal']; ?>
                                        </span>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>