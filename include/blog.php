<?php
    // Hashnode GraphQL API URL
    $url = 'https://gql.hashnode.com/';

    // GraphQL query to fetch posts with cover images
    $query = '{
        publication(host: "dristantasilwal.hashnode.dev") {
            title
            posts(first: 10) {
                edges {
                    node {
                        title
                        brief
                        slug
                    }
                }
            }
        }
    }';

    // Initialize cURL
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(['query' => $query])); // Set the GraphQL query
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set content type to JSON
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the response as a string

    // Execute the cURL request
    $response = curl_exec($curl);

    // Check for cURL errors
    if ($response === false) {
        $error = curl_error($curl);
        echo "cURL error: " . $error;
        exit;
    }

    // Close the cURL connection
    curl_close($curl);

    // Decode the JSON response
    $result = json_decode($response, true);

    // Check if data is available in the response
    if (isset($result['data']['publication']['posts']['edges'])) {
        $posts = $result['data']['publication']['posts']['edges'];
    } else {
        $posts = [];
        echo "No posts found or an error occurred.";
    }

    // Helper function to limit words in a string
    function limitWords($text, $limit) {
        $words = explode(' ', $text);
        if (count($words) > $limit) {
            return implode(' ', array_slice($words, 0, $limit)) . '...';
        }
        return $text;
    }
?>

<!-- Blog posts section -->
<h1 class="text-center">My Blogs</h1>
<script async src="https://cse.google.com/cse.js?cx=749bafa87e1634a79">
</script>
<div class="gcse-search"></div>
<hr style="margin-bottom: 50px;">    
<div class="card-deck">
    <?php foreach ($posts as $postEdge): 
        $post = $postEdge['node']; ?>
        <div class="card"><div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($post['title']); ?></h5>
                <p class="card-text"><?= htmlspecialchars(limitWords($post['brief'], 20)); ?></p>
            </div>
            <div class="card-footer">
                <a href="https://dristantasilwal.hashnode.dev/<?= htmlspecialchars($post['slug']); ?>" class="btn btn-primary" target="_blank">Read More</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
