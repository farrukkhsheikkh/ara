<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="">
        <meta name="author" content="ARA Design">

        <!-- Favicon and touch Icons -->
        <link href="/assets/images/logo/ARA_LOGO-02.svg" rel="shortcut icon" type="image/png">
        <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="/assets/img/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
        <link href="/assets/img/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
        <link href="/assets/img/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>ARA Design</title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="/assets/css/style.css">

        <!-- <style>
            @import url('https://fonts.googleapis.com/css2?family=Adamina&display=swap');

            h5 , a
            {
                font-family: 'Adamina', serif;
            }
        </style> -->
        
        
    </head>


    <body class="bg-dark">

        <!-- Preloader -->
        {{-- <div id="preloader">
			<div class="preloader-inner">
				<div class="spinner"></div>
				<div class="loading-text">
					<span data-preloader-text="A" class="characters">A</span>
					
					<span data-preloader-text="R" class="characters">R</span>
					
					<span data-preloader-text="A" class="characters">A</span>
					
				</div>
			</div>
		</div> --}}

        

        <!-- Color Mode Switcher -->
		<!--div id="mode_switcher">
			<span><i class="bi bi-moon-fill"></i></span>	
		</div-->        

        <!-- Cursor Effect
        <div class="pointer bnz-pointer" id="bnz-pointer"></div>
        -->

        <!-- Header -->
		<header class="header header-3">				
            <div class="container">
                <div class="header_inner d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="/" class="light_logo"><img src="/assets/images/logo/ARA_LOGO-02.svg" alt="logo"></a>
                        <a href="/" class="dark_logo"><img src="/assets/images/logo/ARA_LOGO-01.svg" alt="logo"></a>
                    </div>

                    
                    <div class="mainnav d-none">
                        <ul class="main_menu">
                            <li class="menu-item active"><a href="/">Home</a>
                            </li>
                            <li class="menu-item"><a href="{{route('projects')}}">Projects</a></li>
                            
                            <li class="menu-item menu-item-has-children"><a href="#">About</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{route('about')}}">Profile</a></li>
                                    <li class="menu-item"><a href="{{route('about')}}">Awards & Publication</a></li>
                                </ul>
                            </li>
                            
                            <li class="menu-item menu-item-has-children"><a href="#">Company</a>
                                <ul class="sub-menu">
                                     <li class="menu-item menu-item-has-children"><a href="{{route('services')}}">Services</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Master Planning</a></li>
                                            <li class="menu-item"><a href="#">Architecture</a></li>
                                            <li class="menu-item"><a href="#">Interior</a></li>
                                            <li class="menu-item"><a href="#">Landscaping</a></li>
                                            <li class="menu-item"><a href="#">BIM Services</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="menu-item"><a href="{{route('contact')}}">Contact</a></li>
                            <li class="menu-item"><a href="{{route('careers')}}">Careers</a></li>
                            <li class="menu-item menu-item-has-children"><a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="blog.html">Blog</a></li>
                                    <li class="menu-item"><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header_right_part d-flex align-items-center">
                        <!-- <button class="aside_open">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button> -->
                         <!-- Color Mode Switcher -->
		<div id="mode_switcher">
			<span><i class="bi bi-moon-fill"></i></span>	
		</div>  
                        <!--div class="header_search">								
                            <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                        </div>
                        <div class="open_search">
                            <form class="search_form" action="search.php">
                                <input type="text" name="search" class="keyword form-control" placeholder="Search...">
                                <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div-->

                        <!-- Mobile Responsive Menu Toggle Button -->
                        <button type="button" class="mr_menu_toggle">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                </div>
			</div>
		</header>
        @yield('content')

        <!-- Mobile Responsive Menu -->
		<div class="mr_menu">
			<div class="mr_menu_overlay"></div>
			<button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
            <img src="/assets/img/ARA_LOGO-02.svg" alt="logo"> <!-- Keep this div empty. Logo will come here by JavaScript -->
			<div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->

            <!-- Footer-->
            <footer class="footer p-0">
                <div class="footer_inner pb-0">
                    <div class="footer_elements d-flex align-items-center justify-content-center">
                        <div class="footer_elements_inner">
                            <div class="footer_social">
                                <ul class="social_list justify-content-center">
                                    <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li class="youbetube"><a href="#"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="terms_condition">
                                <ul>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Condition</a></li>
                                    <li><a href="#">Policy</a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                <p>ARA 2023. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
		</div>

        <div class="aside_info_wrapper">
			<button class="aside_close"><i class="bi bi-x-lg"></i></button>
			<div class="aside_logo">
                <a href="index.html" class="light_logo"><img src="/assets/img/logo-light-lg.svg" alt="logo"></a>
                <a href="index.html" class="dark_logo"><img src="/assets/img/logo-dark-lg.svg" alt="logo"></a>
            </div>
			<div class="aside_info_inner">
                <p>ARA Design is a full-service design firm providing architecture.</p>
                
                <div class="aside_info_inner_box">
                    <h5>Contact Info</h5>
                    <p>+123 456 789 33</p>
                    <p>Islamabad <br> Pakistan</p>
                    <p>ara@gmail.com</p>

                    <h5>Office Address</h5>
                    <p>Islamabad <br> Pakistan</p>
                </div>
                <div class="social_sites">
                    <ul class="d-flex align-items-center justify-content-center">
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                    </ul>
                </div>
			</div>
		</div>

        

    <!-- Footer-->
    <footer class="footer bg-dark-200 box_padding">
        <div class="footer_inner bg-black" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="footer_elements">
                        <div class="footer_elements_inner">
                            <div class="footer_logo" data-aos="fade-up" data-aos-duration="500">
                                <a href="index.html" class="light_logo"><img src="/assets/images/logo/ARA_R-02.svg" alt="logo"></a>
                            </div>
                            <div class="footer_social">
                                <ul class="social_list">
                                    <li class="facebook" data-aos="fade-up" data-aos-duration="500"><a href="#"><img src="/assets/img/facebook.svg" width="20" height="20" /></a></li>
                                    <li class="twitter" data-aos="fade-up" data-aos-duration="700"><a href="#"><img src="/assets/img/x.svg" width="20" height="20" /></a></li>
                                    <li class="instagram" data-aos="fade-up" data-aos-duration="900"><a href="#"><img src="/assets/img/instagram.svg" width="20" height="20" /></a></li>
                                    <li class="youbetube" data-aos="fade-up" data-aos-duration="1100"><a href="#"><img src="/assets/img/youtube.svg" width="20" height="20" /></a></li>
                                </ul>
                            </div>
                            <div class="communication">
                            <div class="info_body" data-aos="fade-up" data-aos-duration="900">
                                 <h6>+92 51 556 7685<br>84, Peshawar Road, Rawalpindi Cantt, Pakistan</h6>
                            </div>
                            </div>

                         
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="communication qlink">
                        <h5>Quick Links</h5>
                        <div class="info_body">
                            <ul class="qlinklist">
                            <li class="menu-item"><a href="{{route('about')}}">Profile</a></li>
                            <li class="menu-item"><a href="{{route('projects')}}">Projects</a></li>
                            <li class="menu-item"><a href="{{route('services')}}">Services</a></li>
                            <li class="menu-item"><a href="{{route('about')}}">About</a></li>
                                <li class="menu-item"><a href="{{route('careers')}}">Careers</a></li>
                                 </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="communication footerform">
                        <h5>Subscribe to our Newsletter</h5>
                        <div class="info_body">
                           <form>
                            <input type="emial" placeholder="Enter your email" class="subscribeform">
                            <button type="button">Subscribe</button>
                           </form>
                        </div>
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
    </div>
    </footer>

    <div class="totop">
    <a href="#">UP</a>
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

        

        <!-- Core JS -->
        <script src="/assets/js/jquery-3.6.0.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>

        
        
        <!-- Swiper for Slider Type -->
        <script src="/plugins/swiper/swiper-bundle.min.js"></script>
        
        <!-- Portfolio -->
        <script src="/plugins/isotope/isotope.pkgd.min.js"></script>
        <script src="/plugins/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="/plugins/isotope/packery-mode.pkgd.js"></script>
        <script src="/plugins/isotope/tilt.jquery.js"></script>
        <script src="/plugins/isotope/isotope-init.js"></script>
        
        

        <!-- Cursor Effect 
        <script src="/plugins/cursor-effect/cursor-effect.js"></script>
        -->
        <!-- Select2 -->
        <script src="/plugins/select2/js/select2.min.js"></script>
        
        <!-- AOS effect JS -->
        <script src="/plugins/aos/aos.js"></script>
        
        <!-- Theme Custom JS -->
        <script src="/assets/js/theme.js"></script>
    </body>
</html>
