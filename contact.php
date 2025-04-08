<?php 
session_start(); // Start session at the very beginning
include 'header.php'; 

// Initialize variables
$name = $email = $phone = $project = $subject = $message = "";
$success_message = ""; 

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $project = $_POST['project'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Set success message in session
    $_SESSION['success_message'] = "Your message has been submitted successfully!";

    // Redirect to avoid form resubmission (Use absolute URL for faster processing)
    echo "<script>window.location.href='contact.php';</script>";
    exit();
}

// Check session for success message
if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']); // Clear session message after displaying
}
?>

<!-- Contact Form Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h4 class="text-primary">Contact Us</h4>
            <h1 class="display-4 mb-4">If you have any comments, please apply now</h1>
        </div>
        <div class="row g-5">
            <div class="col-xl-6">
                <div class="contact-img d-flex justify-content-center">
                    <div class="contact-img-inner">
                        <img src="img/Contact-Image.png" class="img-fluid w-100" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div>
                    <h4 class="text-primary">Send Your Message</h4>
                    <p class="mb-4">Fill in the form below and your details will be stored.</p>

                    <!-- Success Message -->
                    <?php if (!empty($success_message)) : ?>
                        <div class="alert alert-success text-center">
                            <?php echo $success_message; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Form with POST method -->
                    <form method="POST" action="">
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" name="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="phone" placeholder="Phone" required>
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="project" placeholder="Project">
                                    <label for="project">Your Project</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" name="message" placeholder="Leave a message here" style="height: 120px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Save Message</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- map starts -->
                <!-- <h1 class="display-4 mb-4">Insurance Provide you a Better Future</h1>

        <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="ratio ratio-16x9 shadow rounded">
            <iframe
                src="https://www.google.com/maps/d/embed?mid=1u1mZFqHADzGfAJOkFhhZ6gFudVAYVG8&ehbc=2E312F&ll=39.74547001079035%2C-75.54751634605756&z=18"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            </div>
        </div>
            </div> -->
</div>
<!-- Contact Form End -->

<?php 
include 'footer.php'; 
?>
