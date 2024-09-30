<?php
require 'vendor/autoload.php';

use SendGrid\Mail\Mail;

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message_text = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message_text)) {

        $sendgrid_api_key = getenv('SENDGRID_API_KEY');
        
        // Create a new SendGrid mail object
        $email_to_send = new Mail();
        $email_to_send->setFrom("your-email@example.com", "Your Name");
        $email_to_send->setSubject("New Contact Message from " . $name);
        $email_to_send->addTo("dristantasilwal003@gmail.com", "Dristanta Silwal");
        
        // Email body in HTML and plain text
        $email_content = "Name: $name<br>Email: $email<br><br>Message:<br>$message_text";
        $email_to_send->addContent("text/plain", strip_tags($email_content));
        $email_to_send->addContent("text/html", $email_content);

        $sendgrid = new \SendGrid($sendgrid_api_key);

        try {
            $response = $sendgrid->send($email_to_send);

            if ($response->statusCode() == 202) {
                $message = "Message sent successfully!";

                $confirmation_email = new Mail();
                $confirmation_email->setFrom("your-email@example.com", "Dristanta Silwal");
                $confirmation_email->setSubject("Thank you for contacting Dristanta Silwal");
                $confirmation_email->addTo($email, $name);
                $confirmation_email->addContent("text/html", "Hi $name,<br><br>Thank you for your message. We'll get back to you soon.");
                $sendgrid->send($confirmation_email);

                // Log submission (optional)
                $logfile = 'form_submissions.log';
                $log_message = "Name: $name\nEmail: $email\nMessage: $message_text\n\n";
                file_put_contents($logfile, $log_message, FILE_APPEND);

                // Clear form fields after successful submission
                $_POST['name'] = '';
                $_POST['email'] = '';
                $_POST['message'] = '';

            } else {
                $message = "Failed to send email. Please try again.";
            }

        } catch (Exception $e) {
            // Display an error message if email sending fails
            $message = "Caught exception: " . $e->getMessage();
        }

    } else {
        $message = "All fields are required!";
    }
}
?>

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
                            <a href="https://www.linkedin.com/in/dristantasilwal/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="https://github.com/dristanta-silwal" target="_blank"><i class="fab fa-github"></i></a>
                            <a href="https://twitter.com/dristanta" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">

                    <!-- Display success or error message -->
                    <?php if (!empty($message)): ?>
                        <div class="alert alert-info text-center">
                            <?= htmlspecialchars($message); ?>
                        </div>
                    <?php endif; ?>

                    <form action="contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                                value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email"
                                value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4"
                                placeholder="Write your message" required><?= isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
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
