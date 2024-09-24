<!-- Portfolio Projects Section -->
<section class="container my-5">
    <h2 class="text-center mb-5">My Projects</h2>

    <div class="row">
        <?php
        // Load the JSON file
        $json_data = file_get_contents(__DIR__ . '/projects.json');
        
        // Decode the JSON into an associative array
        $projects = json_decode($json_data, true);

        // Loop through the projects and generate the HTML dynamically
        foreach ($projects as $project) {
            echo '
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">' . $project['title'] . '</h4>
                        <p class="card-text">' . $project['description'] . '</p>
                        <a href="' . $project['link'] . '" target="_blank" class="btn">' . $project['btn_text'] . '</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</section>
