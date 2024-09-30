<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<body>

    <!-- Include Header -->
    <?php include 'include/header.php'; ?>

    <!-- Sign In Section -->
    <section class="signin-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="signin-card">
                        <h3 class="text-center mb-4">Sign In to Your Account</h3>
                        
                        <!-- Sign In Form -->
                        <form action="process_signin.php" method="POST">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-custom btn-block">Sign In</button>
                        </form>

                        <!-- Forgot Password -->
                        <div class="text-center mt-3">
                            <a href="forgot_password.php">Forgot your password?</a>
                        </div>

                        <!-- Social Sign In -->
                        <div class="text-center mt-4">
                            <p>Or sign in with</p>
                            <div class="social-signin">
                                <a href="#" class="fab fa-google" title="Sign in with Google"></a>
                                <a href="#" class="fab fa-facebook" title="Sign in with Facebook"></a>
                                <a href="#" class="fab fa-linkedin" title="Sign in with LinkedIn"></a>
                            </div>
                        </div>

                        <!-- Create Account -->
                        <div class="text-center mt-4">
                            <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
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