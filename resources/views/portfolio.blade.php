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
             <!-- Header Section -->
                <section class="page-section bg-dark-1 bg-dark-alpha-80 light-content parallax-5" style="background-image: url(images/full-width-images/section-bg-2.jpg)" id="home">
                    <div class="container position-relative pt-30 pt-sm-50">
                            
                        <!-- Section Content -->
                        <div class="text-center">
                            <div class="row">
                                
                                <!-- Page Title -->
                                <div class="col-md-8 offset-md-2">
                                        
                                    <h1 class="hs-title-1 mb-20">
                                        <span class="wow charsAnimIn" data-splitting="chars">Portfolio</span>
                                    </h1>
                                    
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                                            <p class="section-descr mb-0 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                                Where every detail counts, our work stands out.
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

                <section class="page-section " id="portfolio">
                    <div class="full-wrapper position-relative">
             
                        <div class="works-filter text-center mb-60 mb-sm-40 z-index-1">
                            
                            <a href="#Design" class="filter active" role="button" aria-pressed="true" data-filter=".Design">Design</a>
                            <a href="#Interior" class="filter" role="button" aria-pressed="false" data-filter=".Interior">Interior</a>
                            <a href="#Development" class="filter" role="button" aria-pressed="false" data-filter=".Development">Development</a>
                        </div>                                

                        <ul class="works-grid work-grid-3 work-grid-gut clearfix hide-titles" id="work-grid">

                            <li class="work-item mix Development">
                                <a href="images/project/full-project-1.jpg" class="work-lightbox-link mfp-image">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="images/project/coming soon.jpg" alt="Work Image" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                   
                                </a>
                            </li>
                            <li class="work-item mix Interior">
                                <a href="#" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="images/project/coming soon.jpg" alt="Work Image" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    
                                </a>
                            </li>
                           <li class="work-item mix Design">
                                <a href="#" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="images/project/coming soon.jpg" alt="Work Image" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    
                                </a>
                            </li>
                            <li class="work-item mix Development">
                                <a href="images/project/full-project-1.jpg" class="work-lightbox-link mfp-image">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="images/project/coming soon.jpg" alt="Work Image" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    
                                </a>
                            </li>
                            <li class="work-item mix Interior">
                                <a href="#" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="images/project/coming soon.jpg" alt="Work Image" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                </a>
                            </li>
                           <li class="work-item mix Design">
                                <a href="#" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="images/project/coming soon.jpg" alt="Work Image" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    
                                </a>
                            </li>
                        </ul>
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
