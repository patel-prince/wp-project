<?php $active_page = 'users' ?>

<?php include_once './includes/header.php' ?>
<?php 
if(isset($_SESSION['user']) && !empty($_SESSION['user']) && $_SESSION['user']['user_type'] == 'user') { 
    header("location: blogs.php");
}

    if($_POST){
        if($_POST['delete_id']) { 
            $user_id = $_POST['delete_id'];
            $query = "delete from users where id = " . $user_id;
            $result = mysqli_query($conn, $query);
            header("location: users.php");
        }
    }
    $query = "SELECT id, firstname, lastname, email, phone, user_type FROM users WHERE user_type != 'admin' order by id desc";
    $result = mysqli_query($conn, $query);
    $users = [];

    if($result->num_rows != 0) {
        while( $row = mysqli_fetch_assoc($result) ) {
            $users[] = $row;
        }
    }
?>

<div class="container">
    <h1 class="section-title mt-5" style="text-align: center">Users</h1>
    <div class="card mb-5 mt-5">
        <div class="card-body p-5">
            <div class="text-end mb-4">
                <a href="add_user.php" class="btn btn-primary ms-auto">Create User</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                <?php foreach($users as $user) { ?>
                <tr>
                    <th><?= $user['id'] ?></th>
                    <th><?= $user['firstname'] ?> <?= $user['lastname'] ?></th>
                    <th><?= $user['email'] ?></th>
                    <th><?= $user['phone'] ?></th>
                    <th>
                        <form method="post">
                            <button class="btn btn-danger" name="delete_id" value="<?= $user['id'] ?>">Delete</button>
                        </form>
                    </th>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php' ?>