<?php $active_page = 'blogs' ?>

<?php include_once './includes/header.php' ?>
<?php 
    if($_POST){
        $blog_id = $_POST['blog_id'];
        $comment = $_POST['comment'];
        
        $query = "INSERT INTO comments (blog_id, comment, user_id) VALUES ('".$blog_id."', '".$comment."', '".$_SESSION['user']['id']."')";
        $result = mysqli_query($conn, $query);
        header("location: blogs.php");
    }
    $query = "SELECT b.id, b.title, b.description, c.comment FROM blogs as b left join comments as c on b.id = c.blog_id order by id desc";
    $result = mysqli_query($conn, $query);
    $blogs = [];

    if($result->num_rows != 0) {
        while( $row = mysqli_fetch_assoc($result) ) {
            $data = [
                "id" => $row['id'],
                "title" => $row['title'],
                "description" => $row['description'],
                "comments" => []
            ];
            if(!empty($row['comment'])) {
                $data["comments"] = [$row['comment']];
            }
            if(!isset($blogs[$row['id']])) {
                $blogs[$row['id']] = $data;
            }else{
                $blogs[$row['id']]['comments'][] = $row['comment'];
            }
        }
    }
?>

<div class="container">
    <h1 class="section-title mt-5" style="text-align: center">Blogs</h1>
    <?php if(count($blogs) > 0) { ?>
    <?php foreach($blogs as $blog) { ?>
    <div class="card mt-5">
        <div class="card-body p-5">
            <h1><?= $blog['title'] ?></h1>
            <p><?= $blog['description'] ?></p>
            <hr>
            <?php if(count($blog['comments']) > 0) { ?>
            <h6>Comments:</h6>
            <?php foreach($blog['comments'] as $comment) { ?>
            <p><?= $comment ?></p>
            <?php } ?>
            <?php } ?>
            <form method="post">
                <div class="form-group row">
                    <div class="col">
                        <textarea name="comment" class="form-control" placeholder="Write Comment"></textarea>
                    </div>
                    <div class="col">
                        <button name="blog_id" value="<?= $blog['id'] ?>" class="btn btn-primary p-5 pb-2 pt-2"
                            type="submit">Comment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php } ?>
    <?php } else { ?>
    <div class="text-center">
        <h1>No Record Found</h1>
    </div>
    <?php } ?>
</div>

<?php include_once './includes/footer.php' ?>