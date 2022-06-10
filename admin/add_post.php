<?php

    require '../config/dbconfig.php';

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $more_description = $_POST['more_description'];
        $image_file = time() . $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];

        move_uploaded_file($temp, "uploads/".$image_file);

        $sql = "INSERT INTO posts(title,description, more_description, image) VALUE (:title,:description, :more_description, :image)";
        $query = $conn->prepare($sql);

        $query->bindParam('title',$title);
        $query->bindParam('description',$description);
        $query->bindParam('more_description',$more_description);
        $query->bindParam('image',$image_file);

        $query->execute();

        header("Location: index.php?page=posts");
    }

?>
<div class="mt-2">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add post
            </div>
            <form method="post" class="p-1" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" required maxlength="30">
                </div>
                <div class="form-group">
                    <label for="description">Front Page Description:</label>
                    <input type="text" name="description" id="description" class="form-control" required maxlength="30">
                </div>
                <div class="form-group">
                    <label for="description">More Page Description:</label>
                    <input type="text" name="more_description" id="more_description" class="form-control" required maxlength="1500">
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png">
                </div>
                <div class="mt-2">
                    <input type="submit" name="submit" value="Add Post" class="btn btn-primary mt-1">
                    <a href="index.php?page=posts" class="btn btn-primary mt-1">Go Back</a>
                
                </div>
            </form>
        </div>
    </div>
</div>