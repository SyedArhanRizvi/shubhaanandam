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
        <section class="page-section bg-dark-1 bg-dark-alpha-80 light-content parallax-5" style="background-image: url(images/banners/subbanner.jpg);">
            <div class="container position-relative pt-50">
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h2 class="section-caption-border mb-30 mb-xs-20 wow fadeInUp" data-wow-duration="1.2s">
                                Our Project
                            </h2>

                            <h1 class="hs-title-1 mb-40">
                                <span class="wow charsAnimIn" data-splitting="chars">
                                    Anandam Floor<br />
                                    Phase-II
                                </span>
                            </h1>
                            <!-- <h3 class="">
                                   Comming Soon
                                </h3> -->
                            <div class="mt-n10 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.2s">
                                <div class="d-inline-flex mt-10 mx-3">
                                    <div class="features-list-icon">
                                        <img src="images/icons/check.png" width="20px" />
                                    </div>
                                    <div class="features-list-text">
                                        2 BHK Unit Super Area 1150 sqft.
                                    </div>
                                </div>
                                <!-- <div class="d-inline-flex mt-10 mx-3">
                                    <div class="features-list-icon">
                                        <img src="images/icons/check.png" width="20px" />
                                    </div>
                                    <div class="features-list-text">
                                        Ground Floor Area 386 sq. yard
                                    </div>
                                </div> -->
                                <div class="d-inline-flex mt-10 mx-3">
                                    <div class="features-list-icon">
                                        <img src="images/icons/check.png" width="20px" />
                                    </div>
                                    <div class="features-list-text">
                                        First & Second Floor Plan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section pt-100 pb-100">
            <div class="container"></div>
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="split-column-right rounded-0  position-relative d-flex align-items-center">
                        <!-- Decorative Dots -->
                        <div class="position-absolute top-0 start-0 pt-2 ps-2 opacity-02">
                            <img src="images/demo-strong/decoration.svg" alt="" />
                        </div>
                        <!-- End Decorative Dots -->

                        <div class="wow fadeInUp">
                            <h2 class="section-title mb-30">
                                Premium 2BHK Independent Floors
                            </h2>

                            <p class="mb-50">
                                Discover Anandam Floor II, a serene residential offering in the heart of Modipuram, Meerut. Crafted as a natural extension of the well-received first phase, this project blends thoughtful design with everyday convenience. Situated along the Delhi–Dehradun Highway and approved by the MDA, it promises a lifestyle rooted in comfort, connectivity, and calm.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-stretch order-lg-first">
                    <div class="split-image-left rounded-0">
                        <img src="images/project/anandam_floor/A67A3974.JPG" class="pro-img" alt="Image Description" />
                    </div>
                </div>
            </div>
        </section>
        <!-- <hr class="mt-0 mb-0 white" /> -->

        <section class="page-section ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 col-lg-3 mb-md-50">


                        <h3 class="section-title-small mb-40">Project Overview</h3>

                        <div class="section-line"></div>
                    </div>

                    <div class="col-md-3 col-lg-3 d-flex align-items-stretch mb-sm-30">
                        <div class="alt-features-item border-left mt-0">
                            <div class="alt-features-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M21.62 20.196c1.055-.922 1.737-2.262 1.737-3.772 0-1.321-.521-2.515-1.357-3.412v-6.946l-11.001-6.066-11 6v12.131l11 5.869 5.468-2.917c.578.231 1.205.367 1.865.367.903 0 1.739-.258 2.471-.676l2.394 3.226.803-.596-2.38-3.208zm-11.121 2.404l-9.5-5.069v-10.447l9.5 4.946v10.57zm1-.001v-10.567l5.067-2.608.029.015.021-.04 4.384-2.256v5.039c-.774-.488-1.686-.782-2.668-.782-2.773 0-5.024 2.252-5.024 5.024 0 1.686.838 3.171 2.113 4.083l-3.922 2.092zm6.833-2.149c-2.219 0-4.024-1.808-4.024-4.026s1.805-4.025 4.024-4.025c2.22 0 4.025 1.807 4.025 4.025 0 2.218-1.805 4.026-4.025 4.026zm-.364-3.333l-1.306-1.147-.66.751 2.029 1.782 2.966-3.12-.725-.689-2.304 2.423zm-16.371-10.85l4.349-2.372 9.534 4.964-4.479 2.305-9.404-4.897zm9.4-5.127l9.404 5.186-3.832 1.972-9.565-4.98 3.993-2.178z" />
                                </svg>
                            </div>

                            <h4 class="features-title">Configuration</h4>

                            <div class="alt-features-descr">
                                Spacious 2BHK independent floors with premium finishes
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 d-flex align-items-stretch mb-sm-30">
                        <div class="alt-features-item border-left mt-0">
                            <div class="alt-features-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M12 0c-3.371 2.866-5.484 3-9 3v11.535c0 4.603 3.203 5.804 9 9.465 5.797-3.661 9-4.862 9-9.465v-11.535c-3.516 0-5.629-.134-9-3zm0 1.292c2.942 2.31 5.12 2.655 8 2.701v10.542c0 3.891-2.638 4.943-8 8.284-5.375-3.35-8-4.414-8-8.284v-10.542c2.88-.046 5.058-.391 8-2.701zm5 7.739l-5.992 6.623-3.672-3.931.701-.683 3.008 3.184 5.227-5.878.728.685z" />
                                </svg>
                            </div>

                            <h4 class="features-title">Area</h4>

                            <div class="alt-features-descr">
                                Approx. 1150 sq.ft.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 d-flex align-items-stretch">
                        <div class="alt-features-item border-left mt-0">
                            <div class="alt-features-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M6.514 24.015h-3v-3.39c-2.08-.638-3.5-2.652-3.5-5.04 0-1.19.202-1.693 1.774-5.603.521-1.294 1.195-2.97 2.068-5.179.204-.518.67-.806 1.17-.802.482.004.941.284 1.146.802.718 1.817 1.302 3.274 1.777 4.454.26-.596.567-1.288.928-2.103.694-1.565 1.591-3.592 2.754-6.265.258-.592.881-.906 1.397-.888.572.015 1.126.329 1.369.888 1.163 2.673 2.06 4.7 2.754 6.265 2.094 4.727 2.363 5.334 2.363 6.764 0 2.927-2.078 5.422-5 6.082v4.015h-3v-4.015c-.943-.213-1.797-.617-2.523-1.165-.612.845-1.466 1.48-2.477 1.79v3.39zm14.493-6c1.652 0 2.993 1.341 2.993 2.993s-1.341 2.993-2.993 2.993-2.993-1.341-2.993-2.993 1.341-2.993 2.993-2.993zm.007.993c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2zm-7.5 3.993v-3.839c4.906-.786 5-4.751 5-5.244 0-1.218-.216-1.705-2.277-6.359-2.134-4.82-2.721-6.198-2.755-6.261-.079-.145-.193-.292-.455-.297-.238 0-.37.092-.481.297-.034.063-.621 1.441-2.755 6.261-2.061 4.654-2.277 5.141-2.277 6.359 0 .493.094 4.458 5 5.244v3.839h1zm-6.123-12.448l-.08-.198c-1.589-3.957-2.04-5.116-2.067-5.171-.072-.151-.15-.226-.226-.228-.109 0-.188.13-.235.228-.028.05-.316.818-2.066 5.171-1.542 3.833-1.703 4.233-1.703 5.23 0 1.988 1.076 3.728 3.5 4.25v3.166h1v-3.166c1.266-.273 2.159-.876 2.725-1.666-1.078-1.12-1.725-2.619-1.725-4.251 0-.979.126-1.572.877-3.365z" />
                                </svg>
                            </div>

                            <h4 class="features-title">Status</h4>

                            <div class="alt-features-descr">
                                Under construction
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 d-flex align-items-stretch">
                        <div class="alt-features-item border-left mt-0">
                            <div class="alt-features-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M6.514 24.015h-3v-3.39c-2.08-.638-3.5-2.652-3.5-5.04 0-1.19.202-1.693 1.774-5.603.521-1.294 1.195-2.97 2.068-5.179.204-.518.67-.806 1.17-.802.482.004.941.284 1.146.802.718 1.817 1.302 3.274 1.777 4.454.26-.596.567-1.288.928-2.103.694-1.565 1.591-3.592 2.754-6.265.258-.592.881-.906 1.397-.888.572.015 1.126.329 1.369.888 1.163 2.673 2.06 4.7 2.754 6.265 2.094 4.727 2.363 5.334 2.363 6.764 0 2.927-2.078 5.422-5 6.082v4.015h-3v-4.015c-.943-.213-1.797-.617-2.523-1.165-.612.845-1.466 1.48-2.477 1.79v3.39zm14.493-6c1.652 0 2.993 1.341 2.993 2.993s-1.341 2.993-2.993 2.993-2.993-1.341-2.993-2.993 1.341-2.993 2.993-2.993zm.007.993c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2zm-7.5 3.993v-3.839c4.906-.786 5-4.751 5-5.244 0-1.218-.216-1.705-2.277-6.359-2.134-4.82-2.721-6.198-2.755-6.261-.079-.145-.193-.292-.455-.297-.238 0-.37.092-.481.297-.034.063-.621 1.441-2.755 6.261-2.061 4.654-2.277 5.141-2.277 6.359 0 .493.094 4.458 5 5.244v3.839h1zm-6.123-12.448l-.08-.198c-1.589-3.957-2.04-5.116-2.067-5.171-.072-.151-.15-.226-.226-.228-.109 0-.188.13-.235.228-.028.05-.316.818-2.066 5.171-1.542 3.833-1.703 4.233-1.703 5.23 0 1.988 1.076 3.728 3.5 4.25v3.166h1v-3.166c1.266-.273 2.159-.876 2.725-1.666-1.078-1.12-1.725-2.619-1.725-4.251 0-.979.126-1.572.877-3.365z" />
                                </svg>
                            </div>

                            <h4 class="features-title">Ownership</h4>

                            <div class="alt-features-descr">
                                Freehold
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-dark-1 light-content">
            <div class="container position-relative">
                <!-- Grid -->
                <div class="row mb-60 mb-xs-30">
                    <div class="col-md-12">
                        <h2 class="section-caption mb-xs-10"></h2>
                        <h3 class="section-title mb-0 text-center"><span class="wow charsAnimIn" data-splitting="chars">Planned Amenities</span></h3>
                    </div>
                </div>
                <div class="row www-bo-dwd">
                    <div class="col-md-3 col-lg-2 align-items-stretch mb-sm-30 text-center">
                        <div class="alt-features-item mt-0">
                            <div class="alt-features-icon">
                                <img src="images/features_icons/gate.png" />
                            </div>
                            <h4 class="alt-features-title">Lush green parks with gazebos</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 align-items-stretch mb-sm-30 text-center">
                        <div class="alt-features-item mt-0">
                            <div class="alt-features-icon">
                                <img src="images/features_icons/hospital-building.png" />
                            </div>
                            <h4 class="alt-features-title">Children’s play zone</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 align-items-stretch text-center">
                        <div class="alt-features-item mt-0">
                            <div class="alt-features-icon">
                                <img src="images/features_icons/market.png" />
                            </div>
                            <h4 class="alt-features-title">Modern clubhouse with swimming pool, gym & badminton court
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 align-items-stretch text-center">
                        <div class="alt-features-item mt-0">
                            <div class="alt-features-icon">
                                <img src="images/features_icons/swim.png" />
                            </div>
                            <h4 class="alt-features-title">On-site shopping arcade for daily essentials</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 align-items-stretch text-center">
                        <div class="alt-features-item mt-0">
                            <div class="alt-features-icon">
                                <img src="images/features_icons/cctv-camera.png" />
                            </div>
                            <h4 class="alt-features-title">24×7 security with CCTV coverage</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 align-items-stretch text-center">
                        <div class="alt-features-item mt-0">
                            <div class="alt-features-icon">
                                <img src="images/features_icons/clubhouse.png" />
                            </div>
                            <h4 class="alt-features-title">Power backup for shared areas</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-scroll light-content" style="background-image: url(images/full-width-images/shubha__retouch__76124.png);">
            <!-- Desktop Overlay -->
            <div class="bg-overlay bg-gradient-dark-alpha-2 d-none d-md-block"></div>
            <!-- End Desktop Overlay -->

            <!-- Mobile Overlay -->
            <div class="bg-overlay bg-dark-1 opacity-085 d-md-none"></div>
            <!-- End Mobile Overlay -->

            <div class="container position-relative">
                <div class="row wow fadeInUp">
                    <div class="col-md-7 offset-md-5 col-lg-6 offset-lg-6 col-xl-5 offset-xl-7">
                        <h2 class="section-title mb-40 mb-sm-30">Location Highlights</h2>
                        <div class="row dsvsdvds">
                            <div class="col-md-12">
                                <div class="bo-area-intet">

                                    <p>Just a 5-minute walk from the upcoming Rapid Metro station</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bo-area-intet">

                                    <p>5-minute drive to Meerut Cantt Railway Station</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bo-area-intet">
                                    <!-- <h5>Key Feature</h5> -->
                                    <p>Close to Subharti University and leading schools</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bo-area-intet">

                                    <p>Main market and Begum Bridge within a 10-minute reach
                                    
                                    </p>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                    <div class="bo-area-intet">
                                        <h5>Development Partner</h5>
                                        <p>In collaboration with RLDA (Rail Land Development Authority)
