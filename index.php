<?php require("/xampp/htdocs/sell_tech/hh/co.php");
include("/xampp/htdocs/sell_tech/que_con.php");
include('/xampp/htdocs/sell_tech/que_con.php')
?>
<?php include('/xampp/htdocs/sell_tech/Ajax-PHP-MySQL-Newsletter-master/inc/Database.class.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MXP689P');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <title>Sell-Tech India </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="E-commerce , website , Business website , education website , Design website , develop website , website development , html forms , ressponsive website , sell-tech,shop , sell , tech , shop, sell tech , sell-tech , sell-tech india , india , shop india , top 10 website company , website company , software company , company , website company in india , blog , blog website , content , content website , create own website , e-commerce website , digital marketing , marketing company ,  " name="keywords">
    <meta content="Hire Best Website Design and Development Company in Jaipur. Responsive Website Designs." name="description">
      <link rel="stylesheet" href="/Ajax-PHP-MySQL-Newsletter-master/assets/css/style.css">
    <!-- Favicon -->
    <link href="img/SellTec.png" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-260527069-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-260527069-1');
</script>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXP689P"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<div id="popupmain" style="display: none;" >
    <div id="popup">
                <h3 id="newsheading">Wellcome To Sell-Tech India </h3>
                <form action="/Ajax-PHP-MySQL-Newsletter-master/send.php" method="post" id="newsletter" name="newsletter">
                    <input type="email" name="signup-email" id="signup-email" value="" placeholder="Insert email here" /> <br>
                    <input type="submit" value="Subscribe" name="signup-button" id="signup-button">
                    <input  class="close-btn" id="close-btn" name="NO Thanks" value="NO Thanks "> </input>
                    <span class="arrow"></span>
                </form>
                <div id="response"></div>
                </div>
                </div>
                <style>
                    #popupmain{
                        position: fixed;
                        width: 100%;
                        height: 100%;
                        background: rgba(0, 0, 0, 0.6);
                        z-index: 1001;
                    }
                        #popup{
                            width: 500px;
                            height: 250px;
                            background-image: url('/img/bg1.jpg');
                            background-size: cover;
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            box-shadow: 1px 4px 4px 3px white ;
                            text-align: center;
                        }
                        #newsheading{
                            transform:translateY(50px);
                            color: #fff;

                        }
                        #signup-email{
                            width: 60%;
                            padding: 5px;
                            margin-top: 80px;
                            margin-bottom: 20px;
                             
                        }
                        #signup-button{
                            background-color: #0fc0fa;
                            border: none;
                            font-size: 1rem;
                            padding: 0.6rem 1rem;
                            color: white;
                        }
                        #close-btn{
                            background-color: #0fc0fa;
                            border: none;
                            font-size: 1rem;
                            padding: 0.6rem 1rem;
                            color: white;
                            cursor: pointer;    
                        }

                </style>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="/Ajax-PHP-MySQL-Newsletter-master/assets/js/lib.js"></script>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>91+ 8107734889 <br> +91 6350 691 030</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>selltech25@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/jangidraj0987?t=0gK929sJgg-lVnzOUZXqZw&s=09"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100090234471596&mibextid=ZbWKwL"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/in/sell-tech-241209267"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://instagram.com/sellt_ech?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram fw-normal"></i></a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Sell-Tech India</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="/marketing1.php" class="dropdown-item">Digital Marketing </a>
                            <a href="/domain.php" class="dropdown-item">Domain and Hosting </a>
                            <a href="/database.php" class="dropdown-item">Database Mangement </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.php" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.php" class="dropdown-item">Our features</a>
                            <a href="quote.php" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <div id="search-container">
                 <div id="search-engien">
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            </div>
        </div>
        
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pexels-hasan-albari-1229861.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Boost Your Business with US</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn"> You Dream IT  <br> We Made IT</h1>
                            <a href="quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/bgg.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Facing Difficulty in Public Your Site </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Sell-Tech Provides Easy Hosting and CMS For You</h1>
                            <a href="/quote.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="/contact.php" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
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
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">925</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">925</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">546</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">The Best web Designs  With 10 Years of Experience</h1>
                    </div>
                    <p class="mb-4">Sell-Tech India provides you the vision where you build and design your dream and promote your Business to world wide level. We focous on listen to our Clients and Customize the site as per your choice because we consider our Clients as our first priority . our team work on only one slogon that <br> "YOU DREAM IT AND WE MADE IT " #HappyClients </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open me-2"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Mail us to ask any question</h5>
                            <h4 class="text-primary mb-0">Selltech25@gmail.com</h4>
                        </div>
                    </div>
                    <a href="quote.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Best In Industry</h4>
                            <p class="mb-0">Best designs and dynamic features in Responsive website made us best in the industry . </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Award Winning</h4>
                            <p class="mb-0"> Your commitment has been exemplary, and your hard work is an inspiration to everyone around you.” “You are one of the people who makes this business great!” “This company's future is sure to be bright with team members like you! Your hard work and creativity is an inspiration to all of your colleagues!” </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Professional Staff</h4>
                            <p class="mb-0">Our small team with intelligent brains made it possible today that we are making your dream website in real.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">Sell-Tech India provides a feature of 24/7 contacting us for any query that you are facing we feel very glad to help you . </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">E-Commerce websites</h4>
                        <p class="m-0">We provide user friendly navigation , footer navigation , responsive layout , FAQ for the store and more options features tap down to know more </p>
                        <a class="btn btn-lg btn-primary rounded" href="e-commerce.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Logo and templates designs</h4>
                        <p class="m-0">We provide all different types of logos and templates according to your need and theme of your website </p>
                        <a class="btn btn-lg btn-primary rounded" href="logo.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Admin Panel</h4>
                        <p class="m-0">With information and user management we also provide the facility of product management and many more key features , tap down to know more </p>
                        <a class="btn btn-lg btn-primary rounded" href="/admin.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Content and Blog websites </h4>
                        <p class="m-0">We provide dynamic range of features in the website that will be user friendly and responsive and ouu clients views we will be our first priority , tap down to know more </p>
                        <a class="btn btn-lg btn-primary rounded" href="/content.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3"> Digital Marketing </h4>
                        <p class="m-0">Digital marketing, also called online marketing, is the promotion of brands to connect with potential customers using the internet and other forms of digital communication , tap down to know more </p>
                        <a class="btn btn-lg btn-primary rounded" href="/marketing1.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Mail Us For Quote</h3>
                        <p class="text-white mb-3">Your needs and views matters us so feel free to contact us on our social or via mail us for any query .</p>
                        <h2 class="text-white mb-0">Selltech25@gmail.com</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Plan Start -->

    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Sell-Tech provides you a feature to connect or solve your any type of query to our backend or proffesional team , we feel very happy to solve your query <br> Mail or call us for any type of query . </p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Mail us  to ask any question</h5>
                            <h4 class="text-primary mb-0">selltech25@gmail.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form action="" method="POST">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" required name="name">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <select name="service" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">E-Commerce </option>
                                        <option value="2">Professional Website </option>
                                        <option value="3">Grocery  website  </option>
                                        <option value="4">Query </option>
                                        <option value="5">About us  </option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="massage" class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <input name="submit" class="btn btn-dark w-100 py-3" type="submit">Request A Quote </input>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- php file -->
        
    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/WhatsApp Image 2023-03-12 at 1.08.56 AM.jpeg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Unnati Mishra </h4>
                            <small class="text-uppercase">HR of a company </small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        This site is very useful, and they provide better performance of  work and anyone can trust on them.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/WhatsApp Image 2023-03-12 at 1.48.21 AM.jpeg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Anil Batra </h4>
                            <small class="text-uppercase">Marketing</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Great experience working with sell tech. They have helped build a professional website and they are always happy to help should I need any alterations.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/WhatsApp Image 2023-03-12 at 1.48.21 AM (2).jpeg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Tanisha Kappor </h4>
                            <small class="text-uppercase">Doctor </small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        I really appreciate your work here – the quality is superb. He truly understood what we required for our business website and was on hand at each stage to guide us and always extremely approachable.

