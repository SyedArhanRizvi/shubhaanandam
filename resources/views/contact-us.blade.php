<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
    <body class="appear-animate dark-mode">
        <div class="page-loader dark">
            <div class="loader">Loading...</div>
        </div>
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <div class="page bg-dark-1" id="top">
            @include('includes.header')
            <section class="page-section pb-100 pb-sm-0 pt-100 bg-dark-1 bg-dark-alpha-80 light-content parallax-5" style="background-image: url(images/inner_banner/inner1.jpg)">
                    <div class="position-absolute top-0 bottom-0 start-0 end-0 bg-gradient-dark"></div>
                    <div class="container position-relative pt-50">
                            
                        <!-- Section Content -->
                        <div class="text-center">
                            <div class="row">
                                
                                <!-- Page Title -->
                                <div class="col-md-8 offset-md-2">
                                     <h1 class="hs-title-1 mb-0">
                                        <span class="wow charsAnimIn" data-splitting="chars">  Contact Us</span>
                                    </h1>
                               
                               </div>
                               <!-- End Page Title -->
                                
                            </div>                            
                        </div>
                        <!-- End Section Content -->
                        
                    </div>
                </section>
                <!-- End Header Section -->
                
                
                <!-- Contact Section -->
                <section class="page-section  pt-100" id="contact">
                    <div class="container">
                        
                        <div class="row mt-n10 mb-60 mb-sm-40">
                            
                            <div class="col-md-10 offset-md-1">
                                <div class="row mb-n30">
                                    
                                    <!-- Phone -->
                                    <div class="col-md-6 col-lg-4 mb-30">
                                        <div class="contact-item wow fadeScaleIn" data-wow-delay="0" data-wow-duration="1s">
                                            <div class="ci-icon">
                                                <img src="images/icons/phone-receiver-silhouette.png" alt="call" width="20px" />
                                            </div>
                                            <h4 class="ci-title">
                                                Call Us
                                            </h4>
                                            <div class="ci-text">
                                                +91 9873401010
                                            </div>
                                            <div class="ci-link">
                                                <a href="tel:+91 9873401010">Call now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Phone -->
                                    
                                    <!-- Address -->
                                    <div class="col-md-6 col-lg-4 mb-30">
                                        <div class="contact-item wow fadeScaleIn" data-wow-delay=".1s" data-wow-duration="1s">
                                            <div class="ci-icon">
                                                <img src="images/icons/pin.png" alt="call" width="20px" />
                                            </div>
                                            <h4 class="ci-title">
                                                Address
                                            </h4>
                                            <div class="ci-text">
                                                Ansal Town, Anandam Floors, Ansal Town, NH 58 Meerut, U.P -250110
                                            </div>
                                            <div class="ci-link">
                                                <a href="https://maps.app.goo.gl/nCBYB6ZhqVoTeQ3R6" rel="nofollow noopener" target="_blank">See Map</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Address -->
                                    
                                    <!-- Email -->
                                    <div class="col-md-6 col-lg-4 mb-30">
                                        <div class="contact-item wow fadeScaleIn" data-wow-delay=".2s" data-wow-duration="1s">
                                            <div class="ci-icon">
                                                <img src="images/icons/envelope.png" alt="call" width="20px" />
                                            </div>
                                            <h4 class="ci-title">
                                                Email
                                            </h4>
                                            <div class="ci-text">
                                                support@shubhanandam.com
                                            </div>
                                            <div class="ci-link">
                                                <a href="mailto:support@shubhanandam.com">Say Hello</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Email -->
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- Contact Form -->                            
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                
                                <form class="form-grid" action="{{ route('send.mail') }}" method="POST">
    @csrf
    <div class="row">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="email" name="email" placeholder="Your Email" required />
    </div>
    <div class="row">
        <input type="tel" name="phone" placeholder="Your Phone" required />
        <input type="text" name="time" placeholder="Preferred Time" required />
    </div>
    <div class="row"><textarea name="message" placeholder="Your Message" rows="4" required></textarea></div>
    <button type="submit">Book a Site Visit Now</button>
</form>
                                
                            </div>
                        </div>
                        <!-- End Contact Form -->
                        
                    </div>
                </section>
                <!-- End Contact Section -->
                
                
                <!-- Google Map -->
                <div class="google-map light-content">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.4882930804915!2d77.36370317409352!3d28.615124084873568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa294357a13b42933%3A0xe56cde5aeabd42c3!2sShubhanandam%20Group!5e0!3m2!1sen!2sin!4v1747386112643!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                </div>
                <!-- End Google Map -->
                
                
                
            @include('includes.footer')
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/contact-form.js"></script>
        <script src="js/all.js"></script>
    </body>
</html>
