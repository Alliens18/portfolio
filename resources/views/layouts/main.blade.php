<!doctype html>
<html lang="en">
    <head>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portofolio | Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/animate.css" rel="stylesheet" />

        {{-- Temp --}}
        <!-- Vendor CSS Files -->
        <link href="vendor/aos/aos.css" rel="stylesheet">
        <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body class="d-flex flex-column h-100">

        <main class="flex-shrink-0">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="/"><span class="fw-bolder text-primary">Ali's Portfolio</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div>
                @yield('container')
            </div>
        </main>

        <footer id="footer" style="background-color: #171332">
            {{-- <div class="" data-aos="fade-up"> --}}
            <div class="px-4 py-5 text-white row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h3>Ali Sisri</h3>
                    <p>Astute and highly analitycal. Have an interest in software development. Has experienced working agile 
                        methodology as a systems analyst, web developers, and business consultant. Confidence to work vigorously 
                        either in teams or as individuals</p>
                    <div class="social-links">
                        <a href="https://twitter.com/manameisalli" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.instagram.com/aliens.in" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/ali-sisri-03a59021a/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
                <div class="mt-0 col-lg-4 col-md-4 col-sm-4">
                    <h4>Menu</h4>
                    <ul>
                        <li class="nav-link mb-3"><a href="/" class="text-white"><i class="fa-solid fa-house"></i> &ensp; Home</a></li>
                        <li class="nav-link mb-3"><a href="#resume" class="text-white"><i class="fa-solid fa-file"></i> &ensp; Resume</a></li>
                        <li class="nav-link mb-3"><a href="#projects" class="text-white"><i class="fa-sharp fa-solid fa-list-check"></i> &ensp; Projects</a></li>
                        <li class="nav-link mb-3"><a href="#contact" class="text-white"><i class="fa-solid fa-phone"></i> &ensp; Contact</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    &copy; Copyright <strong><span>Ali's Portfolio</span></strong>. All Rights Reserved
                </div>
            </div>
          </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>


        <!-- Vendor JS Files -->
        <script src="vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="vendor/aos/aos.js"></script>
        <script src="vendor/glightbox/js/glightbox.min.js"></script>
        <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="vendor/swiper/swiper-bundle.min.js"></script>
        <script src="vendor/typed.js/typed.umd.js"></script>
        <script src="vendor/waypoints/noframework.waypoints.js"></script>
        <script src="vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="js/main.js"></script>
    </body>
</html>