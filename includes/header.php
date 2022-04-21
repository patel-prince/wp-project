<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <div class="page-wrapper">
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
                            <a class="nav-link <?= ($active_page == 'time-table') ? 'active' : '' ?>"
                                aria-current="page" href="time-table.php">Time Table</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($active_page == 'calculator') ? 'active' : '' ?>"
                                aria-current="page" href="calculator.php">Calculator</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>