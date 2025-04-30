<?php 
include 'header.php'; 
?>

<!-- popup start -->
<!-- <div id="subscribeModal" class="modal fade" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3" style="background: #3099D5; color: white; border-radius: 15px; text-align: center;">
      <div class="modal-header border-0 p-2">
        <h6 class="modal-title w-100 fw-bold">📩 Subscribe Now</h6>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-2">
        <p>Stay updated with our latest news and offers.</p>
        <input type="email" class="form-control" placeholder="Enter your email">
      </div>
      <div class="modal-footer border-0 justify-content-center p-2">
        <button class="btn btn-light text-primary w-100">SUBSCRIBE</button>
      </div>
    </div>
  </div>
</div> -->


<style>
  @media (max-width: 991px) {
    .responsive-row {
      flex-direction: column !important;
    }

    .responsive-text, .responsive-image {
      width: 100% !important;
      max-width: 100% !important;
      text-align: center !important;
      padding-right: 0 !important;
      padding-left: 0 !important;
      margin-bottom: 20px;
    }

    .responsive-image img {
      max-width: 90% !important;
      height: auto !important;
    }

    .responsive-text h1 {
      font-size: 2rem !important;
    }
  }
</style>

<div style="background: linear-gradient(to right, #3099D5, rgba(255,255,255,0)); padding: 20px 15px; color: #fff; position: relative;">

  <div style="max-width: 1200px; margin: 0 auto;">
    <div class="responsive-row" style="display: flex; align-items: center; justify-content: space-between;">

      <!-- Text -->
      <div class="responsive-text" style="width: 50%; padding-right: 0;">
        <h3 style="font-size: 1.25rem; font-weight: 700; line-height: 1.3; margin-bottom: 12px;">
          Fuel Your B2B Sales Funnel<br>
          with Programmatic Advertising
        </h3>

        <h1 style="font-size: 2.75rem; font-weight: 700; line-height: 1.2; margin-bottom: 20px;">
          Powered by Technology | Driven by Data<br>
          Delivered with a Human Touch
        </h1>

        <a href="#" style="display: inline-block; background: #000; color: #fff; padding: 12px 32px; border-radius: 50px; text-decoration: none; font-weight: 600;">
          Discover More..
        </a>
      </div>

      <!-- Image -->
      <div class="responsive-image" style="width: 50%; display: flex; justify-content: flex-end; align-items: center; padding-left: 0;">
        <img src="img/carousel-2.png" alt="Banner Graphic" style="max-height: 320px; width: auto; object-fit: contain;">
      </div>

    </div>
  </div>
</div>


<!-- banner End -->

