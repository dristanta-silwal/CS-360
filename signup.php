<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<body>

    <!-- Include Header -->
    <?php include 'include/header.php'; ?>

    <!-- Sign Up Section -->
    <section class="signup-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="signup-card">
                        <h3 class="text-center mb-4">Create Your Account</h3>
                        
                        <!-- Sign Up Form -->
                        <form action="process_signup.php" method="POST">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                            </div>
                            <button type="submit" class="btn btn-custom btn-block">Sign Up</button>
                        </form>

                        <!-- Social Sign Up -->
                        <div class="text-center mt-4">
                            <p>Or sign up with</p>
                            <div class="social-signup">
                                <a href="#" class="fab fa-google" title="Sign up with Google"></a>
                                <a href="#" class="fab fa-facebook" title="Sign up with Facebook"></a>
                                <a href="#" class="fab fa-linkedin" title="Sign up with LinkedIn"></a>
                            </div>
                        </div>

                        <!-- Already have an account -->
                        <div class="text-center mt-4">
                            <p>Already have an account? <a href="signin.php">Sign in here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include 'include/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
