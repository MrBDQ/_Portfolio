<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap_files/css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/all.min.css">
    <link rel="stylesheet" href="icons/fontawesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Portfolio | Home</title>
</head>
<body>
    <header class="sticky-top" style="background-color:#28282B;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="mb-1">
                        <a class="navbar-brand text-light fs-3 fw-bold" href="https://www.facebook.com/profile.php?id=100086301079202&mibextid=ZbWKwL"><span class="fs-3">B</span><span class="fs-2">R</span><span class="fs-1">Y</span><span class="fs-2">A</span><span class="fs-3">N</span></a>    
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <nav class="navbar navbar-expand-lg navbar-secondary  px-2" id="bar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item ">
                                    <a class="nav-link text-light active" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="projects.php">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="me-2">
                            <i class="fa-brands fa-linkedin fa-lg text-light"></i>
                        </div>
                        <div class="me-2">
                            <i class="fa-brands fa-instagram fa-lg text-light"></i>
                        </div>
                        <div class="me-2">
                            <i class="fa-brands fa-github fa-lg text-light"></i>
                        </div>
                        <div class="me-2">
                            <i class="fa-brands fa-twitter fa-lg text-light"></i>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div>
        <?php include 'home.php'; ?>
    </div>
    <div class="container-fluid" style="height: 100px; background-color: #28282B;"></div>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-4 text-light text-center bg-dark">
                <i class="fa-brands fa-uikit fa-3x mt-5 mb-4"></i>
                <h4>UI Design</h4>
                <p class="mb-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero,
                commodi?
                </p>
            </div>
            <div class="col-md-4 text-center" style="background-color: #f7c08a;">
                <i class="fa-solid fa-code fa-3x mt-5 mb-4"></i>
                <h4>Backend Development</h4>
                <p class="mb-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero,
                commodi?
                </p>
            </div>
            <div class="col-md-4 text-light text-center bg-dark">
            <i class="fa-solid fa-users-viewfinder fa-3x mt-5 mb-4"></i>
                <h4>Testing</h4>
                <p class="mb-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero,
                commodi?
                </p>
            </div>
        </div>
    </div>
    <div>
        <?php include 'footer.php';?>
    </div>
</body>
</html>

