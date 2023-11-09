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
<h1 class="animated-text">BUDENG TRI KABUL ANTOK GUN
    <?= $this->session->userdata['nama']; ?>
</h1>