<!-- carousel start -->
<div class="container">
        <div class="text-center mx-auto pt-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 850px;">
            <h4 style="color: #606060 !important;">Trusted By Leading Global Brands & Consistently Exceeding Expectations</h4>
            <!-- <h1 class="display-4"> Trusted By Industry Leaders</h1> -->
        </div>
        <div class="logos">
            <div class="logos-slide">
                <img src="img\client-logo\Goto.png" />
                <img src="img\client-logo\KnowBe4.png" />
                <img src="img\client-logo\NETSUITE.png" />
                <img src="img\client-logo\OZONETEL.png" />
                <img src="img\client-logo\Ring Central.png" />
                <img src="img\client-logo\Spectrum VoIP.png" />
                <img src="img\client-logo\Wheelhouse.png" />
                <img src="img\client-logo\X-Taas.png" />
                <img src="img\client-logo\Panterra.png" />
                <img src="img\client-logo\Inside.png" />
            </div>
        </div>
    </div>
    <!-- carousel end -->

    <!-- Feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Explore Services</h4>
                <h1 class="display-4 mb-4">We Assist Partners To Win New Businesses & Fuel Revenue</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-img p-4 mb-4">
                            <img src="img\homepage-service-images\B2B Lead Generation (1).jpeg" class="img-fluid" alt="B2B Lead Generation">
                        </div>
                        <h4 class="mb-4">B2B Lead Generation</h4>
                        <p class="mb-4">Empower Your Sales Team and Drive Results with Us Account-Based marketing services</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="b2bservice.php">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-img p-4 mb-4">
                            <img src="img\homepage-service-images\B2B Advertising.jpeg" class="img-fluid" alt="B2B Advertising">
                        </div>
                        <h4 class="mb-4">B2B Advertising</h4>
                        <p class="mb-4">Drive Sustainable Growth for Your Sales and Marketing Efforts with Data-Driven Strategies</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="b2badvertising.php">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-img p-4 mb-4">
                            <img src="img\homepage-service-images\B2B SDR as a Service.jpeg" class="img-fluid" alt="B2B SDR as a Service">
                        </div>
                        <h4 class="mb-4">B2B SDR as a Service</h4>
                        <p class="mb-4">Unlock the Power of Precision Marketing with RDIGS’ Intent-Based Marketing Services</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="b2bsdrasaservice.php">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-img p-4 mb-4">
                            <img src="img\homepage-service-images\Content Syndication.jpeg" class="img-fluid" alt="Content Syndication">
                        </div>
                        <h4 class="mb-4">Content Syndication</h4>
                        <p class="mb-4">Now is the time to Propel Your B2B Growth & Boost Your Sales Performance with RDIGS Sales</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="contentsyndication.php">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Button Below the Services -->
            <div class="text-center mt-4">
                <a href="service.php" class="btn btn-primary rounded-pill py-3 px-5">View All Services</a>
            </div>
        </div>
</div>

    <!-- <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="far fa-handshake fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Sales Qualified Leads</h4>
                            <p class="mb-4">Defined by digital dynamism, our digital marketing agency emerges as a beacon of innovation
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="far fa-handshake fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Digital Marketing</h4>
                            <p class="mb-4">Defined by digital dynamism, our digital marketing agency emerges as a beacon of innovation
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div> -->

               <!-- </div>
        </div> -->
    <!-- Feature End -->

    <!-- About Start -->
    <div class="container-fluid bg-light about pb-5">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item-content bg-white rounded p-5 h-100">
                        <h4 class="text-primary">About RDIGS</h4>
                        <h1 class="display-4 mb-4">Bridging Tech and Human Connection in Lead Gen</h1>
                        <p>RDIGS was founded by a team of experienced professionals, each with over 15 years in sales
                            and B2B lead generation. Recognizing a key gap in the market, they set out with a mission to
                            address it head-on. While driven by technology, RDIGS values the human touch, ensuring each
                            client benefits from a personalized experience
                        </p>
                        <!-- <p>Our commitment is to bridge the gap between technological innovation and human connection.
                            </p> -->
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Technological Innovation</p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Human Connection</p>
                        <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Personalized Experience
                        </p>
                        <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Exceptional Service</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="about1.php">Know More..</a>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-white rounded p-5 h-100">
                        <div class="row g-4 justify-content-center">
                           <div class="aboutimg">
                                <img src="img/About-US.png" alt="" style="width: 425px; height: auto;" />
                                <!-- Adjust width/height values as needed -->
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">31</span>
                                        <span class="h1 fw-bold text-primary">k+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Campaigns Executed</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">50</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Years Combined Experience</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">100 </span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Demand Gen Professionals</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">4.7</span>
                                        <span class="h1 fw-bold text-primary">m+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Millions Leads Delivered</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    <!-- Testimonial Start -->
