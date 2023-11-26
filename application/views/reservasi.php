<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
    style="background-image: url(<?= base_url('assets/publik/') ?>images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Reservation
    </h2>
</section>


<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-b-30">
                <div class="t-center">
                    <span class="tit2 t-center">
                        Reservation
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-2">
                        Book table
                    </h3>
                </div>
                <form class="wrap-form-reservation size22 m-l-r-auto" action="<?= base_url('reservasi/simpan') ?>"
                    method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Date -->
                            <span class="txt9">
                                Date
                            </span>

                            <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="tanggal">
                                <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-md-4">
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
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
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
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Name -->
                            <span class="txt9">
                                Name
                            </span>

                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nama"
                                    placeholder="Name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Phone -->
                            <span class="txt9">
                                Phone
                            </span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="no_telp"
                                    placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-md-4">
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
        </div>
    </div>
</section>