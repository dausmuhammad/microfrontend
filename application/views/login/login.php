<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mandiri Utama Finance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/muf.png" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() ?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() ?>assets/login/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/login/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-color : #204a7e;">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <div class="login100">
                    <span class="login100-form-title p-b-49">
                        <img src="<?php echo base_url() ?>assets/dist/img/logo.png" style="width: 40%" alt="">
                    </span>

                    <div class="wrap-input100  m-b-23">
                        <span class="label-input100">NIK</span>
                        <input class="input100" type="text" name="nik" id="inp-nik" placeholder="NIK">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 ">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" id="inp-password" placeholder="PASSWORD">
                        
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <br>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" id="btn-login">
                                Login
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
    <script>
        var app = {
            base_url: "<?php echo base_url() ;?>"
        }
        console.log(app);
    </script>
    <script src="<?php echo base_url() ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/login/vendor/animsition/js/animsition.min.js"></script>
    <script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/login/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/login/vendor/countdowntime/countdowntime.js"></script>
    <script src="<?php echo base_url() ?>assets/login/js/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/login.js"></script>

</body>

</html>