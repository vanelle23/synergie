<?php
// Include config file
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SYNERGIE GROUP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


      <!-- Topbar Start -->
      <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html" style="display: flex; gap: 10px; ">
                    <img src="./img/logo.png.jpg" alt="logo" style="width: auto; height: 50px;">
                    <h2 class="text-white fw-bold m-0" style="font-size:larger;">SYNERGIE <br>GROUP</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-3"><i class="fa fa-map-marker-alt me-3"></i>Mendong Maeture, Yaounde</small>
                    <small class="ms-3"><i class="fa fa-envelope me-3"></i>synergiegroup@gmail.com</small>
                    <small class="ms-3"><i class="fa fa-phone-alt me-3"></i>(+237) 655 548 312 / 680 468 613</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.facebook.com/profile.php?id=100092233089707"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">SYNERGIE GROUP</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="project.html" class="nav-item nav-link">Projects</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="quote.php" class="dropdown-item active">Quotation</a>
                            </div>
                        </div>
                        <a href="contact.php#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="" class="btn btn-primary rounded-pill py-2 px-3">Get A Quote</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
   <!-- Carousel Start -->
   <div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated slideInRight">Welcome to <strong>SYNERGIE GROUP</strong></p>
                                <h1 class="display-1 text-white mb-4 animated slideInRight">Unlock Your Business Grow</h1>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>SYNERGIE GROUP</strong></p>
                                <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to Grow Your Business</h1>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Quote</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Quote</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-primary">Get A Quote</p>
                    <h1 class="display-5 mb-4">Need Our Expert Help? We're Here!</h1>
                    <p>your solutions starts here with our experts,trust them to guide you.</p>
                    <p class="mb-4">Let our experts lead the way.</p>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="">
                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>
                        <span class="fs-5 fw-medium mx-4">(+237) 655 548 312 / 680 468 613</span>
                    </a>
                </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s"  id="quote">
                        <h2 class="mb-4">Get A Free Quote</h2>
                        <form action="./create_quote.php" method="post">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" id="name" placeholder="Your Name" value="<?php echo isset($name) ? $name : ''; ?>">
                                    <span class="invalid-feedback"><?php echo $name_err;?></span>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" id="email" placeholder="Your Email" value="<?php echo isset($email) ? $email : ''; ?>">
                                    <span class="invalid-feedback"><?php echo $email_err;?></span>
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" id="phone" placeholder="Your phone number" value="<?php echo isset($phone) ? $phone : ''; ?>">
                                    <span class="invalid-feedback"><?php echo $phone_err;?></span>
                                    <label for="phone">Your Number</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select name="service" class="form-select <?php echo (!empty($service_err)) ? 'is-invalid' : ''; ?>" id="service" value="<?php echo isset($service) ? $service : ''; ?>">
                                        <option selected>Marketing Agency</option>
                                        <option value="">Training and Consulting</option>
                                        <option value="">Real estate</option>
                                        <option value="">Human Resource and Management</option>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $service_err;?></span>
                                    <label for="service">Choose A Service</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control <?php echo (!empty($message_err)) ? 'is-invalid' : ''; ?>" placeholder="Leave a message here" id="message" style="height: 130px" value="<?php echo isset($message) ? $message : ''; ?>"></textarea>
                                    <span class="invalid-feedback"><?php echo $message_err;?></span>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" value="Submit" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Start -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Mendong Maeture</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+237) 655 548 312 / 680 468 613</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>synergiegroup@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100092233089707"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>login</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">SYNERGIE GROUP</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-medium text-light" href="https://htmlcodex.com">MONTHE VANELLE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>