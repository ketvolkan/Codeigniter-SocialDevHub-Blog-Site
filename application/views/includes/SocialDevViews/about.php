        <!-- About Section-->
        <section class="page-section bg-masthead text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Hakkımızda</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="col-lg-5 mx-auto">
                    <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quas
                        ducimus odio assumenda officiis at totam, fugit architecto similique nostrum atque molestias.
                        Officiis porro, reiciendis quisquam non distinctio optio ipsa.</p>
                </div>

                <div class="pt-5 columns is-desktop">
                    <!-- About Section Content-->
                    <?php
                         $user = new stdClass();                    
                        $user->name = "Volkan Ket";
                        $user->status = "Backend Developer";
                        $user->github = "ketvolkan";
                        $viewData = [
                            "user" =>$user
                        ];
                        $this->load->view("includes/SocialDevViews/about_user",$viewData); ?>
                    <?php
                         $user = new stdClass();                    
                        $user->name = "Baran Özel";
                        $user->status = "Frontend Developer";
                        $user->github = "baranozel";
                        $viewData = [
                            "user" =>$user
                        ];
                        $this->load->view("includes/SocialDevViews/about_user",$viewData); ?><?php
                        $user = new stdClass();                    
                       $user->name = "Can Seven";
                       $user->status = "Backend Developer";
                       $user->github = "hanificanseven";
                       $viewData = [
                           "user" =>$user
                       ];
                       $this->load->view("includes/SocialDevViews/about_user",$viewData); ?>

                </div>
            </div>
        </section>