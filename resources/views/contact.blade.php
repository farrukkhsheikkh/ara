@extends('navbar')
@section('content')
    <!-- Page Header -->
    <div class="page_header">
        <div class="page_header_inner">
            <div class="container">
                <div class="page_header_content d-flex align-items-center justify-content-between">
                    <h2 class="heading">Contact</h2>
                    <ul class="breadcrumb d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>

    <!-- Main Wrapper-->
    <main class="wrapper">
        <section class="gmap box_padding">
            <div class="gmapbox" data-aos="zoom-in" data-aos-duration="1000">
                <div id="googleMap" class="map"></div>
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