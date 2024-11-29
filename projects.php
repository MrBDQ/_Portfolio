<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Bootstrap_files/css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/all.min.css">
    <link rel="stylesheet" href="icons/fontawesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Portfolio | Projects</title>
    <style>
        /* Basic Card Style */
        .card {
           
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(247, 192, 138, 0.7);
            transition: box-shadow 0.3s ease;
            overflow: hidden; /* Hide overflowing content */
            position: relative;
        }

        /* Image at the top */
        .card .images {
            width: 100%;
            height: 150px;
            object-fit: cover;
            transition: opacity 0.5s ease; /* Fade effect for image */
        }

        /* Text inside the card */
        .card-text {
            position: absolute;
            left: -100%; /* Initially position the text off-screen */
            top: 50%;
            transform: translateY(-90%); /* Center the text vertically */
            transition: transform 0.5s ease, left 0.5s ease; /* Transition for sliding effect */
            padding: 10px;
            border-radius: 5px;
            width: calc(100% - 40px); /* Adjust text width */
        }

        /* Hover effect - hide the image and slide in text */
        .card:hover .images {
            opacity: 0; /* Fade out the image */
        }

        .card:hover .card-text {
            left: 20px; /* Slide the text in from the left */
            transform: translateY(-90%);
        }
    </style>
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
                <nav class="navbar navbar-expand-lg navbar-secondary px-2" id="bar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item ">
                                    <a class="nav-link text-light" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light active" href="projects.php">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="services.php">Services</a>
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
    <div class="container-fluid bg-dark">
        <div class="row">
        <label for="" class=" text-center mt-5 text-light fw-lighter">Browse my Recent</label>
        <label for="" class=" text-center fs-1 fw-bolder main-color mb-5">Project</label>
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card bg-dark text-light">
                                <img src="img/LOGIN.png" alt="Image" style="height: auto; width: auto;" class="images">
                                <div class="card-text mb-1">
                                     E-voting is an electronic method of voting that allows individuals to cast votes via digital platforms, 
                                     enhancing convenience, accessibility, and security in elections while reducing costs and administrative effort.
                                     <br>
                                     <br>
                                     <label for="" class="text-center main-color fw-bold fs-5">VB.NET</label>
                                </div>
                                <div class="card-title p-3">
                                    <label for="" class="fw-bold">E-VOTING MANAGEMENT SYSTEM</label>
                                </div>
                                <div class="mb-4 text-center">
                                    <button type="submit" class="btn fw-bold py-2 px-4 rounded-5 border border-secondary text-light me-3">Live Demo</button>
                                    <button type="submit" class="btn fw-bold py-2 px-4 rounded-5 border border-secondary text-light me-3">GitHub</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card bg-dark text-light">
                                <img src="img/Screenshot 2024-11-09 205355.png" alt="Image" style="height: auto; width: auto;" class="images">
                                <div class="card-text">
                                E-voting is an electronic method of voting that allows individuals to cast votes via digital platforms, enhancing convenience, 
                                accessibility, and security in elections while reducing costs and administrative effort.
                                <br>
                                <br>
                                <label for="" class="text-center main-color fw-bold fs-5">HTML, CSS</label>
                                </div>
                                <div class="card-title p-3">
                                    <label for="" class="fw-bold">BRYFAYE CYCLES WEBPAGE</label>
                                </div>
                                <div class="mb-4 text-center">
                                    <button type="submit" class="btn fw-bold py-2 px-4 rounded-5 border border-secondary text-light me-3" data-toggle="modal" data-target="#videoModal">Live Demo</button>
                                    <button type="submit" class="btn fw-bold py-2 px-4 rounded-5 border border-secondary text-light me-3">GitHub</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card bg-dark text-light">
                                <img src="img/vote.webp" alt="Image" style="height: auto; width: auto;" class="images">
                                <div class="card-text">
                                E-voting is an electronic method of voting that allows individuals to cast votes via digital platforms, enhancing convenience, accessibility, and security in elections while reducing costs and administrative effort.
                                </div>
                                <div class="card-title p-3">
                                    <label for="" class="fw-bold">E-VOTING MANAGEMENT SYSTEM</label>
                                </div>
                                <div class="mb-4 text-center">
                                    <button type="button" class="btn fw-bold py-2 px-4 rounded-5 border border-secondary text-light me-3">Live Demo</button>
                                    <button type="submit" class="btn fw-bold py-2 px-4 rounded-5 border border-secondary text-light me-3">GitHub</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-1"></div>
        </div>
        <hr class="text-light mt-5">
        <div class="mt-5 text-center">
            <label for="" class=" text-center mt-5 text-light fw-lighter">My Recent Client</label>
        </div>
        <div class="text-center ">
            <label for="" class="fs-1 fw-bolder main-color mb-5">Feedback</label>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 mb-5">
                <div class="card bg-light p-4 rounded-5" style="box-shadow: 0 4px 12px rgba(247, 192, 138, 0.5);">
                    <div class="row">
                        <div class="col-md-2">
                            
                        </div>
                        <div class="col-md-10">
                            <p class="text-dark fw-light fs-5">Covering fundamental IT support skills, this certification includes troubleshooting, system administration, networking, security, and customer service. Ideal for those entering the IT support field.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-5">
                <div class="card bg-light p-4 rounded-5" style="box-shadow: 0 4px 12px rgba(247, 192, 138, 0.5);">
                    <div class="row">
                        <div class="col-md-2">
                           
                        </div>
                        <div class="col-md-10">
                            <p class="text-dark fw-light fs-5">Covering fundamental IT support skills, this certification includes troubleshooting, system administration, networking, security, and customer service. Ideal for those entering the IT support field.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 mb-5">
                <div class="card bg-light p-4 rounded-5" style="box-shadow: 0 4px 12px rgba(247, 192, 138, 0.5);">
                    <div class="row">
                        <div class="col-md-2">
                            
                        </div>
                        <div class="col-md-10">
                            <p class="text-dark fw-light fs-5">Covering fundamental IT support skills, this certification includes troubleshooting, system administration, networking, security, and customer service. Ideal for those entering the IT support field.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-5">
                <div class="card bg-light p-4 rounded-5" style="box-shadow: 0 4px 12px rgba(247, 192, 138, 0.5);">
                    <div class="row">
                        <div class="col-md-2">
                           
                        </div>
                        <div class="col-md-10">
                            <p class="text-dark fw-light fs-5">Covering fundamental IT support skills, this certification includes troubleshooting, system administration, networking, security, and customer service. Ideal for those entering the IT support field.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div>
        <?php include 'footer.php'; ?>
    </div>
     <!-- Modal Structure -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title fw-bold" id="videoModalLabel">BryFaye Cycles Live Demo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <!-- You can replace this with your own video URL -->
            <iframe width="100%" height="400" src="VID/bike.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>