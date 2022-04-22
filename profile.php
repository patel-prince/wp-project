<?php $active_page = 'profile' ?>

<?php include_once './includes/header.php' ?>

<?php 
    if(isset($_SESSION) && isset($_SESSION['user'])) {
        $query = "SELECT * FROM users WHERE id = " . $_SESSION['user']['id'];
        $result = mysqli_query($conn, $query);
        $user = null;
        while( $row = mysqli_fetch_assoc($result) ) {
            $user = $row;
        }
    }
?>

<div class="container pt-5 pb-5">
    <div class="card">
        <div class="card-body p-5">
            <?php if(!empty($user)) { ?>
            <div class="resume-header max-w-500 m-auto">
                <table class="table table-bordered">
                    <tr>
                        <th>Firstname</th>
                        <td><?= $user['firstname'] ?></td>
                    </tr>
                    <tr>
                        <th>Lastname</th>
                        <td><?= $user['lastname'] ?></td>
                    </tr>
                    <tr>
                        <th>Email ID</th>
                        <td><?= $user['email'] ?></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><?= $user['phone'] ?></td>
                    </tr>
                </table>
            </div>
            <?php } else { ?>
            <h1 class="text-center mb-5">No Record Found</h1>
            <?php } ?>
            <div class="text-center">
                <a class="btn btn-primary" href="register.php">Go Back To Registration Page</a>
            </div>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php' ?>