Simply fantastic and was one of the best choices we made when setting up our business!
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/WhatsApp Image 2023-03-12 at 1.48.21 AM (1).jpeg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Nitin Sachdeva </h4>
                            <small class="text-uppercase">Business Man </small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        We have always found sell tech  a pleasure to work with. They have been flexible, helpful and efficient - excellent value for money I wanted to thank the team at The Web Surgery for all their help to design and build my website and to look after all the marketing. I have daily compliments about how nice it looks and how easy it is to use. I would recommend them to anyone wanting to have an online presence.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/tempp.png" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="marketing1.php">Digital Marketing </a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Sell-Tech</small>
                                
                            </div>
                            <h4 class="mb-3">Digital Marketing </h4>
                            <p>the promotion of brands to connect with potential customers using the internet and other forms of digital communication</p>
                            <a class="text-uppercase" href="marketing1.php">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="/img/hosting.jpeg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="marketing2.php">Domain and Hosting </a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Sell-Tech </small>
                                
                            </div>
                            <h4 class="mb-3">Domain and Hosting </h4>
                            <p>A domain name is a string of characters that identifies a website. It is what users type in their browser to visit your site. Web hosting is a service that provides space on a server for your website files, allowing it to be available on the internet</p>
                            <a class="text-uppercase" href="marketing2.php">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="/img/database.jpeg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="/database.php">DataBase management</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Sell-Tech </small>
                                
                            </div>
                            <h4 class="mb-3">DataBase Management</h4>
                            <p>A database management system (or DBMS) is essentially nothing more than a computerized data-keeping system. Users of the system are given facilities to perform several kinds of operations on such a system for either manipulation of the data in the database or the management of the database structure itself.</p>
                            <a class="text-uppercase" href="/database.php">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/3 (1).png" alt="">
                    <img src="img/1 (2).png" alt="">
                    <img src="img/1.png" alt="">
                    <img src="img/2 (1).png" alt="">
                    <img src="img/2 (2).png" alt="">
                    <img src="img/2.png" alt="">
                    <img src="img/4.png" alt="">
                    <img src="img/44.jpg" alt="">
                    <img src="img/34.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.php" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Sell-Tech India </h1>
                        </a>
                        <p class="mt-3 mb-4">Sell-Tech India provides the platform where you can grow your business digitaly , for more information and updates join now with us </p>
                        <form action="/hh/register.php" method="post">
                            <div class="input-group">
                                
                              <a href="/hh/register.php" target="_blank"><button class="btn btn-dark">Sign Up</button></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">selltech25@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+91 8107734889 <br>+91 6350691030</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="https://twitter.com/jangidraj0987?t=0gK929sJgg-lVnzOUZXqZw&s=09"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/profile.php?id=100090234471596&mibextid=ZbWKwL"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.linkedin.com/in/sell-tech-241209267"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="https://instagram.com/sellt_ech?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="e-commerce.php"><i class="bi bi-arrow-right text-primary me-2"></i>E-Commerce Websites </a>
                                <a class="text-light mb-2" href="content.php"><i class="bi bi-arrow-right text-primary me-2"></i>Content and Blog websites</a>
                                <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="/content.php"><i class="bi bi-arrow-right text-primary me-2"></i>Content and Blog Websites </a>
                                <a class="text-light mb-2" href="/e-commerce.php"><i class="bi bi-arrow-right text-primary me-2"></i>E-Commerce websites </a>
                                <a class="text-light mb-2" href="/domain.php"><i class="bi bi-arrow-right text-primary me-2"></i>Domain and Hosting </a>
                                <a class="text-light" href="/database.php"><i class="bi bi-arrow-right text-primary me-2"></i>DataBase Management</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="index.php">Sell-tech.shop</a>. All Rights Reserved. <br> <br> <br>
                            <h5 id="count" >0</h5> <style> #count { color: #fff; align-items: center; text-align: center;}</style>
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        const countEL = document.getElementById("count");
        countvisits();
        function countvisits(){
            fetch('https://api.countapi.xyz/update/selltech/sell/?amount=1')
            .then((res) => res.json())
            .then((res) => {
                countEL.innerHTML = res.value;
            });
        }
    </script>
    <!-- Footer End -->

    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>