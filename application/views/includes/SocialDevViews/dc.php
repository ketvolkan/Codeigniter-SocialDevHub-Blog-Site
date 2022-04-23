        <!-- Masthead-->
        <header class="masthead2 bg-portfolio text-white text-center" id="discord">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead2-avatar mb-5" src="assets/img/dclogo.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead2-heading text-uppercase mb-0 text-secondary"><?php echo $setting->discord_title; ?></h1>

                <!-- Icon Divider-->
                <div class="divider-custom">

                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="col-lg-5 mx-auto">
                    <p class="lead text-center text-secondary"><?php echo $setting->discord_description; ?></p>
                </div>
                <!-- Masthead Subheading-->
                <a href="<?php echo $setting->discord_url; ?>" target="blank" class="link mt-2">
                    <span class="mask">
                        <div class="link-container">
                            <span class="link-title1 title">KATILMAK İÇİN TIKLA!</span>
                            <span class="link-title2 title">KATILMAK İÇİN TIKLA!</span>
                        </div>
                    </span>
                </a>

            </div>
        </header>