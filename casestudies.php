<?php 
include 'header.php'; 
?>

<div class="container py-3 position-relative">
    <div class="row mb-5 align-items-center">
            <!-- Left Side -->
            <div class="col-12 col-md-6 text-center text-md-start mb-4 mb-md-0">
                <h4 class="text-primary">Case Studies</h4>
                <h1 class="mt-1">
                Read about how we helped other clients</h1>
                <div class="info-box">
                    <p>Tool and strategies modern teams need to help their companies grow.
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                </div>
            </div>

            <!-- Right Side Image -->
            <div class="col-12 col-md-6 text-center text-md-start">
                <img src="img/consyn1.png" alt="Expertise Image" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
</div>
<div class="container my-5">
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-6">
      <div class="card border-0 shadow"
           onmouseover="this.querySelector('img').style.filter='none';"
           onmouseout="this.querySelector('img').style.filter='grayscale(100%)';"
           style="transition: all 0.3s ease;">
        <div class="row g-0 align-items-center">
          <div class="col-md-4">
            <img src="https://picsum.photos/300/200?random=1"
                 class="img-fluid rounded-start"
                 alt="Card image"
                 style="filter: grayscale(100%); height: 100%; width: 100%; object-fit: cover; transition: filter 0.3s ease;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="text-primary mb-2" style="font-size: 0.9rem;">Subheading 1</h6>
              <h4 class="card-title mb-2">Main Heading 1</h4>
              <p class="card-text mb-3" style="color: #6c757d;">This is a clean description for card one using Bootstrap and inline styles.</p>
              <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-6">
      <div class="card border-0 shadow"
           onmouseover="this.querySelector('img').style.filter='none';"
           onmouseout="this.querySelector('img').style.filter='grayscale(100%)';"
           style="transition: all 0.1s ease;">
        <div class="row g-0 align-items-center">
          <div class="col-md-4">
            <img src="https://picsum.photos/300/200?random=2"
                 class="img-fluid rounded-start"
                 alt="Card image"
                 style="filter: grayscale(100%); height: 100%; width: 100%; object-fit: cover; transition: filter 0.1s ease;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="text-primary mb-2" style="font-size: 0.9rem;">Subheading 2</h6>
              <h4 class="card-title mb-2">Main Heading 2</h4>
              <p class="card-text mb-3" style="color: #6c757d;">Another smooth card example. Hover to see image color come alive.</p>
              <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php 
include 'footer.php'; 
?>
