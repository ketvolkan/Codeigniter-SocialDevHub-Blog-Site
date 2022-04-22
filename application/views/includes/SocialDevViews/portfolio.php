        <!-- Portfolio Section-->
        <section class="page-section portfolio bg-portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Post</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <?php
                    $counter = 0;
                    $imgUrl = "";
                    foreach ($posts as $post) {
                        if ($counter % 6 == 0) {
                            $imgUrl = "assets/img/portfolio/cabin.png";
                        } else if ($counter % 5 == 0) {
                            $imgUrl = "assets/img/portfolio/cake.png";
                        } else if ($counter % 4 == 0) {
                            $imgUrl = "assets/img/portfolio/circus.png";
                        } else if ($counter % 3 == 0) {
                            $imgUrl = "assets/img/portfolio/safe.png";
                        } else if ($counter % 2 == 0) {
                            $imgUrl = "assets/img/portfolio/submarine.png";
                        } else {
                            $imgUrl = "assets/img/portfolio/game.png";
                        }
                        $counter++;
                        $viewData = [
                            "post" => $post, "imgUrl" => $imgUrl,
                        ];
                        $this->load->view("includes/SocialDevViews/portfolio_item", $viewData);
                    }
                    ?>

                </div>
            </div>
        </section>