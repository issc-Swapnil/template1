<?php 
include 'header.php'; 
?>
<div class="container py-5">
  <div class="lifeatrdigs bg-light about pb-5 pt-5">
    <div class="container pb-5">
      <div class="row g-5 align-items-center">
        <!-- Left Side - Text Content -->
        <div class="col-lg-6">
          <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
            <div>
              <h1 class="display-5 mb-4">Join Our Team Ignite Your Career</h1>
              <p>
                There’s more to life than a paycheck, and that’s why we prioritize family over everything else.
                We recognize that the quest for a meaningful and rewarding career can feel daunting at times.
                Therefore, we endeavor to streamline the process and provide you with an exceptional work environment.
              </p>
              <p>
                Begin your journey with us today by exploring the range of exciting opportunities we have for you.
                Let’s unlock the door to a fulfilling career together, where your passion aligns with your purpose.
              </p>
            </div>
            <div class="mt-3">
              <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Know More</a>
            </div>
          </div>
        </div>

        <!-- Right Side - Award Card + Image -->
        <div class="col-lg-6 d-flex flex-column align-items-center">
          <!-- Award Card -->
          <div class="card rounded text-center p-4 mb-3 w-100" style="background-color: white; border: 1px solid #ddd;">
            <div class="d-flex flex-column align-items-center">
              <i class="bi bi-award-fill" style="font-size: 2rem; color: #ffc107;"></i>
              <h5 class="mt-2 mb-1">We have <strong>25+</strong> award-winning projects</h5>
            </div>
          </div>

          <!-- Image -->
          <img
            src="img/careerpageimg.webp"
            class="img-fluid rounded shadow"
            alt="Life at RDIGS"
            style="max-width: 100%; height: auto; max-height: 440px; object-fit: cover;"
          />
        </div>
      </div>
    </div>
  </div>




 <!-- job cards starts -->

    <div class="text-center mx-auto pb-5 mt-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
        <h4 class="text-primary">Explore Services</h4>
        <h1 class="display-4 mb-4">We’re Always Looking For Talented People</h1>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">

     <!-- Repeatable Card -->
        <div class="col">
        <div class="card text-center"
            style="border: 1px solid rgba(48, 153, 213, 0.3); border-radius: 15px;
                    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); 
                    height: 300px; transition: all 0.2s ease;"
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 25px rgba(0, 0, 0, 0.2)'; this.style.height='300px';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.1)'; this.style.height='300px';">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <img src="https://via.placeholder.com/60" class="mb-4" alt="Logo">
            <h5 class="card-title">Graphics Designer</h5>
            <button class="btn mt-4"
                    style="color: #3099D5; border: 1px solid #3099D5; background: transparent;"
                    data-bs-toggle="modal" data-bs-target="#applyModal">
                Apply Now
            </button>
            </div>
        </div>
        </div>

        <!-- Copy above div.col three more times for 4 cards -->
        <div class="col">
        <div class="card text-center" style="border: 1px solid rgba(48, 153, 213, 0.3); border-radius: 15px;
                    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); 
                    height: 300px; transition: all 0.2s ease;"
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 25px rgba(0, 0, 0, 0.2)'; this.style.height='300px';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.1)'; this.style.height='300px';">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <img src="https://via.placeholder.com/60" class="mb-4" alt="Logo">
            <h5 class="card-title">Frontend Developer</h5>
            <button class="btn mt-4" style="color: #3099D5; border: 1px solid #3099D5; background: transparent;" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card text-center" style="border: 1px solid rgba(48, 153, 213, 0.3); border-radius: 15px;
                    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); 
                    height: 300px; transition: all 0.2s ease;"
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 25px rgba(0, 0, 0, 0.2)'; this.style.height='300px';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.1)'; this.style.height='300px';">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <img src="https://via.placeholder.com/60" class="mb-4" alt="Logo">
            <h5 class="card-title">Lead Generation Executive</h5>
            <button class="btn mt-4" style="color: #3099D5; border: 1px solid #3099D5; background: transparent;" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card text-center" style="border: 1px solid rgba(48, 153, 213, 0.3); border-radius: 15px;
                    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); 
                    height: 300px; transition: all 0.2s ease;"
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 25px rgba(0, 0, 0, 0.2)'; this.style.height='300px';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 6px 20px rgba(0, 0, 0, 0.1)'; this.style.height='300px';">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <img src="https://via.placeholder.com/60" class="mb-4" alt="Logo">
            <h5 class="card-title">Demand Generation Executive</h5>
            <button class="btn mt-4" style="color: #3099D5; border: 1px solid #3099D5; background: transparent;" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Modal Start -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
    <div class="modal-content" style="border-radius: 12px; padding: 20px;">
      <div class="modal-header">
        <h5 class="modal-title" id="applyModalLabel">Apply for Position</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Enter email">
          </div>
          <div class="mb-3">
            <label class="form-label">Contact Number</label>
            <input type="tel" class="form-control" placeholder="Enter phone number">
          </div>
          <div class="mb-3">
            <label class="form-label">Upload Resume</label>
            <input type="file" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit Application</button>
        </form>
      </div>
    </div>
  </div>
</div>


</div>


<?php 
include 'footer.php'; 
?>
