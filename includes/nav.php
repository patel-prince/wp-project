<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <div class="container">
        <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($active_page == 'resume') ? 'active' : '' ?>" aria-current="page"
                    href="resume.php">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($active_page == 'time-table') ? 'active' : '' ?>" aria-current="page"
                    href="time-table.php">Time Table</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($active_page == 'calculator') ? 'active' : '' ?>" aria-current="page"
                    href="calculator.php">Calculator</a>
            </li>
        </ul>
        <?php } ?>
        <ul class="navbar-nav ms-auto">
            <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
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