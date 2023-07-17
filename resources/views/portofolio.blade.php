        @extends('layouts.main')
        @section('container')
            <!-- Header -->
        
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class=" col-xl-6 col-md-6 col-sm-12">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <!-- <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Design &middot; Development &middot; Marketing</div></div> -->
                                <div class="fs-4 fw-light mb-3 text-muted">
                                    Halo there,
                                </div>
                                <div class="typewriter">
                                    <h1 class="display-5 fw-bolder"><span class="text-gradient d-inline">I'm Web Developer</span></h1>
                                </div>
                                <div class="typewriter mb-3">
                                    <h1 class="display-5 fw-bolder"><span class="text-gradient d-inline">Ali Sisri</span></h1>
                                </div>
                                <div class="d-grid fs-3 fw-light gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a href="https://www.instagram.com/aliens.in" class="nav-link"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/ali-sisri-03a59021a/" class="nav-link"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="https://twitter.com/manameisalli" class="nav-link"><i class="bx bxl-twitter"></i></a>
                                </div>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="#resume" style="border-radius: 35px;">Resume</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="#projects" style="border-radius: 35px;">Projects</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xl-6 col-md-6 col-sm-12">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-xxl-0">
                                <div class="profile bg-gradient-primary-to-secondary">
                                    <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                    <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                    <img class="profile-img" src="assets/Ali.png" alt="Ali" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <section class="resume" id="resume">
                <div style="background-color: #213bdc">
                    <div class="px-4 py-5" data-aos="fade-up">
                        <div class="col-lg-9 mx-auto mt-5 mb-5">
                            <h2 class="fw-3 mb-5 text-white">
                                <b>RESUME</b>
                            </h2>
                            <hr class="border border-1 border-white opacity-100">
                            <div class="row text-white">
                                <div class="col-4">
                                    <h3 class="mb-3" style="font-size: 20px;"><b>PT. Perkasa Tehnik Mandiri</b></h3>
                                    <p class="lead" style="font-size: 14px;">
                                        Web Development and System Analyst (Front End)
                                    </p>
                                    <p class="lead text-mute mb-0" style="font-size: 14px;">
                                        Jun 2022 - Sep 2022
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="lead mb-3" style="font-size: 16px;">
                                        Description:
                                    </p>
                                    <ul class="mb-0">
                                        <li>Analyze the proses business design of company profile system and product catalogs using CMS (Content Management System).</li>
                                        <li>Create UI design using Adode Illustrator.</li>
                                        <li>Company profile implementation using Codeigniter framework.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border border-1 border-white opacity-100">
                            <div class="row text-white">
                                <div class="col-4">
                                    <h3 class="mb-3" style="font-size: 20px;"><b>PT. Cyber Future</b></h3>
                                    <p class="lead" style="font-size: 14px;">
                                        Business Consultan
                                    </p>
                                    <p class="lead text-mute mb-0" style="font-size: 14px;">
                                        Jan 2022 - Mar 2022
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="lead mb-3" style="font-size: 16px;">
                                        Description:
                                    </p>
                                    <ul class="mb-0">
                                        <li>Meet with clients and offer/presentation about enterprise products.</li>
                                        <li>Contact prospective clients and offer enterprise services.</li>
                                        <li>Serving clients who consult about business and provide what opinions and actions to take particularly in the development of funds.</li>
                                        <li>Supervise developments from clients who have consulted.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border border-1 border-white opacity-100">
                            <div class="row text-white">
                                <div class="col-4">
                                    <h3 class="mb-3" style="font-size: 20px;"><b>PT. Food Station Tjipinang Jaya</b></h3>
                                    <p class="lead" style="font-size: 14px;">
                                        Web Development and System Analyst (Full Stack)
                                    </p>
                                    <p class="lead text-mute mb-0" style="font-size: 14px;">
                                        Jul 2021 - Jan 2022
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="lead mb-3" style="font-size: 16px;">
                                        Description:
                                    </p>
                                    <ul class="mb-0">
                                        <li>Make a plan to build the necessary systems E-Office and E-Archive.</li>
                                        <li>Analyze the needs that must exist on the system, such as data print features, report print, disposition letter delivery, etc.</li>
                                        <li>Analyze workflow on currently running systems becoming more efficient.</li>
                                        <li>Create website-based information system designs using Adobe Illustrator.</li>
                                        <li>Building an E-Office and E-Archive system by using a combination of CSS and Bootstrap, system creation is done native.</li>
                                        <li>Testing the system with BlackBox.</li>
                                        <li>Handover of software to users.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border border-1 border-white opacity-100">
                            <div class="row text-white">
                                <div class="col-4">
                                    <h3 class="mb-3" style="font-size: 20px;"><b>Pembangunan Jaya University</b></h3>
                                    <p class="lead" style="font-size: 14px;">
                                        Social Media Marketing
                                    </p>
                                    <p class="lead text-mute mb-0" style="font-size: 14px;">
                                        Mar 2020 - Jun 2020
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="lead mb-3" style="font-size: 16px;">
                                        Description:
                                    </p>
                                    <ul class="mb-0">
                                        <li>Manage social media accounts of the Pembangunan Jaya University.</li>
                                        <li>Contribute to enliven the photos and videos displayed on the Pembangunan Jaya social media accounts by commenting and sharing 
                                            the post.</li>
                                        <li>Successfully manage and provide a positive image on the social media accounts of Pembangunan Jaya University.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border border-1 border-white opacity-100">
                            <div class="row text-white">
                                <div class="col-4">
                                    <h3 class="mb-3" style="font-size: 20px;"><b>Pembangunan Jaya University</b></h3>
                                    <p class="lead" style="font-size: 14px;">
                                        Administration Staff
                                    </p>
                                    <p class="lead text-mute mb-0" style="font-size: 14px;">
                                        Sep 2019 - Dec 2019
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="lead mb-3" style="font-size: 16px;">
                                        Description:
                                    </p>
                                    <ul class="mb-0">
                                        <li>Contribute to administrative activities by entering new student data from forms using Microsoft Excel.</li>
                                        <li>Sorting student data using Microsoft Excel.</li>
                                        <li>Successfully record 200 more student data every day.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <center>
                                        <a class="mx-auto btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="assets/Ali_Sisri-CV.pdf" style="border-radius: 35px;">Download CV</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ======= Portfolio Section ======= -->
            <section id="projects" class="portfolio section-bg">
                <div class="container" data-aos="fade-up">
        
                    <div class="section-title text-dark">
                        <h2 class="fw-3 mb-4 text-dark">
                            PROJECT
                        </h2>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-web">Web</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-card">Design</li>
                            </ul>
                        </div>
                    </div>
            
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="pic/Web capture_14-7-2023_132649_localhost.jpeg" alt="Food Station" class="img-fluid">
                                <div class="portfolio-info">
                                    <h4>E-Arpus</h4>
                                    <p>Web Development (Full Stack)</p>
                                    <div class="portfolio-links">
                                        <a href="pic/Web capture_14-7-2023_132649_localhost.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="E-Arpus"><i class="bx bx-plus"></i></a>
                                        <a href="/project_fs" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="pic/Data Reservasi Ruang Rapat.jpeg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Office Vehicle and Room Loan Management Information System</h4>
                                    <p>Web Development & System Analyst</p>
                                    <div class="portfolio-links">
                                        <a href="pic/Data Reservasi Ruang Rapat.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Office Vehicle and Room Loan Management Information System"><i class="bx bx-plus"></i></a>
                                        <a href="/project_ta" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="pic/Web capture_14-7-2023_135510_localhost.jpeg" class="img-fluid" alt="PTM">
                                <div class="portfolio-info">
                                    <h4>Company Profile</h4>
                                    <p>Web Development (Front End)</p>
                                    <div class="portfolio-links">
                                        <a href="pic/Web capture_14-7-2023_135510_localhost.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Company Profile"><i class="bx bx-plus"></i></a>
                                        <a href="/project_ptm" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="pic/Web capture_14-7-2023_133217_localhost.jpeg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                <h4>Business Learning Information System (French)</h4>
                                <p>Web Development</p>
                                <div class="portfolio-links">
                                    <a href="pic/Web capture_14-7-2023_133217_localhost.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Business Learning Information System (French)"><i class="bx bx-plus"></i></a>
                                    <a href="/project_freelance" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
            
                        {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                                </div>
                            </div>
                        </div> --}}
            
                    </div>
        
                </div>
            </section><!-- End Portfolio Section -->

            <section class="contact" id="contact" style="background: rgb(208,4,243); background: linear-gradient(321deg, rgba(208,4,243,1) 36%, rgba(33,59,220,1) 100%);">
                <div class="container" data-aos="fade-up">
                    <div class="col-lg-9 mx-auto mt-5 mb-5">
                        <h2 class="fw-3 mb-5 text-white">
                            <b>CONTACT</b>
                        </h2>
                        <hr class="border border-1 border-white opacity-100">
                        <div class="row mt-1">
    
                            <div class="col-lg-6 info">
                                {{-- <div class="info"> --}}
                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4 class="text-white">Location:</h4>
                                        <p class="text-white">Jl. Bali Raya RT/RW 01/04 No.7 Kalideres, Jakarta Barat</p>
                                    </div>
                                    
                                    <div class="email mb-5">
                                        <i class="bi bi-envelope"></i>
                                        <h4 class="text-white">Email:</h4>
                                        <p class="text-white">alisisri18@gmail.com</p>
                                    </div>
                    
                                    
                                    {{-- </div> --}}
                                    
                            </div>
                            <div class="col-lg-6 info">
                                    <div class="phone mt-0">
                                        <i class="bi bi-phone"></i>
                                        <h4 class="text-white">Call:</h4>
                                        <p class="text-white">+6287777097429</p>
                                    </div>
        
                                    <div class="phone">
                                        <a href="https://wa.me/6287777097429" class="nav-link"><i class="fa-brands fa-whatsapp"></i></a>
                                        <h4 class="text-white">Whatsapp:</h4>
                                        <p class="text-white">+6287777097429</p>
                                    </div>
                                    
                            </div>
                  
                            {{-- <div class="col-lg-8 mt-5 mt-lg-0">
                  
                                <form action="/contact" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                        </div>
                                        </div>
                                        <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                </form>
                  
                            </div> --}}
                  
                        </div>
                    </div>

                </div>
            </section>
            @endsection