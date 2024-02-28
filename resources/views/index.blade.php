@extends('navbar')
@section('content')
<!-- Main Wrapper-->
<main class="wrapper">

    <div class="theme_slider_3 p-0">
        <div class="swiper swiper_theme_slider_3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider" style="background-image: url('/assets/img/slider/Signature Hotel.jpg')">
                        <div class="container">
                        <div class="award_banner"><img src="/assets/img/award.png" alt="award"></div>
                            <div class="seprator_line-vw"></div>  
                            <div class="slide_content">
                                <div class="slide_content_wrapper mb-0 h-auto">
                                    <div class="slide_content_inner">
                                        <h4><a href="{{route('projectdetails')}}" class="text-white text-uppercase">The Iconic Signature Hotel</a></h4>
                                        <div class="details_link">
                                            <a href="{{route('about')}}">
                                                <span class="link_text">ARA</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider" style="background-image: url('/assets/img/slider/Eclipse.jpg')">
                        <div class="container">
                            <div class="slide_content">
                                <div class="slide_content_wrapper mb-0 h-auto">
                                    <div class="slide_content_inner">
                                        <h4><a href="{{route('projectdetails')}}" class="text-white text-uppercase">Eclipse - THE ETERNAL LUXURIOUS LIVING EXPERIENCE</a></h4>
                                        <div class="details_link">
                                        <a href="{{route('about')}}">
                                                <span class="link_text">ARA</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slider" style="background-image: url('/assets/img/slider/j7.2.jpg')">
                        <div class="container">
                            <div class="award_banner"><img src="/assets/img/award.png" alt="award"></div>
                            <div class="seprator_line-vw"></div>  
                            <div class="slide_content">
                                <div class="slide_content_wrapper mb-0 h-auto">
                                    <div class="slide_content_inner">
                                        <h4><a href="{{route('projectdetails')}}" class="text-white text-uppercase">J7 Emporium - THE KING-SIZE ARCHITECTURAL MASTERPIECE</a></h4>  
                                        <div class="details_link">
                                        <a href="{{route('about')}}">
                                                <span class="link_text">ARA</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider" style="background-image: url('/assets/img/slider/icon.jpg')">
                        <div class="container">
                            <div class="award_banner"><img src="/assets/img/award.png" alt="award"></div>
                            <div class="seprator_line-vw"></div>  
                            <div class="slide_content">
                                <div class="slide_content_wrapper mb-0 h-auto">
                                    <div class="slide_content_inner">
                                        <h4><a href="{{route('projectdetails')}}" class="text-white text-uppercase">ICON - OF Elite</a></h4>
                                        <div class="details_link">
                                        <a href="{{route('about')}}">
                                                <span class="link_text">ARA</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <!-- <div class="swiper-pagination"></div> -->

            <!-- Add Buttons -->
            <div class="swiper-button-prev details_link l-dir pagination-previous"><a href="#"><i class="bi bi-chevron-left"></i></a></div>
            <div class="swiper-button-next details_link r-dir pagination-next"><a href="#"><i class="bi bi-chevron-right"></i></a></div>
            <div class="project-button"><a href="#"><i class="bi bi-plus-circle"></i></a></div>
            
        </div>
        <!-- <div class="rotate-logo d-none d-md-block">
            <div class="rotate-bg"><img src="/assets/images/logo/ARA-Seal-BG.png" alt="spinlogo"></div>
            <div class="rotate-text"><img src="/assets/images/logo/ARA-Seal-txt.png" alt="spinlogo"></div>
        </div> -->
    </div>

    <section class="projects masonry bg-transparent effect-tilt p-0">
            <div class="two-column-grid d-flex align-items-center just-content-center m-3">
                    <div class="col-6 residences spacing-r" data-aos="fade-up" data-aos-duration="700">
                    <div class="thumb">
                        <img class="item_image" src="/assets/img/portfolio/portfolio1.png" alt="">
                        <div class="works-info">
                            <div class="label-text">
                                <h5><a href="#">J7 Infinity Mall</a></h5>
                                <h6><a href="#">Covering all the neccessaties of life</a></h6>
                            </div>
                        </div>
                    </div>
                </div>                          
                <div class="col-6 interiors spacing-l" data-aos="fade-up" data-aos-duration="900"> 
                    <div class="thumb">
                        <img class="item_image" src="/assets/img/portfolio/portfolio2.png" alt="">
                        <div class="works-info">
                            <div class="label-text">
                                <h5><a href="#">ECLIPSE </a></h5>
                                <h6><a href="#">the eternal luxurious living experience</a>
                            </div>
                        </div>
                    </div>
                </div> 
                </div>
                <div class="one-column-grid d-flex align-items-center just-content-center m-3">
                <div class="col-md-12 residences" data-aos="fade-up" data-aos-duration="900"> 
                    <div class="thumb">
                        <img class="item_image" src="/assets/img/portfolio/portfolio3.png" alt="">
                        <div class="works-info">
                            <div class="label-text">
                                <h5><a href="#">APEX</a></h5>
                                <h6><a href="#">a marvel of shopping structures in Bahawalpur</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="three-column-grid d-flex align-items-start just-content-center flex-wrap m-3">
                <div class="col-6 v2box spacing-r">
                    <div clas="residences" data-aos="fade-up" data-aos-duration="700"> 
                    <div class="thumb">
                        <img class="item_image" src="/assets/img/portfolio/portfolio4.png" alt="">
                        <div class="works-info">
                            <div class="label-text">
                                <h5><a href="#">APEX</a></h5>
                                <h6><a href="#">a marvel of shopping structures in Bahawalpur</a>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div clas="landscape  v2box interiors" data-aos="fade-up" data-aos-duration="700"> 
                    <div class="thumb mt-3">
                        <img class="item_image" src="/assets/img/portfolio/portfolio5.png" alt="">
                        <div class="works-info">
                            <div class="label-text">
                                <h5><a href="#">APARTMENT COMPLEX <br> ONE 7</a></h5>
                                <h6><a href="#">exceptional architecture and design.</a>
                            </div>
                        </div>
                    </div>
                </div>         
                </div>
                <div class="col-6 vbox spacing-l landscape" data-aos="fade-up" data-aos-duration="700"> 
                    <div class="thumb">
                        <img class="item_image" src="/assets/img/portfolio/portfolio6.png" alt="">
                        <div class="works-info">
                            <div class="label-text">
                                <h5><a href="#">J7 EMPORIUM</a></h5>
                                <h6><a href="#">the king-size architectural masterpiece</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="one-column-grid d-flex align-items-center just-content-center m-3">
                    <div class="col-md-12 interiors" data-aos="fade-up" data-aos-duration="700">
                    <div class="thumb">
                        <img class="item_image" src="/assets/img/portfolio/portfolio7.png" alt="">
                        <div class="works-info">
                            <div class="label-text">
                                <h5><a href="#">EPIC TOWERS</a></h5>
                                <h6><a href="#">serves as one of the most unique shopping experiences in the twin cities</a></h6>
                            </div>
                        </div>
                    </div>
                </div>             
                </div><div class="two-column-grid d-flex align-items-center just-content-center m-3">
                    <div class="col-6 interiors spacing-r" data-aos="fade-up" data-aos-duration="700"> 
                    <div class="thumb">
                        <img class="item_image" src="/assets/img/portfolio/portfolio8.png" alt="">
                        <div class="works-info">
                            <div class="label-text">
                                <h5><a href="#">J7 ICON x ROYAL SWISS HOTEL</a></h5>
                                <h6><a href="#">ICON LOREM IPSUM</a>
                            </div>
                        </div>
                    </div>
                </div>                      
                <div class="col-6 residences spacing-l" data-aos="fade-up" data-aos-duration="700"> 
                    <div class="thumb">
                        <img class="item_image" src="/assets/img/portfolio/portfolio9.png" alt="">
                        <div class="works-info">
                            <div class="label-text">
                                <h5><a href="#">THE DECK</a></h5>
                                <h6><a href="#">UP in the hills, where life stays still</a>
                            </div>
                        </div>
                    </div>
                </div>       
                </div>                  
            </div>
            <div class="w-100 text-center my-5">
                <a href="{{route('projects')}}" class="large-text"><i class="bi bi-chevron-down"></i>
                </a>
            </div>

        </div>
    </section>

    <section class="contact_us pt-0 pb-5">
        <div class="container">
            <!-- Clients Logo -->

            <div class="partner_flex">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="/assets/images/partner/Apex Mall.png" alt="img"></div>
    <div class="swiper-slide"><img src="/assets/images/partner/Eclipse.png" alt="img"></div>
    <div class="swiper-slide"><img src="/assets/images/partner/Emproium.png" alt="img"></div>
    <div class="swiper-slide"> <img src="/assets/images/partner/Epic Tower.png" alt="img"></div>
    <div class="swiper-slide"><img src="/assets/images/partner/Galleria.png" alt="img"></div>
    
    
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>
             </div>
    </section>

</main>


@endsection
