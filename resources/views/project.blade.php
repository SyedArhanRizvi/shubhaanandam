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

        <div class="bts-popup" role="alert">
            <div class="bts-popup-container">
                <span class="bts-popup-close" aria-label="Close"></span>
                <img src="https://www.trend-transformations.com/wp-content/themes/trend-transformations/library/images/trend-logo-white.svg"
                    alt="" width="50%" />
                <h2 class="form-title">Contact Us</h2>
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
    <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
    <button type="submit">Book a Site Visit Now</button>
</form>
            </div>
        </div>

        <section class="page-section bg-dark-1 dark bg-dark-alpha-80 light-content parallax-5"
            style="background-image: url(images/banners/projectbg.jpg)">
            <div class="container position-relative pt-50">
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">

                            <h2 class="section-caption-border mb-30 mb-xs-20 wow fadeInUp" data-wow-duration="1.2s">
                                About Projects
                            </h2>

                            <h1 class="hs-title-1 mb-40">
                                <span class="wow charsAnimIn" data-splitting="chars">Shubhanandam Group</span>
                            </h1>
                            <div class="mt-n10 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.2s">
                                <div class="d-inline-flex mt-10 mx-3">
                                    <div class="features-list-icon">
                                        <img src="images/icons/check.png" width="20px" />
                                    </div>
                                    <div class="features-list-text">
                                        Based in Noida
                                    </div>
                                </div>
                                <div class="d-inline-flex mt-10 mx-3">
                                    <div class="features-list-icon">
                                        <img src="images/icons/check.png" width="20px" />
                                    </div>
                                    <div class="features-list-text">
                                        Established in 2022
                                    </div>
                                </div>
                                <div class="d-inline-flex mt-10 mx-3">
                                    <div class="features-list-icon">
                                        <img src="images/icons/check.png" width="20px" />
                                    </div>
                                    <div class="features-list-text">
                                        10+ Projects Done
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section  pt-100 pb-100">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
                        <h3 class="section-title mb-sm-50"><span class="wow charsAnimIn" data-splitting="chars">Urban &
                                High-Rise Projects</span></h3>
                        <h2 class="section-caption mb-70 mb-xs-10 wow fadeInUp">Completed | Ongoing | Hospitality.</h2>
                    </div>
                </div>
                <!-- Logo Grid -->
                <div class="row alt-features-grid mt-n50">

                    <!-- Logo Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="alt-features-item mt-50 wow fadeIn" data-wow-delay="0" data-wow-duration="1.5s">
                            <div class="mb-20">
                                <img src="images/project/anandam_floor/A67A3962.JPG"
                                    alt="Add Image Description" />
                            </div>

                            <div class="work-intro text-start">
                                <h3 class="work-title">Anandam Floor I</h3>
                                <div class="work-descr">
                                    <p>Meerut</p>
                                    <p>Residential</p>
                                </div>
                                <div class="alt-features-descr align-left">
                                    Experience modern living at Anandam Floors, a premium residential enclave nestled in
                                    the serene locale of Modipuram, Meerut.
                                </div>
                                <div class="local-scroll wow fadeInUp pt-40" data-wow-delay="0.12s">
                                    <a href="anandam-floor-phase-I" class="link-hover-anim"
                                        data-link-animate="y">View Details <img src="images/icons/right-arrow-black.png"
                                            width="20px" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item mt-50 wow fadeIn" data-wow-delay="0" data-wow-duration="1.5s">
                                <div class="mb-20">
                                    <img src="images/uytre.jpeg"
                                        alt="Add Image Description" />
                                </div>

                                <div class="work-intro text-start">
                                    <h3 class="work-title">Anandam Floor II</h3>
                                    <div class="work-descr">
                                        <p>Meerut</p>
                                        <p>Residential</p>
                                    </div>
                                    <div class="alt-features-descr align-left">
                                        Discoveranandam Floor II, a serene residential offering in the heart of
                                        Modipuram, Meerut. Crafted as a natural extension
                                    </div>
                                    <div class="local-scroll wow fadeInUp pt-40" data-wow-delay="0.12s">
                                        <a href="anandam-floor-phase-II" class="link-hover-anim"
                                            data-link-animate="y">View Details <img
                                                src="images/icons/right-arrow-black.png" width="20px" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item mt-50 wow fadeIn" data-wow-delay="0" data-wow-duration="1.5s">
                                <div class="mb-20">
                                    <img src="images/mnbvcx.jpeg" alt="Add Image Description" />
                                </div>

                                <div class="work-intro text-start">
                                    <h3 class="work-title">Coming Soon</h3>
                                    <div class="work-descr">
                                        <p>Greater Noida</p>
                                        <p>Residential</p>
                                    </div>
                                    <div class="alt-features-descr align-left">
                                        At Shubhanandam, we believe that homes should do more than just house lives,
                                        they should nurture legacies,
                                    </div>
                                    <div class="local-scroll wow fadeInUp pt-40" data-wow-delay="0.12s">
                                        <a href="#" class="link-hover-anim bts-popup-trigger" data-link-animate="y">Get
                                            Enquiry
                                            <img src="images/icons/right-arrow-black.png" width="20px" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="alt-features-item mt-50 wow fadeIn" data-wow-delay="0" data-wow-duration="1.5s">
                            <div class="mb-20">
                                <img src="images/full-width-images/bahagalpur.png" alt="Add Image Description" />
                            </div>

                            <div class="work-intro text-start">
                                <h3 class="work-title">Maihar Plaza Mall</h3>
                                <div class="work-descr">
                                    <p>Bhagalpur, Bihar</p>
                                    <p>Commercial</p>
                                </div>
                                <div class="alt-features-descr align-left">
                                    Shubhanandam proudly presents Maihar Plaza Mall – a state-of-the-art commercial
                                    development coming up in the heart of Bhagalpur, Bihar.
                                </div>
                                <div class="local-scroll wow fadeInUp pt-40" data-wow-delay="0.12s">
                                    <a href="maihar-plaza-mall" class="link-hover-anim" data-link-animate="y">View
                                        Details <img src="images/icons/right-arrow-black.png" width="20px" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="alt-features-item mt-50 wow fadeIn" data-wow-delay="0" data-wow-duration="1.5s">
                            <div class="mb-20">
                                <img src="images/8394.jpg"
                                    alt="Add Image Description" />
                            </div>

                            <div class="work-intro text-start">
                                <h3 class="work-title">Bottling Plant</h3>
                                <div class="work-descr">
                                    <p>Jharkhand</p>
                                    <p>Commercial</p>
                                </div>
                                <div class="alt-features-descr align-left">
                                    As part of its diversified real estate ventures, Shubhanandam has successfully
                                    developed a state-of-the-art Bottling Plant
                                </div>
                                <div class="local-scroll wow fadeInUp pt-40" data-wow-delay="0.12s">
                                    <a href="bottling-plant" class="link-hover-anim" data-link-animate="y">View
                                        Details <img src="images/icons/right-arrow-black.png" width="20px" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="alt-features-item mt-50 wow fadeIn" data-wow-delay="0" data-wow-duration="1.5s">
                            <div class="mb-20">
                                <img src="images/project/garden1.jpg"
                                    alt="Add Image Description" />
                            </div>
                            <div class="work-intro text-start">
                                <h3 class="work-title">Resort - Maihar Deoghar Garden</h3>
                                <div class="work-descr">
                                    <p>Deoghar, Jharkhand</p>
                                    <p>Hospitality</p>
                                </div>
                                <div class="alt-features-descr align-left">
                                   Maihar Garden Resort, a luxurious retreat nestled in
                                    the serene landscapes of Deoghar, Jharkhand.
                                </div>
                                <div class="local-scroll wow fadeInUp pt-40" data-wow-delay="0.12s">
                                    <a href="resort-maihar-garden-deoghar-jharkhand" class="link-hover-anim"
                                        data-link-animate="y">View Details <img src="images/icons/right-arrow-black.png"
                                            width="20px" /></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- End Logo Grid -->

            </div>
        </section>
        <!-- End Header Section -->
        <!-- Footer -->
        @include('includes.footer')
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/all.js"></script>

    <script>
        jQuery(document).ready(function ($) {
            // Show after 1s delay (optional)
            // $(".bts-popup").delay(1000).addClass('is-visible');

            // Open on trigger
            $('.bts-popup-trigger').on('click', function (event) {
                event.preventDefault();
                $('.bts-popup').addClass('is-visible');
            });

            // Close popup
            $('.bts-popup').on('click', function (event) {
                if ($(event.target).is('.bts-popup-close') || $(event.target).is('.bts-popup')) {
                    event.preventDefault();
                    $(this).removeClass('is-visible');
                }
            });

            // ESC key to close
            $(document).keyup(function (event) {
                if (event.which == '27') {
                    $('.bts-popup').removeClass('is-visible');
                }
            });
        });
    </script>

</body>

</html>