<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Social Dev Hub</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <link rel="stylesheet" href="<?php echo base_url("assets/adminAssets/") ?>style.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/adminAssets/dist/css/adminlte.min.css") ?>">
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" action="<?php echo base_url("Admin/Login/checkUser") ?>">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="email" required name="email" class="login__input" placeholder="Email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" required name="password" class="login__input" placeholder="Şifre">
                    </div>
                    <button class="button login__submit">
                        <span class="button__text">Giriş Yap</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <?php if ($this->input->get("hata") != null) {
                    if ($this->input->get("hata") == "ok") {
                ?>
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                                <div class="alert alert-danger" role="alert">
                                    <strong>Hata!</strong> Şifre Yada Email Hatalı.
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>


</body>

</html>