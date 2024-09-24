<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<body>

    <?php include 'include/header.php'; ?>

    <section class="contact-section">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2>Contact Dristanta Silwal</h2>
                    <p class="lead">Feel free to reach out to me via email or connect with me on social media!</p>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-8">
                    <div class="contact-card p-4">
                        <h4 class="text-center mb-4">Get in Touch</h4>

                        <!-- Contact Information -->
                        <div class="contact-info text-center">
                            <p>Email: <a href="mailto:dristantasilwal003@gmail.com">dristantasilwal003@gmail.com</a></p>
                            <p>Phone: +1 (512) 956-XXXX</p>
                            <p>Location: Moscow, ID</p>
                        </div>

                        <!-- Social Media Links -->
                        <div class="social-icons text-center mt-4">
                            <a href="https://www.linkedin.com/in/dristantasilwal/" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://github.com/dristanta-silwal" target="_blank"><i
                                    class="fab fa-github"></i></a>
                            <a href="https://twitter.com/dristanta" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <form action="submit_form.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4"
                                placeholder="Write your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>