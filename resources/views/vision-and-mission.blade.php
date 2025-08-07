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
         <section class="page-section bg-dark-1 bg-dark-alpha-80 light-content parallax-5" style="background-image: url(images/banners/aboutb.jpg)">
                    <div class="container position-relative pt-50">
                            
                        <!-- Section Content -->
                        <div class="text-center">
                            <div class="row">
                                
                                <!-- Page Title -->
                                <div class="col-md-8 offset-md-2">
                                    
                                    <h1 class="hs-title-1 mb-30">
                                        <span class="wow charsAnimIn" data-splitting="chars">Inspiring Purpose<br>Driving Progress</span>
                                    </h1>
                                    
                                    <div class="row wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.2s">
                                        <div class="col-lg-10 offset-lg-1">
                                            <p class="section-descr mb-0">
                                                At the heart of everything we do is a deep commitment to inspiring purpose in people, teams, and communities. We believe that meaningful progress begins with a clear sense of direction and a passion to make a difference
                                            </p>
                                        </div>
                                    </div>
                               
                               </div>
                               <!-- End Page Title -->
                                
                            </div>                            
                        </div>
                        <!-- End Section Content -->
                        
                    </div>
                </section>
               
                <section class="page-section t" id="about">                    
                    <div class="container">
                        <div class="row">
                             <div class="col-lg-6 offset-xl-1 d-none d-lg-block">
                                <div class="overflow-hidden">
                                    <img src="images/full-width-images/3085.jpg" alt="Image description" class="wow scaleOutIn" data-wow-duration="1.2s" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-4 offset-xl-1 mt-n10">
                                <div class="wow linesAnimIn" data-splitting="lines">
                                    <h3 class="h5">Our Mission</h3>
                                    <p class="text-gray">
                                        To create harmonious spaces to touch 1 lakh customers’ lives and infuse a sense of fulfillment in their hearts and minds by the end of 2025.
                                    </p>
                                    <h3 class="h5">Our Vision</h3>
                                    <p class="text-gray mb-0">
                                       To be an enabler of growth for all our stakeholders and be acknowledged as a stellar icon of trust and excellence.
                                    </p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </section>

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
