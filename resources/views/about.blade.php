@extends('navbar')
@section('content')
    <!-- Main Wrapper-->
    <main class="wrapper">
        <!-- Scroll Progress -->
        
        <!-- Our Mission -->
        <section class="mission">
            <div class="container">         
                <div class="mission_top_part">
                    <div class="section-header text-center">
                        <h6 class="text-white text-uppercase">Our MISSION</h6>
                        <p class="text-gray-600" style="text-align: justify;">At ARA Team, we are dedicated to redefining architectural and interior design in Islamabad by creating innovative, chic, and sustainable spaces that blend aesthetics with functionality. Our mission is to continuously meet the evolving needs of our clients while striving for excellence in delivering modern, comfortable, and inspiring designs.</p>
                    </div>
                    <div class="has_line"></div>
                    <img src="../assets/img/bg/about_bg.jpg" alt="">
                </div>

                <div class="mission_bottom_part">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 pe-lg-4">
                            <div class="section-header">
                                <h5 >PRINCIPAL ARCHITECT & CEO</h5>
                                <h4 class="text-white text-uppercase border-line">MUHAMMAD AHMAD RIAZ</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-4">
                            <div class="mission_content">
                                <p>Muhammad Ahmad Riaz is the CEO and Principal Architect of ARA Designs. He embarked on his journey as an architect with the intent to provide innovative yet timeless design solutions while focusing on the aesthetic and functional quality of space.</p>
                                <p>After graduating from the National College of Arts in 2001, he started his own practice to revolutionize the architectural diaspora within Pakistan. Since then, he has been delivering a myriad of projects all over the country such as state-of-the art ultra modern retail/mix-use and residential projects.</p>
                                <p>At ARA Designs he heads a team of aspiring architects who focus on the provision of innovative design services.</p>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </section>

        <div class="video-block" data-aos="zoom-in" data-aos-duration="500">
            <div class="container">
                <div class="video_post">
                    <div class="ytube_video">
                        <iframe id="ytvideo" src="https://www.youtube.com/embed/fEErySYqItI" allow="autoplay;" allowfullscreen></iframe>
                        <div class="post_content">
                            <div class="ytplay_btn"><i class="bi bi-play-fill"></i></div>
                            <img src="../assets/img/bg/video_bg.jpg" alt="video">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="funfacts pd-top-lg bg_2" id="funfacts">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="funfacts_inner">
                            <div class="funfact2 d-flex align-items-center">
                                <div class="fun_img">
                                    <img src="../assets/img/fact-1.png" alt="img">
                                </div>
                                <div class="funfact_content">
                                    <p>Design Drawing</p>
                                    <div class="d-flex align-items-center"><h2 class="fun-number">120</h2></div>                                
                                </div>
                            </div>                            
                            <div class="funfact2 d-flex align-items-center">
                                <div class="fun_img">
                                    <img src="../assets/img/fact-2.png" alt="img">
                                </div>
                                <div class="funfact_content">
                                    <p>Project Completed</p>
                                    <div class="d-flex align-items-center"><h2 class="fun-number">210</h2><span>+</span></div>
                                </div>
                            </div>                            
                            <div class="funfact2 d-flex align-items-center">
                                <div class="fun_img">
                                    <img src="../assets/img/fact-3.png" alt="img">
                                </div>
                                <div class="funfact_content">
                                    <p>Design Award</p>
                                    <div class="d-flex align-items-center"><h2 class="fun-number">15</h2></div>
                                </div>
                            </div>                            
                            <div class="funfact2 d-flex align-items-center">
                                <div class="fun_img">
                                    <img src="../assets/img/fact-4.png" alt="img">
                                </div>
                                <div class="funfact_content">
                                    <p>Project Running</p>
                                    <div class="d-flex align-items-center"><h2 class="fun-number">62</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="services inner pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500">
                        <div class="icon_box">
                            <h6>01</h6>
                            <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                            <h4 class="text-white"><a href="service-1.html">Urban Design</a></h4>
                            <p class="text-gray-600">ARA Architects is a full-service design firm providing architecture, master planning, urban design, interior architecture.</p>
                            <div class="arrow_effect">
                                <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="700">
                        <div class="icon_box">
                            <h6>02</h6>
                            <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                            <h4 class="text-white"><a href="service-1.html">Interior Design</a></h4>
                            <p class="text-gray-600">ARA Architects is a full-service design firm providing architecture, master planning, urban design, interior architecture.</p>
                            <div class="arrow_effect">
                                <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900">
                        <div class="icon_box">
                            <h6>03</h6>
                            <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                            <h4 class="text-white"><a href="service-1.html">Landscape Design</a></h4>
                            <p class="text-gray-600">ARA Architects is a full-service design firm providing architecture, master planning, urban design, interior architecture.</p>
                            <div class="arrow_effect">
                                <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1100">
                        <div class="icon_box">
                            <h6>04</h6>
                            <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                            <h4 class="text-white"><a href="service-1.html">Landscape Design</a></h4>
                            <p class="text-gray-600">ARA Architects is a full-service design firm providing architecture, master planning, urban design, interior architecture.</p>
                            <div class="arrow_effect">
                                <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1300">
                        <div class="icon_box">
                            <h6>05</h6>
                            <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                            <h4 class="text-white"><a href="service-1.html">Urban Design</a></h4>
                            <p class="text-gray-600">ARA Architects is a full-service design firm providing architecture, master planning, urban design, interior architecture.</p>
                            <div class="arrow_effect">
                                <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="icon_box">
                            <h6>06</h6>
                            <img src="../assets/img/icon_box/d1.svg" alt="Icon Box">
                            <h4 class="text-white"><a href="service-1.html">Interior Design</a></h4>
                            <p class="text-gray-600">ARA Architects is a full-service design firm providing architecture, master planning, urban design, interior architecture.</p>
                            <div class="arrow_effect">
                                <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="highlight_banner bg-dark-200">
            <div class="container">
                <div class="row justify-content-center" data-aos="flip-up" data-aos-duration="500">
                    <div class="col-lg-11 p-lg-0">
                        <p class="about_para text-center">we meet new people <span><a href="#">everyday</a></span> coming with <span><a href="#">new dreams & hope our effort is to make them true</a></span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Team -->
        <section class="team">
            <div class="container">
                <div class="section-header text-center has_line">
                    <h1 class="text-white">PEOPLE</h1>
                </div>
                <div class="team_inner">
                    <!-- Swiper Team -->
                    <div class="swiper swiper_team">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-block">
                                    <img src="../assets/img/team/1.jpg" alt="img">
                                    <h5 class="text-white"><a href="team-details.html">Arsalan Khan</a></h5>
                                    <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team-block">
                                    <img src="../assets/img/team/2.jpg" alt="img">
                                    <h5 class="text-white"><a href="team-details.html">Tariq Khan</a></h5>
                                    <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team-block">
                                    <img src="../assets/img/team/3.jpg" alt="img">
                                    <h5 class="text-white"><a href="team-details.html">Sumbal Arif/a></h5>
                                    <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team-block">
                                    <img src="../assets/img/team/4.jpg" alt="img">
                                    <h5 class="text-white"><a href="team-details.html">Safiullah Khan</a></h5>
                                    <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="team-block">
                                    <img src="../assets/img/team/5.jpg" alt="img">
                                    <h5 class="text-white"><a href="team-details.html">M. Bilal</a></h5>
                                    <h6 class="text-uppercase text-olive">ARCHITECT</h6>
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
        </section>

        <!-- Testimonial -->
        <section class="testimonial box_padding">
            <div class="has_line_lg"></div>
            <div class="testimonial_inner bg-black" data-aos="zoom-in" data-aos-duration="500">
                <!-- Swiper Testimonial -->
                <div class="swiper swiper_testimonial">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-block text-center">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                <h6 class="text-olive">MAX construction agency, LA</h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block text-center">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                <h6 class="text-olive">MAX construction agency, LA</h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block text-center">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                <h6 class="text-olive">MAX construction agency, LA</h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block text-center">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                <h6 class="text-olive">MAX construction agency, LA</h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block text-center">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                <h6 class="text-olive">MAX construction agency, LA</h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block text-center">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                <h6 class="text-olive">MAX construction agency, LA</h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block text-center">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                <h6 class="text-olive">MAX construction agency, LA</h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block text-center">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                <h6 class="text-olive">MAX construction agency, LA</h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block text-center">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla"</p>
                                <h6 class="text-olive">MAX construction agency, LA</h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="contact_us bg-dark-200 d-none">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                        <div class="section-header">
                            <h1 class="text-white text-uppercase mb-4">LET’S DISCUSS NEXT PROJECTS</h1>
                            <p class="$gray-600" style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu faucibus libero, a imperdiet dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean arcu sem, lacinia id gravida volutpat, bibendum et purus. Vivamus diam dolor, sodales id tincidunt id, vestibulum at ex. Suspendisse nec orci eget purus rutrum tempor eu a enim. Curabitur eu dui non lectus congue pretium vel venenatis mi. Quisque hendrerit sed metus imperdiet euismod. Proin fermentum lobortis bibendum. Donec volutpat nulla id ipsum facilisis posuere.</p>
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
