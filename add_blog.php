<?php $active_page = 'add_blog' ?>

<?php include_once './includes/header.php' ?>
<?php 
     if(isset($_SESSION['user']) && !empty($_SESSION['user']) && $_SESSION['user']['user_type'] == 'user') { 
            header("location: blogs.php");
    }
    if($_POST) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        $query = "INSERT INTO blogs (title, description, user_id) VALUES ('".$title."', '".$description."', '".$_SESSION['user']['id']."')";
        $result = mysqli_query($conn, $query);
        header("location: blogs.php");
    } 
?>

<div class="container">
    <h1 class="section-title mt-5" style="text-align: center">Create Blog</h1>
    <div class="card mt-5">
        <div class="card-body p-5">
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Blog Title</label>
                    <input class="form-control" name="title" placeholder="Enter Blog Title" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
                </div>
                <button class="btn btn-primary p-5 pb-2 pt-2" type="submit">Create Blog</button>
            </form>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php' ?>