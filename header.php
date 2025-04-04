<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>RDIGS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/new-style.css" rel="stylesheet">
    </head>

    <body>

          <!-- Popup Container -->
         <!-- Subscribe Modal -->
<div id="subscribeModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered d-flex align-items-center justify-content-center">
        <div class="modal-content p-3" 
            style="background: #3099D5; color: white; border-radius: 15px; text-align: center; 
                   box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2); max-width: 350px; width: 90%;">

            <!-- Modal Header -->
            <div class="modal-header border-0 p-2">
                <h6 class="modal-title w-100 fw-bold" 
                    style="font-size: 1.1rem; letter-spacing: 0.5px;">
                    📩 Subscribe Now
                </h6>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-2">
                <p style="font-size: 0.85rem; opacity: 0.9; margin-bottom: 10px;">Stay updated with our latest news and offers.</p>
                <input type="email" class="form-control text-black" placeholder="Enter your email"
                    style="border-radius: 8px; border: none; text-align: center; padding: 8px; 
                           font-size: 14px; background: white; color: black; 
                           box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1); width: 100%;">
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer border-0 justify-content-center p-2">
                <button type="button" class="btn w-100" 
                    style="background: white; border: none; padding: 8px 15px; font-weight: bold; 
                           border-radius: 20px; color: #3099D5; font-size: 13px; 
                           transition: all 0.3s ease-in-out;"
                    onmouseover="this.style.background='#0056b3'; this.style.color='white';"
                    onmouseout="this.style.background='white'; this.style.color='#3099D5';">
                    SUBSCRIBE
                </button>
            </div>
        </div>
    </div>
</div>



        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="border-end border-primary pe-3">
                                <a href="#" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            </div>
                            <div class="ps-3">
                                <a href="mailto:example@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>contact@rdigs.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-primary pe-3">
                                <a class="btn p-0 text-primary me-3" href="https://www.facebook.com/RDInfoGlobalSolutions"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn p-0 text-primary me-3" href="https://twitter.com/rdigsb2b"><i class="fab fa-twitter"></i></a>
                                <a class="btn p-0 text-primary me-3" href="https://www.instagram.com/rdinfoglobalsolutions/"><i class="fab fa-instagram"></i></a>
                                <a class="btn p-0 text-primary me-0" href="https://www.linkedin.com/company/rd-info-global-solutions/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="dropdown ms-3">
                                <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                                <div class="dropdown-menu rounded">
                                    <a href="#" class="dropdown-item">English</a>
                                    <a href="#" class="dropdown-item">Bangla</a>
                                    <a href="#" class="dropdown-item">French</a>
                                    <a href="#" class="dropdown-item">Spanish</a>
                                    <a href="#" class="dropdown-item">Arabic</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <a href="#" class="navbar-brand p-0">
                        <!-- <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> LifeSure</h1> -->
                        <img src="https://rolanddcosta.com/assets/images/logo.webp" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Company</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="about1.php" class="dropdown-item">About</a>
                                    <a href="ourdifferentiation.php" class="dropdown-item">Our Differentiation</a>
                                    <a href="career.php" class="dropdown-item">Career</a>
                                    <a href="life.php" class="dropdown-item">Life At RDIGS</a>
                                </div>
                            </div>
                            <a href="service.php" class="nav-item nav-link">Services</a>
                            <!-- <a href="blog.php" class="nav-item nav-link">Blog</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Strategies</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="abm.php" class="dropdown-item">ABM</a>
                                    <a href="b2bdemandgeneration.php" class="dropdown-item">B2b Demand Generation</a>
                                    <a href="intentbasedmarketing.php" class="dropdown-item">Intent Based Maketing</a>
                                    <!-- <a href="lifeatrdigs.php" class="dropdown-item">Life At RDIGS</a> -->
                                    <!-- <a href="about1.php" class="dropdown-item">About</a> -->
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Resources</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="casestudies.php" class="dropdown-item">Case Studies</a>
                                    <a href="corporatedesk.php" class="dropdown-item">Coroprate Desk</a>
                                    <!-- <a href="blog.php" class="dropdown-item">Blogs</a> -->
                                    <!-- <a href="lifeatrdigs.php" class="dropdown-item">Life At RDIGS</a> -->
                                    <!-- <a href="about1.php" class="dropdown-item">About</a> -->
                                </div>
                                </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <div class="nav-btn px-3">
                                <a href="contact.php" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0">Let's Talk</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                            <i class="fa fa-phone-alt fa-2x"></i>
                            <div class="position-absolute" style="top: 7px; right: 12px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                        <div class="d-flex flex-column ms-3">
                            <span>Call to Our Experts</span>
                            <a href="tel:+ 0123 456 7890"><span class="text-dark">Free: +91 848-404-0734</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

    </body>

</html>
