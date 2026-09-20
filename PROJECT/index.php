<?php include("Assets/Connection/Connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vaccine On Time</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="Assets/Templetes/Main/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="Assets/Templetes/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="Assets/Templetes/Main/lib/animate/animate.min.css" rel="stylesheet">
    <link href="Assets/Templetes/Main/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="Assets/Templetes/Main/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Assets/Templetes/Main/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Assets/Templetes/Main/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
     <style>
        .text-primary {
    color: #007b83 !important;
        }
        .btn-primary {
    color: #000;
    background-color: #007b83;
    border-color: #06A3DA;
        }
        
     </style>



   <!-- Navbar Start --> 
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-3 py-3 py-lg-0">
    <a href="index.php" class="navbar-brand p-0 d-flex align-items-center" style="margin-left: 0; padding-left: 0;">
        <!-- Add the logo here -->
        <img src="Assets/Templetes/Main/img/Vaccinelogo.jpg" alt="Logo" style="height:80px; margin-right:0px;">
        <h1 class="m-0 text-primary">Vaccine On Time</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Registration</a>
                <div class="dropdown-menu">
                    <a href="Guest/NewUser.php" class="dropdown-item"><b>User Registration</b></a>
                    <a href="Guest/NewCentre.php" class="dropdown-item"><b>Hospital Registration</b></a>
                </div>
            </div>
        </div>
        <a href="Guest/Login.php" class="btn btn-primary py-2 px-4 ms-3">Login</a>
    </div>
</nav>
<!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="Assets/Templetes/Main/img/doctor.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5> -->
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Hello! Ready to safeguardyour health?</h5>
                            <h3 class="display-1 text-white mb-md-4 animated zoomIn">WELCOME TO <b>VACCINE ON TIME</b></h3>
                    
                            <!-- <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a> -->
                            <!-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="Assets/Templetes/Main/img/frontsecond.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">"We are determined for your better life"</h5>
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Book your vaccine appointments in just a few clicks!</h5>
                            <!-- <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Dental Treatment</h1> -->
                            <a href="Guest/Login.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Now</a>
                            <!-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a> -->
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

     <!-- About Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h5 class="display-5 mb-0">Welcome to VACCINE ON TIME</h5>
                    </div>
                    <!-- <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore</h4> -->
                    <p class="mb-4"><b>At Vaccine On Time, we simplify the vaccination process to make healthcare more accessible for everyone. Our platform offers an easy way to book vaccinations for all age groups, connecting you with nearby hospitals and real-time appointment availability. We’re dedicated to reducing the hassle of healthcare management with a user-friendly interface. Your health and convenience are our top priorities. Thank you for trusting us to be your vaccination booking partner.
</b></p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>User Friendly</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Real Time Availability</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="Guest/NewUser.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Register Now</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="Assets/Templetes/Main/img/file.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
   
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Vaccinated in 4 Steps</title>
    <link rel="stylesheet" href="path/to/font-awesome.css"> <!-- Adjust the path to your FontAwesome CSS -->
    <style>
        .price-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }
        .price-item img {
            transition: transform 0.4s;
        }
        .price-item:hover img {
            transform: scale(1.1);
        }
        .price-item .overlay {
            opacity: 0;
            transition: opacity 0.4s;
        }
        .price-item:hover .overlay {
            opacity: 1;
        }
        .card-body:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        .price-item {
            border: none;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: transform 0.4s, box-shadow 0.4s;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-start mb-3">
            <h3 class="position-relative d-inline-block text-primary text-uppercase">GET VACCINATED IN 4 STEPS</h3>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                    <div class="card price-item pb-3">
                        <div class="position-relative">
                            <img class="img-fluid" style="max-height: 350px;" src="Assets/Templetes/Main/img/Steps1.jpg" alt="Step 1 Image">
                            <div class="overlay">Step 1</div>
                        </div>
                        <div class="card-body text-center py-4 px-3">
                            <h4 class="card-title">Register or Log In</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Click on the “Register” button.</b></span>
                                <i class="fa fa-user-plus text-primary pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Fill in your details and create your account.</b></span>
                                <i class="fa fa-pencil-alt text-primary pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Already registered? Just click “Log In.”</b></span>
                                <i class="fa fa-sign-in-alt text-primary pt-1"></i>
                            </div>
                        </div>
                    </div>

                    <div class="card price-item pb-3">
                        <div class="position-relative">
                            <img class="img-fluid" style="max-height: 350px;" src="Assets/Templetes/Main/img/Step2.jpg" alt="Step 2 Image">
                            <div class="overlay">Step 2</div>
                        </div>
                        <div class="card-body text-center py-4 px-3">
                            <h4 class="card-title">Choose a Vaccine</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Log in to your account.</b></span>
                                <i class="fa fa-sign-in-alt text-primary pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Browse the vaccine options by category.</b></span>
                                <i class="fa fa-syringe text-primary pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Select the vaccine you need.</b></span>
                                <i class="fa fa-check-circle text-primary pt-1"></i>
                            </div>
                        </div>
                    </div>

                    <div class="card price-item pb-3">
                        <div class="position-relative">
                            <img class="img-fluid" style="max-height: 350px;" src="Assets/Templetes/Main/img/Step3book.jpg" alt="Step 3 Image">
                            <div class="overlay">Step 3</div>
                        </div>
                        <div class="card-body text-center py-4 px-3">
                            <h4 class="card-title">Select a Nearby Hospital</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>See the list of hospitals near you.</b></span>
                                <i class="fa fa-map-marker-alt text-primary pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Check available times and details.</b></span>
                                <i class="fa fa-clock text-primary pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Pick the hospital that suits you.</b></span>
                                <i class="fa fa-hospital text-primary pt-1"></i>
                            </div>
                        </div>
                    </div>

                    <div class="card price-item pb-3">
                        <div class="position-relative">
                            <img class="img-fluid" style="max-height: 350px;" src="Assets/Templetes/Main/img/Step4.jpg" alt="Step 4 Image">
                            <div class="overlay">Step 4</div>
                        </div>
                        <div class="card-body text-center py-4 px-3">
                            <h4 class="card-title">Confirm Your Booking</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Review your selection.</b></span>
                                <i class="fa fa-search text-primary pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Confirm the booking.</b></span>
                                <i class="fa fa-check text-primary pt-1"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span><b>Get your token and bring it to the hospital.</b></span>
                                <i class="fa fa-ticket-alt text-primary pt-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




<!--Vaccination Steps-->
    <!-- <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-start mb-1">
        <h3 class="position-relative d-inline-block text-primary text-uppercase">GET VACCINATED IN 4 STEPS</h3>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                <div class="card price-item pb-3" style="border: none; border-radius: 15px; overflow: hidden; transition: transform 0.2s;">
                    <img class="img-fluid" style="max-height: 350px; transition: transform 0.2s;" src="Assets/Templetes/Main/img/Steps1.jpg" alt="Step 1 Image">
                    <div class="card-body text-center bg-light border-bottom border-primary py-4 px-3">
                        <h4 class="card-title">STEP 1 - Register or Log In</h4>
                        <hr class="text-primary w-50 mx-auto mt-0">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Click on the “Register” button.</b></span>
                            <i class="fa fa-user-plus text-primary pt-1"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Fill in your details and create your account.</b></span>
                            <i class="fa fa-pencil-alt text-primary pt-1"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Already registered? Just click “Log In.”</b></span>
                            <i class="fa fa-sign-in-alt text-primary pt-1"></i>
                        </div>
                    </div>
                </div>

                <div class="card price-item pb-3" style="border: none; border-radius: 15px; overflow: hidden; transition: transform 0.2s;">
                    <img class="img-fluid" style="max-height: 350px; transition: transform 0.2s;" src="Assets/Templetes/Main/img/Step2.jpg" alt="Step 2 Image">
                    <div class="card-body text-center bg-light border-bottom border-primary py-4 px-3">
                        <h4 class="card-title">Step 2 - Choose a Vaccine</h4>
                        <hr class="text-primary w-50 mx-auto mt-0">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Log in to your account.</b></span>
                            <i class="fa fa-sign-in-alt text-primary pt-1"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Browse the vaccine options by category.</b></span>
                            <i class="fa fa-syringe text-primary pt-1"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Select the vaccine you need.</b></span>
                            <i class="fa fa-check-circle text-primary pt-1"></i>
                        </div>
                    </div>
                </div>

                <div class="card price-item pb-3" style="border: none; border-radius: 15px; overflow: hidden; transition: transform 0.2s;">
                    <img class="img-fluid" style="max-height: 350px; transition: transform 0.2s;" src="Assets/Templetes/Main/img/Step3book.jpg" alt="Step 3 Image">
                    <div class="card-body text-center bg-light border-bottom border-primary py-4 px-3">
                        <h4 class="card-title">Step 3 - Select a Nearby Hospital</h4>
                        <hr class="text-primary w-50 mx-auto mt-0">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>See the list of hospitals near you.</b></span>
                            <i class="fa fa-map-marker-alt text-primary pt-1"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Check available times and details.</b></span>
                            <i class="fa fa-clock text-primary pt-1"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Pick the hospital that suits you.</b></span>
                            <i class="fa fa-hospital text-primary pt-1"></i>
                        </div>
                    </div>
                </div>

                <div class="card price-item pb-3" style="border: none; border-radius: 15px; overflow: hidden; transition: transform 0.2s;">
                    <img class="img-fluid" style="max-height: 350px; transition: transform 0.2s;" src="Assets/Templetes/Main/img/Step4.jpg" alt="Step 4 Image">
                    <div class="card-body text-center bg-light border-bottom border-primary py-4 px-3">
                        <h4 class="card-title">Step 4 - Confirm Your Booking</h4>
                        <hr class="text-primary w-50 mx-auto mt-0">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Review your selection.</b></span>
                            <i class="fa fa-search text-primary pt-1"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Confirm the booking.</b></span>
                            <i class="fa fa-check text-primary pt-1"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span><b>Get your token and bring it to the hospital.</b></span>
                            <i class="fa fa-ticket-alt text-primary pt-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .price-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .price-item img:hover {
        transform: scale(1.05);
    }
