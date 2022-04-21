<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
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
        </div>
    </div>
</nav>