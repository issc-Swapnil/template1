<?php 
include 'header.php'; 
?>

<div class="container py-5">
  <h2 class="text-center mb-5 text-primary fw-bold">Upcoming Events</h2>

  <div class="row">
    <!-- Card 1 -->
    <div class="col-md-6">
      <div class="" style="box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <img src="https://i.imgur.com/4n0lFO9.jpg"
             alt="Event"
             class="card-img-top"
             onmouseover="this.style.filter='grayscale(0%)';"
             onmouseout="this.style.filter='grayscale(100%)';"
             style="height: 150px; object-fit: cover; filter: grayscale(100%); transition: filter 0.3s ease; transform: none !important;">
        <div class="card-body">
          <h6 class="text-primary mb-1" style="font-size: 0.9rem;">Workshop</h6>
          <h5 class="card-title mb-2 fw-bold">Creative Coding Bootcamp</h5>
          <p class="card-text text-muted" style="font-size: 0.9rem;">Join us for a hands-on session to boost your frontend skills.</p>
          <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-6">
      <div class="" style="box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <img src="https://i.imgur.com/2nCt3Sb.jpg"
             alt="Event"
             class="card-img-top"
             onmouseover="this.style.filter='grayscale(0%)';"
             onmouseout="this.style.filter='grayscale(100%)';"
             style="height: 150px; object-fit: cover; filter: grayscale(100%); transition: filter 0.3s ease; transform: none !important;">
        <div class="card-body">
          <h6 class="text-primary mb-1" style="font-size: 0.9rem;">Webinar</h6>
          <h5 class="card-title mb-2 fw-bold">UI/UX Trends 2025</h5>
          <p class="card-text text-muted" style="font-size: 0.9rem;">Discover upcoming design trends and best practices for modern interfaces.</p>
          <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3">Learn More</a>
        </div>
      </div>
    </div>

  </div>
</div>

<?php 
include 'footer.php'; 
?>