</style> -->

<br><br>
   <!-- Why Book With Us Start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Book With Us?</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
        }
        
        h2 {
            text-align: center;
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 40px;
        }
        
        .reasons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .reason-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .reason-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        .reason-icon {
            font-size: 2.5rem;
            color: #3498db;
            margin-bottom: 15px;
        }
        
        .reason-title {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .reason-description {
            color: #7f8c8d;
            font-size: 0.9rem;
            line-height: 1.6;
        }
        
        .detail-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .modal-content {
            background-color: #ffffff;
            margin: 10% auto;
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .close-modal {
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 28px;
            font-weight: bold;
            color: #aaa;
            cursor: pointer;
        }
        
        .close-modal:hover {
            color: #2c3e50;
        }
        
        .modal-title {
            color: #3498db;
            margin-bottom: 15px;
        }
        
        .modal-description {
            color: #7f8c8d;
            line-height: 1.6;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Why Book With Us?</h2>
        <div class="reasons-grid">
            <div class="reason-card" onclick="showDetail('quick-booking')">
                <div class="reason-icon">⚡</div>
                <h3 class="reason-title">Quick and Easy Booking</h3>
                <p class="reason-description">Book your vaccinations in just a few clicks.</p>
            </div>
            <div class="reason-card" onclick="showDetail('availability')">
                <div class="reason-icon">🕒</div>
                <h3 class="reason-title">24/7 Availability</h3>
                <p class="reason-description">Book appointments anytime, anywhere.</p>
            </div>
            <div class="reason-card" onclick="showDetail('trusted-partners')">
                <div class="reason-icon">🏥</div>
                <h3 class="reason-title">Trusted Healthcare Partners</h3>
                <p class="reason-description">Connect with the best providers in your area.</p>
            </div>
            <div class="reason-card" onclick="showDetail('affordable')">
                <div class="reason-icon">💰</div>
                <h3 class="reason-title">Affordable Pricing</h3>
                <p class="reason-description">Competitive prices with no hidden fees.</p>
            </div>
            <div class="reason-card" onclick="showDetail('secure')">
                <div class="reason-icon">🔒</div>
                <h3 class="reason-title">Safe and Secure</h3>
                <p class="reason-description">Your information is protected.</p>
            </div>
            <div class="reason-card" onclick="showDetail('user-friendly')">
                <div class="reason-icon">📱</div>
                <h3 class="reason-title">User-Friendly Interface</h3>
                <p class="reason-description">Easy to navigate for all users.</p>
            </div>
        </div>
    </div>

    <div id="detailModal" class="detail-modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <h3 id="modalTitle" class="modal-title"></h3>
            <p id="modalDescription" class="modal-description"></p>
        </div>
    </div>

    <script>
        const details = {
            'quick-booking': {
                title: 'Quick and Easy Booking',
                description: 'Our streamlined booking process allows you to schedule your vaccinations in just a few clicks. Save time and avoid the hassle of lengthy phone calls or in-person appointments.'
            },
            'availability': {
                title: '24/7 Availability',
                description: 'We understand that health needs don't follow a 9-to-5 schedule. That's why our platform is available 24/7, allowing you to book appointments at your convenience, day or night.'
            },
            'trusted-partners': {
                title: 'Trusted Healthcare Partners',
                description: 'We've partnered with the most reputable hospitals and healthcare providers in your area. Rest assured that you're receiving care from qualified professionals you can trust.'
            },
            'affordable': {
                title: 'Affordable and Transparent Pricing',
                description: 'We believe in transparent pricing. Our competitive rates are clearly displayed, and we never surprise you with hidden fees. Know exactly what you're paying for before you book.'
            },
            'secure': {
                title: 'Safe and Secure',
                description: 'Your privacy and security are our top priorities. We use industry-leading encryption and security measures to protect your personal and medical information at all times.'
            },
            'user-friendly': {
                title: 'User-Friendly Interface',
                description: 'Our platform is designed with you in mind. Whether you're tech-savvy or new to online booking, our intuitive interface makes it easy for everyone to navigate and use our services.'
            }
        };

        function showDetail(detailId) {
            const modal = document.getElementById('detailModal');
            const title = document.getElementById('modalTitle');
            const description = document.getElementById('modalDescription');

            title.textContent = details[detailId].title;
            description.textContent = details[detailId].description;

            modal.style.display = 'block';
            modal.classList.add('fade-in');
        }

        function closeModal() {
            const modal = document.getElementById('detailModal');
            modal.style.display = 'none';
            modal.classList.remove('fade-in');
        }

        window.onclick = function(event) {
            const modal = document.getElementById('detailModal');
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>


<div class="container-fluid py-5 my-5 wow fadeInUp" data-wow-delay="0.1s" style="background: url('Assets/Templetes/Main/img/Review.jpg') no-repeat center center/cover; background-size: cover;"> 
    <!-- Overlay -->
    <div class="container py-4 px-4" style="background: rgba(0, 0, 0, 0.6); border-radius: 50px; height: auto; max-width: 90%;">
        <div class="text-center mb-5">
            <h1 class="display-4 text-white wow fadeInUp" data-wow-delay="0.3s">Happy Users</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s" style="background-color: rgba(255, 255, 255, 0.8); box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);">
                    <?php
                    $selFeedback = "SELECT * FROM tbl_feedback f inner join tbl_newuser u on f.user_id=u.user_id";
                    $resFeedback = $con->query($selFeedback);
                    while($data = $resFeedback->fetch_assoc()) {
                    ?>
                    <div class="testimonial-item text-center">
                       
                        <p class="fs-5 text-dark"><?php echo $data['feedback_content']; ?></p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-dark mb-0"><?php echo $data['user_name']; ?></p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

 
    <!-- Newsletter Start -->
    <!-- <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
    <!-- Newsletter End -->
    

    <!-- Footer Start -->
   <!-- <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div> 
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="container-fluid text-light py-4" style="background: #051225;"> 
    <div class="container">
        <div class="row g-0">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Vaccine On Time</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

                <!-- <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>
                        Distributed by <a class="text-white border-bottom" href="https://themewagon.com">ThemeWagon</a>              
                    </p>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/Templetes/Main/lib/wow/wow.min.js"></script>
    <script src="Assets/Templetes/Main/lib/easing/easing.min.js"></script>
    <script src="Assets/Templetes/Main/lib/waypoints/waypoints.min.js"></script>
    <script src="Assets/Templetes/Main/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="Assets/Templetes/Main/lib/tempusdominus/js/moment.min.js"></script>
    <script src="Assets/Templetes/Main/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="Assets/Templetes/Main/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="Assets/Templetes/Main/lib/twentytwenty/jquery.event.move.js"></script>
    <script src="Assets/Templetes/Main/lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="Assets/Templetes/Main/js/main.js"></script>
</body>

</html>