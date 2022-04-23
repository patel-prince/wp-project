<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <div class="container">
        <ul class="navbar-nav ms-auto">

            <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
            <?php if($_SESSION['user']['user_type'] == 'writer') { ?>
            <li class="nav-item">
                <a class="nav-link <?= ($active_page == 'add_blog') ? 'active' : '' ?>" aria-current="page"
                    href="add_blog.php">Create Blog</a>
            </li>
            <?php } ?>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link <?= ($active_page == 'login') ? 'active' : '' ?>" aria-current="page"
                    href="./">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($active_page == 'register') ? 'active' : '' ?>" aria-current="page"
                    href="register.php">Register</a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>