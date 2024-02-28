@extends('navbar')
@section('content')
    <!-- Page Header -->
    <div class="page_header">
        <div class="page_header_inner">
            <div class="container">
                <div class="page_header_content d-flex align-items-center justify-content-end">
                    <!-- <h2 class="heading">Projects</h2> -->
                    <ul class="breadcrumb d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Projects</li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>

    <!-- Main Wrapper-->
    <main class="wrapper">
    <!-- Scroll Progress -->
        <section class="projects packery bg-transparent">
            <div class="container">
                <div class="portfolio-filters-content">
                    <div class="filters-button-group">
                        <button class="button is-checked" data-filter="*">All<sup class="filter-count"></sup></button>
                        <button class="button" data-filter=".retail">Retail & Mix-Use Buildings<sup class="filter-count">5</sup></button>
                        <button class="button" data-filter=".hospitality">Hospitality<sup class="filter-count">5</sup></button>
                        <button class="button" data-filter=".residential">Residential<sup class="filter-count"></sup></button>
                        <button class="button" data-filter=".interiors">Interior<sup class="filter-count"></sup></button>
                        <button class="button" data-filter=".religon">Religion / Culture<sup class="filter-count"></sup></button>
                        <button class="button" data-filter=".master">Master Planning & Urban Design<sup class="filter-count"></sup></button>
                    </div>
                </div>
                <div class="grid gutter-20 clearfix"> 
                    <div class="grid-sizer"></div>                          
                    <div class="grid-item hospitality width-100">
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/1.1.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Hospitality</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">The Signature Hotel</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                          
                    <div class="grid-item retail width-50"> 
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/2.1.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Mix Use Building</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">J7 Emporium</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                      
                    <div class="grid-item retail width-50"> 
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/3.1.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Mix Use Building</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">Eclipse Lifestyle</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                      
                    <div class="grid-item  residential master width-100"> 
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/4.2.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Residential</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">Pine Villas Islamabad</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                      
                    <div class="grid-item retail width-50"> 
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/5.1.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Mix Use Building</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">Epic Towers</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                      
                    <div class="grid-item retail width-50">
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/6.1.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Mix Use Building</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">Askari Tower</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                          
                    <div class="grid-item religon width-100"> 
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/7.1.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Religious</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">Peshawar Mosque</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                     
                    <div class="grid-item hospitality width-100">
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/8.1.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Hospitality</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">The Icon</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                          
                    <!-- <div class="grid-item hospitality width-50"> 
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/2.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Lake Cabin</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">California young menz club</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                      
                    <div class="grid-item residential width-50"> 
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/3.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Lake Cabin</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">California young menz club</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>                      
                    <div class="grid-item master exterior width-100"> 
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/4.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Lake Cabin</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">California young menz club</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="grid-item master retail width-100"> 
                        <div class="thumb">
                            <img class="item_image" src="../assets/img/portfolio/packery/4.jpg" alt="">
                            <div class="works-info">
                                <div class="label-text">
                                    <h6><a href="#">Lake Cabin</a></h6>
                                    <h5><a href="{{route('projectdetails')}}">California young menz club</a></h5>
                                    <div class="details_link"><a href="{{route('projectdetails')}}"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>  -->
                </div>
                <div class="btn_group w-100 text-center">
                    <button id="load-more" class="btn gray">Load More</button>
                </div>
            </div>
        </section>
    </main>
@endsection
