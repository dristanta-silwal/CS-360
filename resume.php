<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<body>

    <!-- Header Section -->
    <?php include 'include/header.php'; ?>

    <!-- Main Section -->
    <main class="container my-5">
        <section class="text-center mb-5">
            <h1>My Resume</h1>
            <p class="text-muted">Discover my professional journey, skills, and achievements.</p>
        </section>
        <section class="pdf-container text-center mb-4">
            <embed src="assets/resume_IT.pdf" 
                   type="application/pdf" 
                   width="100%" 
                   height="600px" 
                   style="border: 1px solid #ddd; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        </section>
        <section class="text-center mt-3">
            <a href="assets/Dristanta_Silwal_Resume.pdf" download class="btn btn-primary">
                <i class="fas fa-download"></i> Download My Resume
            </a>
        </section>
    </main>

    <?php include 'include/footer.php'; ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
