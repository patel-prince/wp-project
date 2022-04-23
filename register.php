<?php $active_page = 'register' ?>

<?php include_once './includes/header.php' ?>

<?php 
    $firstname = "";
    $lastname = "";
    $email = "";
    $phone = "";
    $password = "";
    if($_POST) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $query = "SELECT COUNT(*) as count FROM users WHERE email = '" . $email . "'";
        $result = mysqli_query($conn, $query);
        $count = 0;
        while( $row = mysqli_fetch_assoc($result) ) {
            $count = $row['count'];
        }
        if( $count == 0 ) {
            $query = "INSERT INTO users (firstname, lastname, email, phone, password, user_type) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$phone."', '".md5($password)."', 'user')";
            $result = mysqli_query($conn, $query);
            $last_id = mysqli_insert_id($conn);
            header("location: profile.php?id=" . $last_id);
        }  else{
            $error = "Email ID already registered.";
        }

    }
?>

<div class="max-w-600 m-auto">
    <h1 class="section-title mb-5" style="text-align: center">User Registration</h1>
    <div class="card">
        <form class="card-body user-registration" method="post">
            <?php if(isset($error)) { ?>
            <div class="alert alert-danger" role="alert"><?= $error ?></div>
            <?php } ?>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label">Firstname</label>
                        <input value="<?= $firstname ?>" class="form-control" name="firstname"
                            placeholder="Enter Firstname" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label">Lastname</label>
                        <input value="<?= $lastname ?>" class="form-control" name="lastname"
                            placeholder="Enter Lastname" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email ID</label>
                    <input value="<?= $email ?>" class="form-control" name="email" placeholder="Enter Email ID" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input value="<?= $phone ?>" class="form-control" name="phone" placeholder="Enter Phone Number" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Enter Password" />
                </div>
            </div>
            <button class="btn btn-primary p-5 pb-2 pt-2" type="submit">Register</button>
        </form>
    </div>
</div>

<?php include_once './includes/footer.php' ?>

<script>
$(function() {
    $('.user-registration').validate({
        rules: {
            firstname: 'required',
            lastname: 'required',
            email: {
                required: true,
                email: true,
            },
            password: 'required',
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
        },
        submitHandler: function(form) {
            form.submit()
        },
    })
})
</script>