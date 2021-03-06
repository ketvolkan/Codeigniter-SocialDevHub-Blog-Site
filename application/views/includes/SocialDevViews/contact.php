        <!-- Contact Section-->
        <section class="page-section bg-masthead" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-white mb-0"><?php echo $setting->contact_title; ?>
                </h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center" id="#form">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="#contact" method="post">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input required="" class="form-control box-shadow" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">*Ad-Soyad</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Ad-Soyad Girin</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input required="" class="form-control box-shadow" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">*Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email Girin
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Do??ru Email girin</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control box-shadow" id="dc" type="tel" placeholder="(123) 456-7890" data-sb-validations="" />
                                <label for="dc">Discord ID</label>
                                <div class="invalid-feedback" data-sb-feedback="">Discord ID
                                </div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control box-shadow" required="" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">*Mesaj??n??z</label>

                                <div class="invalid-feedback" data-sb-feedback="message:required">Mesaj??n??z?? Girin
                                </div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Mesaj??n??z Ba??ar??yla G??nderildi!</div>


                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Hata Mesaj G??nderilemedi!</div>
                            </div>

                            <!-- Submit Button-->
                            <button class="btn btn-outline-dark btn-xl" type="submit">G??nder</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>