</p>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="page-section light-content pt-100 pb-100">
            <div class="container relative">
                <div class="row mt-n30">
                    <div class="col-md-4">
                        <div class="post-prev-img rounded-0 mt-30 wow fadeScaleIn" data-wow-duration="1s">
                            <a href="images/project/anandam_floor/A67A3962.JPG" class="lightbox-gallery-2 mfp-image"><img src="images/project/anandam_floor/A67A3962.JPG" alt="Image Description" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-prev-img rounded-0 mt-30 wow fadeScaleIn" data-wow-duration="1s">
                            <a href="images/project/anandam_floor/A67A3974.JPG" class="lightbox-gallery-2 mfp-image"><img src="images/project/anandam_floor/A67A3974.JPG" alt="Image Description" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-prev-img rounded-0 mt-30 wow fadeScaleIn" data-wow-duration="1s">
                            <a href="images/project/anandam_floor/A67A3975.JPG" class="lightbox-gallery-2 mfp-image"><img src="images/project/anandam_floor/A67A3975.JPG" alt="Image Description" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-prev-img rounded-0 mt-30 wow fadeScaleIn" data-wow-duration="1s">
                            <a href="images/project/anandam_floor/A67A4020.JPG" class="lightbox-gallery-2 mfp-image"><img src="images/project/anandam_floor/A67A4020.JPG" alt="Image Description" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-prev-img rounded-0 mt-30 wow fadeScaleIn" data-wow-duration="1s">
                            <a href="images/project/anandam_floor/A67A4022.JPG" class="lightbox-gallery-2 mfp-image"><img src="images/project/anandam_floor/A67A4022.JPG" alt="Image Description" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-prev-img rounded-0 mt-30 wow fadeScaleIn" data-wow-duration="1s">
                            <a href="images/project/anandam_floor/A67A4025.JPG" class="lightbox-gallery-2 mfp-image"><img src="images/project/anandam_floor/A67A4025.JPG" alt="Image Description" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-prev-img rounded-0 mt-30 wow fadeScaleIn" data-wow-duration="1s">
                            <a href="images/project/anandam_floor/A67A3981.JPG" class="lightbox-gallery-2 mfp-image"><img src="images/project/anandam_floor/A67A3981.JPG" alt="Image Description" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-prev-img rounded-0 mt-30 wow fadeScaleIn" data-wow-duration="1s">
                            <a href="images/project/anandam_floor/A67A3982.JPG" class="lightbox-gallery-2 mfp-image"><img src="images/project/anandam_floor/A67A3982.JPG" alt="Image Description" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-prev-img rounded-0 mt-30 wow fadeScaleIn" data-wow-duration="1s">
                            <a href="images/project/anandam_floor/A67A3989.JPG" class="lightbox-gallery-2 mfp-image"><img src="images/project/anandam_floor/A67A3989.JPG" alt="Image Description" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="mt-0 mb-0 white" />

        <section class="page-section  pb-100" id="about">
            <div class="container position-relative">
                <div class="row mb-xs-30">
                    <div class="col-md-6">
                        <h2 class="section-caption mb-xs-10"></h2>
                        <h3 class="section-title mb-0"><span class="wow charsAnimIn" data-splitting="chars">Site Plan</span></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-prev-img rounded-0 mt-30 wow fadeScaleIn" data-wow-duration="1s">
                            <a href="images/project/image 2 d.jpg" class="lightbox-gallery-2 mfp-image"><img src="images/project/image 2 d.jpg" alt="Image Description" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="mt-0 mb-0 white" />
        <section class="page-section " id="about">
            <div class="container position-relative">
                <div class="row mb-60 mb-xs-30">
                    <div class="col-md-6">
                        <h2 class="section-caption mb-xs-10"></h2>
                        <h3 class="section-title mb-0"><span class="wow charsAnimIn" data-splitting="chars">Specifications</span></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-area-sp-list">
                            <h3>Flooring</h3>
                            <ul>
                                <li>Vitrified Tiles Flooring in Living, Dining and Lobby.</li>
                                <li>Vitrified Tiles Flooring in Bedrooms, Kitchen.</li>
                                <li>Balconies will be in anti skid Tiles.</li>
                            </ul>
                        </div>
                        <div class="box-area-sp-list">
                            <h3>Kitchen</h3>
                            <ul>
                                <li>All Kitchen Counters in Polish Granite Top.</li>
                                <li>Premium CP Fittings and Semi Modular Kitchen Cupboards** in first class finish.</li>
                            </ul>
                        </div>
                        <div class="box-area-sp-list">
                            <h3>Toilets</h3>
                            <ul>
                                <li>Anti Skid Tiles on Floor and Ceramic Tiles on walls.</li>
                                <li>All Internal Plumbing in UPVC/CPVC or equivalent.</li>
                                <li>CP Fitting & Chinaware of Parryware/Hindware or equivalent.</li>
                                <li>All External in UPVC/PVC or equivalent.</li>
                            </ul>
                        </div>
                        <div class="box-area-sp-list">
                            <h3>Door And Window</h3>
                            <ul>
                                <li>Doorframe and Windows Panels of UPVC or equivalent.</li>
                                <li>Entrance Door Solid Flush Door.</li>
                                <li>All Internal Doors are Moulded Panel Doors with Branded Locks and Hardware Fitting.</li>
                                <li>Stainless Steel/Brass Finished or equivalent Hardware Fittings for Main Door & all Hardware Fitting in Powder Coated Aluminium.</li>
                                <li>Fine SS Railing in balcony & Staircase</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-area-sp-list">
                            <h3>Painting</h3>
                            <ul>
                                <li>Emulsion/Plastic Paint on Interior Walls and Ceilings.</li>
                                <li>POP Punning on Walls & Ceilings.</li>
                            </ul>
                        </div>
                        <div class="box-area-sp-list">
                            <h3>Exterior</h3>
                            <ul>
                                <li>Appropriate Finish of Exterior Grade Water Proof Paint.</li>
                            </ul>
                        </div>
                        <div class="box-area-sp-list">
                            <h3>Electricals</h3>
                            <ul>
                                <li>All Electrical Wiring in Concealed Conduits.</li>
                                <li>Provision of Adequate Light & Power Points.</li>
                                <li>Telephone and TV Outlets in Drawings, Dining in all Bedrooms with Moulded Modular Plastic Switches.</li>
                                <li>Protective MCBs. of Legrand/Anchor or equivalent.</li>
                                <li>Light Fittings</li>
                            </ul>
                        </div>
                        <div class="box-area-sp-list">
                            <h3>Security</h3>
                            <ul>
                                <li>Provision for Optical Fiber Network</li>
                                <li>Fire Prevention, Suppression, Detection and Alarm System as per Fire Norms.</li>
                            </ul>
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