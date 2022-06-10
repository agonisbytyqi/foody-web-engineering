<?php 
    $query = $conn->query('SELECT * FROM posts');
    $posts = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="mt-2">
    <div class="container">
        <h1>Posts</h1>
        <table class="table">
            <thead>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="index.php?page=add_post" class="btn btn-sm btn-primary">Add Post</a></td>
                </tr>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Front Page Description</th>
                    <th scope="col">More Page Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post) : ?>
                    <tr>
                        <td><?php echo $post['post_id']; ?></td>
                        <td><?php echo $post['title']; ?></td>
                        <td><?php echo $post['description']; ?></td>
                        <td><?php echo $post['more_description']; ?></td>
                        <td><?php echo $post['image']; ?></td>
                        <td><a href="index.php?page=edit_post&id=<?php echo $post['post_id']; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="index.php?page=delete_post&id=<?php echo $post['post_id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>