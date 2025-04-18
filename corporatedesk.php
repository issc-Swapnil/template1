<?php 
include 'header.php'; 
?>
<div class="container py-5">
  <div class="row g-0"> <!-- g-0 removes gutter between columns -->

    <!-- Left container (About Us content) -->
    <div class="col-md-6 d-flex flex-column justify-content-center">
      <div class="px-4"> <!-- Keep some internal padding for content readability -->
        <h1 class="display-4 mb-4">Unlock Opportunities with Our Media
        Deck - 2025</h1>
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
      <!-- Center bottom image -->
      <div class="d-flex justify-content-center">
        <img src="img/corporatedeck.png" class="img-fluid" alt="Image 3">
      </div>
    </div>

  </div>
</div>



<?php 
include 'footer.php'; 
?>