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
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar">
                            <div class="project-information">
                                <h6 class="widget-title">
                                    Project Information
                                    <span class="title-line"></span>
                                </h6>
                                <ul>
                                    <li>
                                        <span class="data">Project Name:</span> <span class="value">The Signature Hotel</span>
                                    </li>
                                    <li>
                                        <span class="data">Architect:</span> <span class="value">Arsalan Khan</span>
                                    </li>
                                    <li>
                                        <span class="data">Concept:</span> <span class="value">Lorem Ipsum</span>
                                    </li>
                                    <li>
                                        <span class="data">Date:</span> <span class="value">21/03/2019 To 15/12/2022</span>
                                    </li>
                                    <li>
                                        <span class="data">Location:</span> <span class="value">Lorem Ipsum</span>
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
                </div>
                </div>
                </section>

        <!--section class="project-details bg-dark-200">
            <div class="container">
                <div class="gallery_slider">
                    <div class="swiper swiper_gallery">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-image">
                                    <img src="../assets/img/portfolio/details/sl-1.jpg" alt="img">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-image">
                                    <img src="../assets/img/portfolio/details/sl-2.jpg" alt="img">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-image">
                                    <img src="../assets/img/portfolio/details/sl-3.jpg" alt="img">
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

                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar">
                            <div class="project-information">
                                <h6 class="widget-title">
                                    Project Information
                                    <span class="title-line"></span>
                                </h6>
                                <ul>
                                    <li>
                                        <span class="data">Project Name:</span> <span class="value">The Signature Hotel</span>
                                    </li>
                                    <li>
                                        <span class="data">Architect:</span> <span class="value">Arsalan Khan</span>
                                    </li>
                                    <li>
                                        <span class="data">Concept:</span> <span class="value">Lorem Ipsum</span>
                                    </li>
                                    <li>
                                        <span class="data">Date:</span> <span class="value">21/03/2019 To 15/12/2022</span>
                                    </li>
                                    <li>
                                        <span class="data">Location:</span> <span class="value">Lorem Ipsum</span>
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
                    
                    <div class="col-lg-8 col-md-8">
                        <div class="project-details_inner">
                            <div class="post_content">
                                <div class="post-header">
                                    <h3 class="post-title">Lorem Ipsum</h3>
                                </div>
                                <div class="fulltext">
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu faucibus libero, a imperdiet dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean arcu sem.
                                    </p>

                                    <h6 class="widget-title">
                                        Project Features
                                        <span class="title-line"></span>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu faucibus libero, a imperdiet dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean arcu sem.</p>
                                    <ul class="point_order">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu faucibus libero, a imperdiet dui.</li>
                                        <li>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean arcu sem</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu faucibus libero, a imperdiet dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean arcu sem.</li>
                                    </ul>

                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu faucibus libero, a imperdiet dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean arcu sem.
                                    </p>

                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu faucibus libero, a imperdiet dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean arcu sem.
                                    </p>

                                    <div class="post-footer">
                                        <nav class="d-flex align-items-center justify-content-between">
                                            <div class="details_link l-dir pagination-previous"><a href="#"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                            <div class="page-all"><a href="#"><i class="bi bi-grid"></i></a></div>
                                            <div class="details_link r-dir pagination-next"><a href="#"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                        </nav>
                                    </div>
                                </div>

                                <div class="related-posts">
                                    <h6 class="widget-title mb-2">
                                        More Projects
                                        <span class="title-line"></span>
                                    </h6>
                                    <div class="grid grid-3 gutter-15 clearfix"> 
                                        <div class="grid-sizer"></div>                          
                                        <div class="grid-item residences">
                                            <div class="thumb">
                                                <img class="item_image" src="../assets/img/portfolio/4.jpg" alt="">
                                                <div class="works-info">
                                                    <div class="label-text">
                                                        <h5><a href="project-details.html">Lorem Ipsum</a></h5>
                                                        <h6><a href="#">Lorem Ipsum</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                          
                                        <div class="grid-item interiors"> 
                                            <div class="thumb">
                                                <img class="item_image" src="../assets/img/portfolio/2.jpg" alt="">
                                                <div class="works-info">
                                                    <div class="label-text">
                                                        <h5><a href="project-details.html">Lorem Ipsum</a></h5>
                                                        <h6><a href="#">Lorem Ipsum</a>, <a href="#">Lorem Ipsum</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                      
                                        <div class="grid-item residences"> 
                                            <div class="thumb">
                                                <img class="item_image" src="../assets/img/portfolio/3.jpg" alt="">
                                                <div class="works-info">
                                                    <div class="label-text">
                                                        <h5><a href="project-details.html">Lorem Ipsum</a></h5>
                                                        <h6><a href="#">Lorem Ipsum</a>, <a href="#">Lorem Ipsum</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section-->
    </main>
@endsection
