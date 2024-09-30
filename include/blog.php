<?php
    // Hashnode API URL
    $url = 'https://api.hashnode.com/';

    // Define your query to get blog posts
    $query = '{
        user(username: "Dristanta") {
            publication {
                posts {
                    title
                    brief
                    slug
                    coverImage
                    dateAdded
                }
            }
        }
    }';

    // Make the GraphQL request using cURL
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(['query' => $query]));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    // Parse the JSON response
    $result = json_decode($response, true);

    // Check if the request was successful
    if (isset($result['data']['user']['publication']['posts'])) {
        $posts = $result['data']['user']['publication']['posts'];
    } else {
        $posts = [];
    }
?>

<div class="container">
    <h1>My Blog Posts</h1>
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img class="card-img-top" src="<?= $post['coverImage']; ?>" alt="Blog cover image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post['title']; ?></h5>
                        <p class="card-text"><?= $post['brief']; ?></p>
                        <a href="https://dristantasilwal.hashnode.dev/<?= $post['slug']; ?>" class="btn btn-primary" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