<div class="container my-5">
  <div class="text-center mb-4">
    <p class="feedback-heading">Client's Feedback</p>
    <h2 class="testimonial-title">What Clients Say About Us</h2>
  </div>

  <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner mb-5">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row justify-content-center g-4">
          <div class="col-md-5">
            <div class="testimonial-card">
              <div class="testimonial-text">
                <p>Thanks to RDIGS' incredible work, timely leads, and flexibility... Our executive team can now see an exemplary Opportunity to Close/Win rate. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p class="client-role">CEO, Innovation Tech</p>
              </div>
              <div class="logo-container">
                <img src="img\client-feedback\Taas.png" class="client-logo" alt="TaaS Logo">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="testimonial-card">
              <div class="testimonial-text">
                <p>RDIGS has been a critical part of our success. Their responsiveness and delivery model are second to none.</p>
                <p class="client-role">CEO, Innovation Tech</p>
              </div>
              <div class="logo-container">
                <img src="img\client-feedback\Goto (1).png" class="client-logo" alt="GoTo Logo">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="row justify-content-center g-4">
          <div class="col-md-5">
            <div class="testimonial-card">
              <div class="testimonial-text">
                <p>Partnering with RDIGS has allowed us to scale efficiently while maintaining high-quality leads.</p>
                <p class="client-role">CMO, ScaleTech</p>
              </div>
              <div class="logo-container">
                <img src="img\client-feedback\Wheelhouse (1).png" class="client-logo" alt="Salesforce Logo">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="testimonial-card">
              <div class="testimonial-text">
                <p>We value RDIGS' strategic input and proactive communication. They truly act as a partner, not just a vendor.</p>
                <p class="client-role">VP, GrowthOps</p>
              </div>
              <div class="logo-container">
                <img src="img\client-feedback\Inside (1).png" class="client-logo" alt="Zoom Logo">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Custom Navigation Buttons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true">
        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
          <path fill="#3099D5" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
      </span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true">
        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
          <path fill="#3099D5" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
      </span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
</div>

    <!-- testimonial end -->

    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Team</h4>
                <h1 class="display-4 mb-4">Meet Our Expert Team Members</h1>
                <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p> -->
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img\team\team1..jpeg" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <!-- <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a> -->
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href="https://www.linkedin.com/in/rolanddcosta0734/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <!-- <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                        <div class="team-title p-4" style="height: 120px;">
                            <h4 class="mb-0">Roland D'Costa</h4>
                            <p class="mb-0">Chief Executive Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img\team\team2.jpeg" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <!-- <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a> -->
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href="https://www.linkedin.com/in/ajay-rawat-16896b206/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <!-- <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                        <div class="team-title p-4" style="height: 120px;">
                            <h4 class="mb-0">Ajay Rawat</h4>
                            <p class="mb-0">Chief Operating Officer</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img\team\Will-1.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <!-- <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a> -->
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href="https://www.linkedin.com/in/rachel-mendis-b846b5179/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <!-- <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                        <div class="team-title p-4" style="height: 120px;">
                            <h4 class="mb-0">William Mathurai </h4>
                            <p class="mb-0">Chief Revenue Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img\team\Nial-7.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <!-- <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a> -->
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href="https://www.linkedin.com/in/brookerneal/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <!-- <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                        <div class="team-title p-4" style="height: 120px;">
                            <h4 class="mb-0">Neal Brooker</h4>
                            <p class="mb-0">Fractional Sales Director, EMEA</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Service Start -->
    <!-- <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Services</h4>
                    <h1 class="display-4 mb-4">We Provide Best Services</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/blog-1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-users fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Life Insurance</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, eum!</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/blog-2.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-hospital fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Health Insurance</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, eum!</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/blog-3.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-car fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Car Insurance</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, eum!</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/blog-4.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-home fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Home Insurance</a>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, eum!</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Service End -->

    <!-- FAQs Start -->
    <!-- <div class="container-fluid faq-section bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <div class="mb-5">
                                <h4 class="text-primary">Some Important FAQ's</h4>
                                <h1 class="display-4 mb-0">Common Frequently Asked Questions</h1>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q: What happens during Freshers' Week?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body rounded">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Q: What is the transfer application process?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q: Why should I attend community college?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <img src="img/carousel-2.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div> -->
    <!-- FAQs End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">From Blog</h4>
                <h1 class="display-4 mb-4">News And Updates</h1>
                <p class="mb-0">Explore how B2B brands qualify the right leads, break down data silos, and create seamless customer journeys.From lead generation to conversion, get insights that drive smarter decisions. Learn how touchpoints and personalization impact engagement. Fuel growth with content syndication, advertising, and data-driven strategies..
                </p>
            </div>
            <div class="row g-4 justify-content-center">
    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="blog-item">
            <div class="blog-img">
                <img src="img\blog\Blog 11.webp" class="img-fluid rounded-top w-100" alt="">
                <div class="blog-categiry py-2 px-4">
                    <span>Business</span>
                </div>
            </div>
            <div class="blog-content p-4" style="max-width: 400px; margin: 0 auto;">
                <div class="blog-comment d-flex justify-content-between mb-3">
                    
                </div>
                <a href="#" class="h4 d-inline-block mb-3" style="height: 60px; line-height: 60px;">A Guide to B2B Lead Qualification</a>
                <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
        <div class="blog-item">
            <div class="blog-img">
                <img src="img\blog\Blog 12.webp" class="img-fluid rounded-top w-100" alt="">
                <div class="blog-categiry py-2 px-4">
                    <span>Business</span>
                </div>
            </div>
            <div class="blog-content p-4" style="max-width: 400px; margin: 0 auto;">
                <div class="blog-comment d-flex justify-content-between mb-3">
                    
                </div>
                <a href="#" class="h4 d-inline-block mb-3" style="height: 60px; line-height: 60px;">Data silos block B2B decisions</a>
                <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
        <div class="blog-item">
            <div class="blog-img">
                <img src="img\blog\Blog 13.webp" class="img-fluid rounded-top w-100" alt="">
                <div class="blog-categiry py-2 px-4">
                    <span>Business</span>
                </div>
            </div>
            <div class="blog-content p-4" style="max-width: 400px; margin: 0 auto;">
                <div class="blog-comment d-flex justify-content-between mb-3">
                    
                </div>
                <a href="#" class="h4 d-inline-block mb-3" style="height: 60px; line-height: 60px;">B2B Journey & Touchpoints</a>
                <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="blog.php" class="btn btn-primary rounded-pill py-3 px-5">View All Blogs</a>
    </div>
