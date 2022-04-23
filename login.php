<?php $active_page = 'login' ?>

<?php include_once './includes/header.php' ?>

<?php 
    $email = "";
    $password = "";
    if($_POST) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT id, firstname, lastname, email, phone, user_type FROM users WHERE email = '" . $email . "' AND password = '". md5($password) ."'";
        $result = mysqli_query($conn, $query);

        if($result->num_rows != 0) {
            while( $row = mysqli_fetch_assoc($result) ) {
                $_SESSION['user'] = $row;
            }
            header("location: blogs.php");
        } else {
            $error = "Email ID or Password in invalid.";
        }
    }
?>

<div class="max-w-600 m-auto">
    <h1 class="section-title mb-5" style="text-align: center">User Login</h1>
    <div class="card">
        <form class="card-body user-login" method="post">
            <?php if(isset($error)) { ?>
            <div class="alert alert-danger" role="alert"><?= $error ?></div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Email ID</label>
                <input value="<?= $email ?>" class="form-control" name="email" placeholder="Enter Email ID" />
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter Password" />
            </div>
            <div class="text-center">
                <button class="btn btn-primary p-5 pb-2 pt-2" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>

<?php include_once './includes/footer.php' ?>

<script>
$(function() {
    $('.user-login').validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: 'required',
        },
        submitHandler: function(form) {
            form.submit()
        },
    })
})
</script>