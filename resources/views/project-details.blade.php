@extends('navbar')
@section('content')
<!-- Page Header -->
<div class="page_header">
    <div class="page_header_inner">
        <div class="container">
            <div class="page_header_content d-flex align-items-center justify-content-between">
                <h2 class="heading">Project Details</h2>
                <ul class="breadcrumb d-flex align-items-center">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('projects')}}">Projects</a></li>
                    <li class="active">The Signature Hotel</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Scroll Progress -->
    <section class="project-details bg-dark-200">
        <div class="container">
            <div class="one-time">
                <div class="swiper-wrapper">
                    <div class="col-lg-12 col-md-12 sliderbox">
                        <div class="row align-items-start justify-content-center">
                            <div class="col-lg-2 col-md-2">
                                <div class="sidebar">
                                    <div class="project-information">
                                        <h6 class="widget-title">
                                            Project Information
                                            <span class="title-line"></span>
                                        </h6>
                                        <ul>
                                            <li>
                                                <span class="data">Project Name:</span> <span class="value">The
                                                    Signature Hotel</span>
                                            </li>
                                            <li>
                                                <span class="data">Architect:</span> <span class="value">Arsalan
                                                    Khan</span>
                                            </li>
                                            <li>
                                                <span class="data">Concept:</span> <span class="value">Lorem
                                                    Ipsum</span>
                                            </li>
                                            <li>
                                                <span class="data">Date:</span> <span class="value">21/03/2019 To
                                                    15/12/2022</span>
                                            </li>
                                            <li>
                                                <span class="data">Location:</span> <span class="value">Lorem
                                                    Ipsum</span>
                                            </li>

                                        </ul>

                                        <div class="project-share">
                                            <ul>
                                                <li>Share:</li>
                                                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                                <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                                                <li><a href="#"><i class="bi bi-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10 col-md-10 projectdetailsbox">
                                <div class="gallery_slider">
                                    <div class="swiper swiper_gallery">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="gallery-image col-md-8">
                                                    <img src="../assets/img/portfolio/portfolio1.png" alt="img">
                                                </div>
                                                <div class="project-details_inner col-lg-4 px-5">
                                                    <div class="post_content">
                
                                                        <h6 class="widget-title">
                                                            Project Details
                                                            <span class="title-line"></span>
                                                        </h6>
                                                        <div class="fulltext">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu
                                                                faucibus libero, a imperdiet dui. Interdum et malesuada fames ac ante
                                                                ipsum primis in faucibus. Aenean arcu sem.
                                                            </p>
                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="gallery-image col-md-8">
                                                    <img src="../assets/img/portfolio/portfolio2.png" alt="img">
                                                </div>
                                                <div class="project-details_inner col-lg-4 px-5">
                                                    <div class="post_content">
                
                                                        <h6 class="widget-title">
                                                            Project Details
                                                            <span class="title-line"></span>
                                                        </h6>
                                                        <div class="fulltext">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu
                                                                faucibus libero, a imperdiet dui. Interdum et malesuada fames ac ante
                                                                ipsum primis in faucibus. Aenean arcu sem.
                                                            </p>
                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="gallery-image col-md-8">
                                                    <img src="../assets/img/portfolio/portfolio3.png" alt="img">
                                                </div>
                                                <div class="project-details_inner col-lg-4 px-5">
                                                    <div class="post_content">
                
                                                        <h6 class="widget-title">
                                                            Project Details
                                                            <span class="title-line"></span>
                                                        </h6>
                                                        <div class="fulltext">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu
                                                                faucibus libero, a imperdiet dui. Interdum et malesuada fames ac ante
                                                                ipsum primis in faucibus. Aenean arcu sem.
                                                            </p>
                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Pagination -->
                                        <!-- <div class="swiper-pagination"></div> -->

                                        <!-- Add Buttons -->
                                        <div class="swiper-navigation">
                                            <div class="swiper-button-prev"><i class="bi bi-arrow-left"></i></div>
                                            <div class="swiper-button-next"><i class="bi bi-arrow-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>





 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_us bg-dark-200">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <div class="section-header">
                        <h1 class="text-white text-uppercase mb-4">LET’S DISCUSS NEXT PROJECTS</h1>
                        <p class="$gray-600">The talent at ARA runs wide and deep. Across many markets, geographies and typologies, our team members are some of the finest professionals in the industry..</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="home_contact">
                        <form action="contact.php" method="POST">
                            <input class="form-control form-control-lg" name="name" id="name" type="text" placeholder="Your Name*" required aria-label=".form-control-lg example">
                            <input class="form-control form-control-lg" name="phone" id="phone" type="number" placeholder="Your Phone No" aria-label=".form-control-lg example">
                            <input class="form-control form-control-lg" name="email" id="email" type="email" placeholder="Your Email*" required aria-label=".form-control-lg example">
                            <textarea class="form-control pt-4" name="message" id="message" placeholder="Your Message" rows="3"></textarea>
                            <div class="btn_group">
                                <button type="submit" class="btn olive">Send Mail</button>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section Grid Lines -->
        <ul class="grid_lines d-none d-md-flex justify-content-between">
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
        </ul>
    </section>





</main>
@endsection