</div>

         </div>
        </div>
    </div>
    <!-- Blog End -->
<div>
    <h1 class="display-4 text-center">Corporate Deck</h1>
</div>

<div class="container py-5">
  <div class="row g-0"> <!-- g-0 removes gutter between columns -->

    <!-- Left container (About Us content) -->
    <div class="col-md-6 d-flex flex-column justify-content-center">
      <div class="px-4"> <!-- Keep some internal padding for content readability -->
        <h1>Unlock Opportunities with Our Media
        Deck - 2025</h1>
        <br></br>
        <p class="text-muted" style="font-size: 1.1rem;">
        We’ve 15+ years of experience in B2B marketing
        </p>
        <button class="btn mt-4"
                    style="color: white; border: 1px solid white; background: #3099D5;"
                    data-bs-toggle="modal" data-bs-target="#applyModal">
                Download Now
            </button>
      </div>
    </div>

    <!-- Right container (Images) -->
    <div class="col-md-6 d-flex flex-column justify-content-between align-items-center">
      
      <!-- Top two images -->
      <!-- <div class="row mb-3">
        <div class="col-6 d-flex justify-content-center">
          <img src="img/pageabout1.png" class="img-fluid rounded shadow-sm" alt="Image 1"
               style="max-width: 185px; height: auto;">
        </div>
        <div class="col-6 d-flex justify-content-center">
          <img src="img/pageabout2.png" class="img-fluid rounded shadow-sm" alt="Image 2"
               style="max-width: 185px; height: auto;">
        </div>
      </div> -->

      <!-- Center bottom image -->
      <div class="d-flex justify-content-center">
        <img src="img/corporatedeck.png" class="img-fluid" alt="Image 3">
      </div>
    </div>

  </div>
</div>

    
    <!-- Testimonial End -->
    <?php 
include 'footer.php'; 
?>

