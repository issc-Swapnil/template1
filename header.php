<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>RDIGS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
         <link rel="icon" href="favicon.png" type="image/png" />
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
        <div class="modal fade" id="subscribeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 464px;"> <!-- Smaller width -->
                <div class="modal-content border-0" style="border-radius: 20px; background: #f6fbfe; height: auto;"> <!-- Adjust height here -->
                    <div class="modal-body p-3"> <!-- Less padding -->
                        <form id="subscriptionForm" method="post">

                            <div class="bg-white p-3 rounded-4 shadow-sm position-relative" style="border-radius: 20px;">
                                
                                <!-- Close Button -->
                                <button type="button" class="btn-close position-absolute end-0 m-2 custom-close-btn"
                                    style="filter: invert(37%) sepia(95%) saturate(1800%) hue-rotate(180deg) brightness(93%) contrast(90%); top: -10px; width: 2px; font-weight: bold;"
                                    data-bs-dismiss="modal" aria-label="Close">
                                </button>


                                <!-- Title & Description -->
                                <h4 class="text-center fw-bold mb-2" style="color: #3099D5; font-size: 21px;">Stay Updated With Our Newsletter!</h4>
                               <p class="text-center text-dark mb-3" style="font-size: 11px;">
                                    Be the first to hear about the latest B2B marketing news,<br>
                                    insights, & exclusive offers from RDIGS.
                                </p>

                                <!-- Email Input -->
                                <div class="position-relative mb-3">
                                    <input type="email" class="form-control rounded-pill px-3 py-2 shadow-sm" placeholder="Enter Your Email" style="padding-right: 45px;">
                                    <i class="bi bi-envelope-fill position-absolute top-50 end-0 translate-middle-y me-3 fs-5" style="color: #3099D5;"></i>
                                </div>

                                <!-- Consent Checkbox -->
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="consentCheck" name="consentCheck" required>
                                    <label class="form-check-label" style="font-size: 9px;" for="consentCheck">
                                        By subscribing, you agree to receive valuable content, industry trends, & marketing insights from RDIGS, its subsidiaries, & affiliates(collectively, "RDIGS") via email & phone. You can opt out anytime as detailed in our Privacy Policy.
                                    </label>
                                </div>

                                <!-- Subscribe Button -->
                                <button type="submit" class="btn fw-bold text-white mx-auto d-block"
                                    style="background: #3099D5; border-radius: 50px; padding: 4px 0; font-size: 18px; width: 50%;">
                                    Subscribe Now
                                </button>
                            </div>
                        </form>
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
                        <div class="d-flex pe-3">
                            <a class="btn p-0 text-primary me-3" href="https://www.facebook.com/RDInfoGlobalSolutions" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn p-0 text-primary me-3" href="https://twitter.com/rdigsb2b" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn p-0 text-primary me-3" href="https://www.instagram.com/rdinfoglobalsolutions/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn p-0 text-primary me-0" href="https://www.linkedin.com/company/rd-info-global-solutions/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
<div id="mainNavbar" class="container-fluid nav-bar px-0 px-lg-4 py-lg-0"
     style="position: sticky; top: 0; z-index: 999; transition: transform 0.3s ease;">
    <nav class="navbar navbar-expand-lg navbar-light navbar-top-color w-100">
        <!-- Left logo -->
        <a href="/" class="navbar-brand p-0">
            <img src="img/Home-Main-logo.png" alt="Logo" style="height: 90px;">
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>

        <!-- Middle menu -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-0 mx-lg-auto" style="width: 55% !important; margin-left: -3px !important;">
                <a href="/" class="nav-item nav-link">
                    <img src="img/Home-Icon.png" alt="Home" style="width: 23px; height: 23px;">
                </a>

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

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">
                        <span class="dropdown-toggle">Strategies</span>
                    </a>
                    <div class="dropdown-menu">
                        <a href="b2bdemandgeneration.php" class="dropdown-item">Content Syndication</a>
                        <a href="abm.php" class="dropdown-item">Account-Based Marketing</a>
                        <a href="intentbasedmarketing.php" class="dropdown-item">Intent-Based Marketing</a>
                        <a href="event-basedmarketing.php" class="dropdown-item">Event-Based Marketing</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">
                        <span class="dropdown-toggle">Resources</span>
                    </a>
                    <div class="dropdown-menu">
                        <a href="casestudies.php" class="dropdown-item">Case Studies</a>
                        <a href="corporatedesk.php" class="dropdown-item">Media Deck</a>
                        <a href="blog.php" class="dropdown-item">Blogs</a>
                        <a href="events.php" class="dropdown-item">Events</a>
                    </div>
                </div>

                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>

            <!-- Right Side: Single Image -->
            <div class="d-none d-xl-block">
                <img src="img/Call-Buttan.png" alt="Right Side Image" style="height: 60px;">
            </div>
        </div>
    </nav>
</div>


        <!-- Navbar & Hero End -->

        <script>
  const navbar = document.getElementById("mainNavbar");
  let lastScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    const currentScrollY = window.scrollY;

    // Scroll Down → Hide navbar
    if (currentScrollY > lastScrollY && currentScrollY > 200) {
      navbar.style.transform = "translateY(-100%)";
    } 
    // Scroll Up or Near Top → Show navbar
    else {
      navbar.style.transform = "translateY(0)";
    }

    lastScrollY = currentScrollY;
  });

  // Show navbar if cursor moves to top 50px
  document.addEventListener("mousemove", (e) => {
    if (e.clientY <= 50) {
      navbar.style.transform = "translateY(0)";
    }
  });
</script>


    </body>

</html>