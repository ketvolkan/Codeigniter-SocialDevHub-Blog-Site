        <!-- Contact Section-->
        <section class="page-section bg-portfolio" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Bizimle İletişime Geç
                </h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
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
                                <input required="" class="form-control" id="name" type="text"
                                    placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Ad-Soyad</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Ad-Soyad Girin</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input required="" class="form-control" id="email" type="email"
                                    placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email Girin
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Doğru Email girin</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input required="" class="form-control" id="phone" type="tel"
                                    placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Telefon Numarası</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Telefon Numarası Girin
                                </div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" required="" id="message" type="text"
                                    placeholder="Enter your message here..." style="height: 10rem"
                                    data-sb-validations="required"></textarea>
                                <label for="message">Mesajınız</label>

                                <div class="invalid-feedback" data-sb-feedback="message:required">Mesajınızı Girin
                                </div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-on" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Mesajınız Başarıyla Gönderildi!</div>


                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Hata Mesaj Gönderilemedi!</div>
                            </div>

                            <!-- Submit Button-->
                            <button class="btn btn-outline-dark btn-xl" type="submit">Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>