<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<body>

    <!-- Include Header -->
    <?php include 'include/header.php'; ?>


    <!-- Mosaic-style Gallery -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Mosaic Image Gallery</h2>
        <div class="mosaic-gallery">
            <img src="images/astronaut.jpeg" alt="Astronaut" class="img-1">
            <img src="images/background_linkedin.jpg" alt="LinkedIn Background" class="img-2">
            <img src="images/cosmos-db.jpeg" alt="Cosmos DB" class="img-3">
            <img src="images/dristanta_ipo.jpg" alt="Dristanta IPO" class="img-4">
            <img src="images/elem_AI_hels.png" alt="AI in Helsinki" class="img-5">
            <img src="images/logo_letters.jpg" alt="Logo Letters" class="img-6">
            <img src="images/dristanta.jpg" alt="Dristanta Silwal" class="img-7">
        </div>
    </div>

    <!-- Modal for Image Preview -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid">
                    <div id="modalCaption" class="modal-caption"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include 'include/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>