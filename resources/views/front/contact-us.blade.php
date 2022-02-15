@extends('front.layouts.master')

@section('content')
    <!-- Start Contact Info Area -->
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="icofont-email"></i>
                        </div>
                        <h3>Mail Here</h3>
                        <p><a href="#">admin@crake.com</a></p>
                        <p><a href="#">info@crake.com</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="icofont-google-map"></i>
                        </div>
                        <h3>Visit Here</h3>
                        <p>1660 Travis Street Miramar, FL 33025, California</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="icofont-phone"></i>
                        </div>
                        <h3>Call Here</h3>
                        <p><a href="#">+123 456 7890</a></p>
                        <p><a href="#">+241 452 4526</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Map -->
    <div id="map"></div>

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch With Us</h2>
                <div class="bar"></div>
                <p>Anything On your Mind. We’ll Be Glad To Assist You!</p>
            </div>

            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12">
                    <img src="assets/img/marketing.png" alt="image">
                </div>

                <div class="col-lg-6 col-md-12">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection


@section('script')
    <!-- Map API JS FILES -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApghCIIx9MpQhA768sKXxvR_Okg0SF2k4&amp;callback=initMap"></script>
    <!-- Crake JS FILE -->
    <script src="assets/js/crake-map.js"></script>
@endsection
