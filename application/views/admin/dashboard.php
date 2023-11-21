<style>
    @keyframes textAnimation {
        0% {
            transform: translateY(0);
            opacity: 0;
        }

        100% {
            transform: translateY(-20px);
            opacity: 1;
        }
    }

    .animated-text {
        font-size: 24px;
        animation: textAnimation 1s ease-in-out infinite alternate;
        align-items: center;
    }
</style>
<h1 style="margin-top: 80px;font-family: monospace;font-size: 30px;">Selamat Datang di Admin Gun Restaurant
</h1>
<h1 style="font-family: monospace;font-size: 30px;">
    <?= $this->session->userdata['nama']; ?>
</h1>
<img src="<?= base_url('assets/admin/') ?>src/assets/images/logos/ppp.jpg" alt=""
    style="margin-left: 740px;height: 250px;" />