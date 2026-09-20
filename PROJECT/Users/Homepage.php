<!-- <?php
include('../Assets/connection/connection.php');
session_start();
echo "WELCOME"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php echo  $_SESSION['uname']?>
<table width="200" border="1">
  <tr>
    <td><a href="MyProfile.php">MyProfile</a></td>
  </tr>
  <tr>
    <td><a href="EditProfile.php">EditProfile</a></td>
  </tr>
  <tr>
    <td><a href="Changepassword.php">Changepassword</a></td>
    </tr>
    <tr>
    <td><a href="Viewcenter.php">View Center</a>
  </tr>
 
</table>
<form id="form1" name="form1" method="post" action="">
</form>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vaccine On time</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../Assets/Templetes/Main/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Assets/Templetes/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../Assets/Templetes/Main/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Assets/Templetes/Main/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../Assets/Templetes/Main/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Assets/Templetes/Main/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Assets/Templetes/Main/css/style.css" rel="stylesheet">
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
    background-color: #007b83 !important;
    border-color: #06A3DA;
        }
     </style>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-3 py-3 py-lg-0">
    <a href="Homepage.php" class="navbar-brand p-0 d-flex align-items-center">
        <!-- Add the logo here -->
        <img src="../Assets/Templetes/Main/img/Vaccinelogo.jpg" alt="Logo" style="height:80px; margin-right:0px;">
        <h1 class="m-0 text-primary">Vaccine On Time</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="Homepage.php" class="nav-item nav-link">Home</a>
                <a href="myprofile.php" class="nav-item nav-link">My Profile</a>
                <!-- <a href="Viewcenter.php" class="nav-item nav-link">View Center</a> -->
                <a href="Mybooking.php" class="nav-item nav-link">My Bookings</a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Review</a>
                <div class="dropdown-menu">
                    <a href="feedback.php" class="dropdown-item"><b>Feedback</b></a>
                    <a href="Mycomplaints.php" class="dropdown-item"><b>Complaint</b></a>
                </div>
            </div>
                <a href="../Logout.php" class="nav-item nav-link">Log out</a>
            </div>
            <a href="Viewcenter.php" class="btn btn-primary py-2 px-4 ms-3">Book Vaccine</a>
        </div>
    </nav>
    <!-- Navbar End -->


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


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../Assets/Templetes/Main/img/doctor.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                        <h1 class="text-white text-uppercase mb-3 animated slideInDown">WELCOME  "<?php echo $_SESSION['uname']?>"</h1>
                            <!-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5> -->
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">A SAFER FUTURE STARTS HERE</h1>
                            <!-- <a href="appointment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a> -->
                            <!-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../Assets/Templetes/Main/img/frontsecond.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h1 class="text-white text-uppercase mb-3 animated slideInDown">PROTECT TODAY <BR> SECURE TOMMOROW</h1> -->
                            <h5 class="display-1 text-white mb-md-4 animated zoomIn">GET VACCINATED</h5>
                            <a href="Viewcenter.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Vaccine</a>
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


    <!-- Banner Start -->
    <!-- <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Fri</h6>
                            <p class="mb-0"> 8:00am - 9:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Saturday</h6>
                            <p class="mb-0"> 8:00am - 7:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sunday</h6>
                            <p class="mb-0"> 8:00am - 5:00pm</p>
                        </div>
                        <a class="btn btn-light" href="">Appointment</a>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Search A Doctor</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker" style="height: 40px;">
                        </div>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected>Select A Service</option>
                            <option value="1">Service 1</option>
                            <option value="2">Service 2</option>
                            <option value="3">Service 3</option>
                        </select>
                        <a class="btn btn-light" href="">Search Doctor</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white">Ipsum erat ipsum dolor clita rebum no rebum dolores labore, ipsum magna at eos et eos amet.</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Banner Start -->


    <!-- About Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h3 class="display-5 mb-0">Welcome to VACCINE ON TIME,</h3>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore</h4>
                    <p class="mb-4">Here we simplify the vaccination process to make healthcare more accessible for everyone. Our platform offers an easy way to book vaccinations for all age groups, connecting you with nearby hospitals and real-time appointment availability. We’re dedicated to reducing the hassle of healthcare management with a user-friendly interface and timely reminders. Your health and convenience are our top priorities. Thank you for trusting us to be your vaccination booking partner.
</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="../Assets/Templetes/Main/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->

   <br><br>
   <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compact 3D Step Carousel</title>
    <link rel="stylesheet" href="path/to/font-awesome.css"> <!-- Adjust the path to your FontAwesome CSS -->
    <style>
        .vaccination-steps-3d {
            max-width: 800px;
            margin: 20px auto;
            position: relative;
            height: 400px;
        }

        .steps-carousel-wrapper {
            width: 100%;
            height: 100%;
            position: relative;
            perspective: 1500px;
        }

        .steps-carousel-track {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 1s;
        }

        .steps-carousel-slide {
            position: absolute;
            width: 40%;
            height: 60%;
            left: 30%;
            top: 20%;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            background: white;
            transform-origin: center center;
            transition: transform 0.5s, opacity 0.5s;
            cursor: pointer;
        }

        .steps-carousel-slide:nth-child(1) { transform: rotateY(0) translateZ(300px); }
        .steps-carousel-slide:nth-child(2) { transform: rotateY(90deg) translateZ(300px); }
        .steps-carousel-slide:nth-child(3) { transform: rotateY(180deg) translateZ(300px); }
        .steps-carousel-slide:nth-child(4) { transform: rotateY(270deg) translateZ(300px); }

        .steps-carousel-slide:hover {
            transform: scale(1.02) translateZ(310px);
        }

        .step-image {
            height: 30%;
            position: relative;
            background: linear-gradient(45deg, #008080, #20B2AA);
            border-radius: 12px 12px 0 0;
        }

        .step-number {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(255,255,255,0.9);
            color: #008080;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9em;
        }

        .step-content {
            padding: 15px;
        }

        .step-title {
            color: #2d3748;
            margin: 0 0 10px 0;
            font-size: 1.1em;
            position: relative;
        }

        .step-title::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 30px;
            height: 2px;
            background: #008080;
        }

        .step-instruction {
            padding: 5px;
            margin: 5px 0;
            font-size: 0.9em;
            background: #f7fafc;
            border-left: 2px solid #008080;
            color: #4a5568;
            display: flex;
            justify-content: space-between; /* Space between text and icon */
            align-items: center; /* Vertically align text and icon */
        }

        .step-instruction i {
            margin-left: 8px; /* Space between the text and the icon */
            color: #008080; /* Icon color */
        }

        .carousel-nav {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .nav-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #cbd5e0;
            cursor: pointer;
            transition: all 0.3s;
        }

        .nav-dot.active {
            background: #008080;
            transform: scale(1.2);
        }

        .carousel-buttons {
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            pointer-events: none;
        }

        .carousel-button {
            background: rgba(255,255,255,0.9);
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            pointer-events: auto;
            transition: transform 0.3s;
            font-size: 0.9em;
        }

        .carousel-button:hover {
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .vaccination-steps-3d {
                height: 300px;
            }

            .steps-carousel-slide {
                width: 60%;
                left: 20%;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-start mb-3">
            <h3 class="position-relative d-inline-block text-primary text-uppercase">GET VACCINATED IN 4 STEPS</h3>
        </div>
        <div class="vaccination-steps-3d">
            <div class="steps-carousel-wrapper">
                <div class="steps-carousel-track">
                    <div class="steps-carousel-slide">
                        <div class="step-image">
                            <div class="step-number">1</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title">Choose Vaccine</h3>
                            <div class="step-instruction">Choose Book Vaccine <i class="fa fa-list-alt text-primary pt-1"></i></div>
                            <div class="step-instruction">Browse the vaccines by category. <i class="fa fa-search text-primary pt-1"></i></div>
                            <div class="step-instruction">Select the vaccine you need. <i class="fa fa-check-circle text-primary pt-1"></i></div>
                        </div>
                    </div>

                    <div class="steps-carousel-slide">
                        <div class="step-image">
                            <div class="step-number">2</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title">Choose Hospital</h3>
                            <div class="step-instruction">Select a Nearby Hospital <i class="fa fa-hospital text-primary pt-1"></i></div>
                            <div class="step-instruction">See the list of hospitals near you. <i class="fa fa-map-marker text-primary pt-1"></i></div>
                            <div class="step-instruction">Pick the hospital that suits you. <i class="fa fa-thumbs-up text-primary pt-1"></i></div>
                        </div>
                    </div>

                    <div class="steps-carousel-slide">
                        <div class="step-image">
                            <div class="step-number">3</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title">Timing</h3>
                            <div class="step-instruction">Select the date <i class="fa fa-calendar text-primary pt-1"></i></div>
                            <div class="step-instruction">Select the Time slot suitable for you <i class="fa fa-clock text-primary pt-1"></i></div>
                            <div class="step-instruction">Click on Book <i class="fa fa-book text-primary pt-1"></i></div>
                        </div>
                    </div>

                    <div class="steps-carousel-slide">
                        <div class="step-image">
                            <div class="step-number">4</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title">Confirm</h3>
                            <div class="step-instruction">Payment <i class="fa fa-money-bill-wave text-primary pt-1"></i></div>
                            <div class="step-instruction">Receive token via email <i class="fa fa-envelope text-primary pt-1"></i></div>
                            <div class="step-instruction">Confirm the booking <i class="fa fa-check text-primary pt-1"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-buttons">
                <button class="carousel-button" id="prev"><i class="fa fa-chevron-left"></i></button>
                <button class="carousel-button" id="next"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="carousel-nav">
                <div class="nav-dot active" data-index="0"></div>
                <div class="nav-dot" data-index="1"></div>
                <div class="nav-dot" data-index="2"></div>
                <div class="nav-dot" data-index="3"></div>
            </div>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.steps-carousel-slide');
        const track = document.querySelector('.steps-carousel-track');
        const dots = document.querySelectorAll('.nav-dot');
        let currentIndex = 0;

        function updateCarousel() {
            const offset = -currentIndex * 90; // 90 degrees for each slide
            track.style.transform = `rotateY(${offset}deg)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
            updateCarousel();
        });

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
            updateCarousel();
        });

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                currentIndex = parseInt(dot.dataset.index);
                updateCarousel();
            });
        });
    </script>
</body>
</html>


    <!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Vaccination is Important</title>
    <style>
        /* Add background image */
        .bg-appointment {
            background-image: url("../Assets/Templetes/Main/img/doctor2.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        /* Ensure text visibility on top of the background image */
        .bg-appointment::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Darkens the image for text visibility */
        }

        .container-fluid {
            position: relative;
            z-index: 1;
        }

        .text-white {
            z-index: 2;
            position: relative;
        }

        .appointment-form {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
        }

        /* Custom button style */
        .btn-custom {
            background-color: #28a745; /* Green background */
            color: white; /* White text */
            text-decoration: none;
            padding: 12px 24px; /* Increased padding for a larger button */
            display: inline-block;
            border-radius: 8px; /* Slightly rounded corners */
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #218838; /* Darker green on hover */
        }
    </style>
</head>
<body>

<!-- Section Start -->
<div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp position-relative" data-wow-delay="0.1s">
    <!-- Overlay -->
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4">Why Vaccination is Important?</h1>
                    <p class="text-white mb-0">Vaccination plays a vital role in preventing serious diseases and safeguarding public health. It helps protect individuals, families, and communities by reducing the spread of infections and ensuring a healthier future. Regular vaccination keeps immunity strong and is especially crucial for children, adolescents, and adults. Explore more about the importance of vaccinations and how they can keep you and your loved ones safe.</p>
                </div>
            </div>

            <!-- Button column -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <a href="vaccineimportance.html" class="btn btn-custom py-3 px-5">Read More</a>
            </div>
        </div>
    </div>
</div>

<!-- Section End -->

</body>
</html>


<!-- Section End -->

</body>
</html>



<!-- Vaccination in India Section -->
<!-- Vaccination in India Section -->
<div class="container-fluid my-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef); padding: 50px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-5 mb-4" style="font-weight: bold; color: #343a40;">Vaccination in India</h1>
                <p class="mb-4" style="font-size: 1.1rem; color: #495057; line-height: 1.8;">
                    India operates one of the largest and most impactful immunization programs in the world, reaching millions of newborns and pregnant women each year. Vaccinations protect against life-threatening diseases such as polio, tuberculosis, hepatitis B, and measles. Through its National Immunization Schedule, the Government of India provides free vaccines to ensure a healthier future for all citizens.
                </p>
            </div>
        </div>

        <!-- Relevant Facts Section -->
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h4 class="mb-4" style="font-weight: bold; color: #343a40;">Key Facts About Vaccination in India</h4>
                <ul class="list-unstyled" style="font-size: 1rem; color: #6c757d; text-align: left;">
                    <li class="mb-3">
                        <i class="fas fa-syringe text-primary me-2"></i>
                        India was declared polio-free by WHO in 2014 due to extensive vaccination drives.
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-briefcase-medical text-primary me-2"></i>
                        Vaccines like BCG, OPV, DPT, and Hepatitis B are part of the national immunization program.
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-shield-alt text-primary me-2"></i>
                        Newer vaccines like Rotavirus and Pneumococcal Conjugate Vaccine (PCV) have been introduced to combat severe diseases.
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-bullhorn text-primary me-2"></i>
                        Pulse Polio campaigns ensure every child in India is vaccinated against polio.
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-crosshairs text-primary me-2"></i>
                        Mission Indradhanush aims to improve routine immunization coverage for children who have missed vaccinations.
                    </li>
                </ul>
            </div>
        </div>

        <!-- Call to Action Button -->
        <div class="row justify-content-center mt-4">
            <div class="col-lg-6 text-center">
                <a href="../Assets/Templetes/Main/National Immunization Schedule.pdf" target="_blank" class="btn btn-primary btn-lg py-3 px-5 shadow" style="border-radius: 50px;">
                    View National Immunization Schedule
                </a>
            </div>
        </div>
    </div>
</div>

    <!-- Service Start
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="../Assets/Templetes/Main/img/before.jpg" style="object-fit: cover;">
                        <img class="position-absolute w-100 h-100" src="../Assets/Templetes/Main/img/after.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">We Offer The Best Quality Dental Services</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../Assets/Templetes/Main/img/service-1.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Cosmetic Dentistry</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../Assets/Templetes/Main/img/service-2.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Dental Implants</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../Assets/Templetes/Main/img/service-3.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Dental Bridges</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="../Assets/Templetes/Main/img/service-4.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Teeth Whitening</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div> -->
                <!-- </div>
            </div>
        </div>
    </div> -->
    <!-- Service End -->


    <!-- Offer Start -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Know Your Vaccines</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .bg-offer {
            background-image: url('../Assets/Templetes/Main/img/vaccine.jpg'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .offer-text {
            background: rgba(0, 0, 0, 0.6); /* Dark overlay for better text visibility */
        }

        .text-white {
            color: white;
        }

        .btn-dark {
            background-color: #333;
            border: none;
            color: white;
        }

        .btn-dark:hover {
            background-color: #555;
        }

        .btn {
            text-decoration: none;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

    <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s"> 
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text text-center rounded p-5">
                        <h1 class="display-5 text-white">Know Your Vaccines</h1>
                        <p class="text-white mb-4">Explore the World of Vaccines.. Get Informed with Just a Click!</p>
                        <a href="Knowyourvaccine.html" class="btn btn-dark py-3 px-5 me-3">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

    <!-- Offer End -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>
    <style>
        /* CSS Styling for FAQ Section */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            padding: 50px 0;
        }

        h1.display-5 {
            font-size: 2.5rem;
            color: #008b8b;
            text-align: center;
            margin-bottom: 40px;
        }

        .accordion-button {
            background-color: #008b8b;
            color: #fff;
            font-weight: bold;
            padding: 15px;
            border: none;
            border-radius: 5px;
            text-align: left;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.2s ease-in;
        }

        .accordion-button:not(.collapsed) {
            background-color: #004085;
        }

        .accordion-button:hover {
            background-color: #0056b3;
        }

        .accordion-button:focus {
            outline: none;
            box-shadow: none;
        }

        .accordion-item {
            margin-bottom: 10px;
        }

        .accordion-body {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
            font-size: 1rem;
        }

        .accordion-collapse {
            margin-bottom: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1.display-5 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <!-- FAQ Section Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <h1 class="display-5">Frequently Asked Questions</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    Where can I register for a vaccination?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can register for vaccinations directly on our platform by signing up and selecting the desired vaccination category.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    Do I need an account to book an appointment?
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, you need to create an account to access our vaccine booking services.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    What documents are required for vaccination?
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    A valid government-issued ID and proof of prior vaccinations (if applicable) are required at the time of vaccination.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 4 -->
                        <!-- <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    Can I reschedule my vaccination appointment?
                                </button>
                            </h2>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, you can reschedule your vaccination appointment by logging into your account and modifying the booking details.
                                </div>
                            </div>
                        </div> -->
                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                    How long does it take to get vaccinated?
                                </button>
                            </h2>
                            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The vaccination process typically takes 30 minutes, including observation time after receiving the vaccine.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                                    Are there any side effects of vaccination?
                                </button>
                            </h2>
                            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Some people may experience mild side effects such as soreness at the injection site, fever, or fatigue. These typically resolve within a few days.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 7 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                                    How do I know which vaccines are available?
                                </button>
                            </h2>
                            <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Once you register, you will be able to view all available vaccines in your area based on your eligibility.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 8 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
                                    Can I get vaccinated if I have an existing medical condition?
                                </button>
                            </h2>
                            <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You should consult with your healthcare provider before getting vaccinated if you have any pre-existing medical conditions.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 9 -->
                        <!-- <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
                                    Is it safe to get vaccinated during pregnancy?
                                </button>
                            </h2>
                            <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Vaccination during pregnancy is generally safe, but you should speak with your healthcare provider to determine the best course of action.
                                </div>
                            </div>
                        </div> -->
                        <!-- FAQ 10 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10">
                                    Will I receive proof of vaccination after getting the shot?
                                </button>
                            </h2>
                            <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHeading10" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, you will receive a digital or physical vaccination certificate after you complete your vaccination.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Section End -->

</body>
</html>


    <!-- Pricing Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pricing Plan</h5>
                        <h1 class="display-5 mb-0">We Offer Fair Prices for Dental Treatment</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo eirmod magna dolore erat amet</p>
                    <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Call for Appointment</h5>
                    <h1 class="wow fadeInUp" data-wow-delay="0.6s">+012 345 6789</h1>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="../Assets/Templetes/Main/img/price-1.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$35</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Teeth Whitening</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="../Assets/Templetes/Main/img/price-2.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$49</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Dental Implant</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="../Assets/Templetes/Main/img/price-3.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$99</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Root Canal</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Pricing End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="../Assets/Templetes/Main/img/testimonial-1.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="../Assets/Templetes/Main/img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Dentist</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced Dentist</h1>
                        <a href="appointment.html" class="btn btn-primary py-3 px-5">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="../Assets/Templetes/Main/img/team-1.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Dr. John Doe</h4>
                            <p class="text-primary mb-0">Implant Surgeon</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="../Assets/Templetes/Main/img/team-2.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Dr. John Doe</h4>
                            <p class="text-primary mb-0">Implant Surgeon</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="../Assets/Templetes/Main/img/team-3.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Dr. John Doe</h4>
                            <p class="text-primary mb-0">Implant Surgeon</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="../Assets/Templetes/Main/img/team-4.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Dr. John Doe</h4>
                            <p class="text-primary mb-0">Implant Surgeon</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="../Assets/Templetes/Main/img/team-5.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Dr. John Doe</h4>
                            <p class="text-primary mb-0">Implant Surgeon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


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
    </div> -->
    <div class="container-fluid text-light py-4" style="background: #051225;"> 
    <div class="container">
        <div class="row g-0">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Vaccine On Time</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Assets/Templetes/Main/lib/wow/wow.min.js"></script>
    <script src="../Assets/Templetes/Main/lib/easing/easing.min.js"></script>
    <script src="../Assets/Templetes/Main/lib/waypoints/waypoints.min.js"></script>
    <script src="../Assets/Templetes/Main/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../Assets/Templetes/Main/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../Assets/Templetes/Main/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../Assets/Templetes/Main/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../Assets/Templetes/Main/lib/twentytwenty/jquery.event.move.js"></script>
    <script src="../Assets/Templetes/Main/lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="../Assets/Templetes/Main/js/main.js"></script>
</body>

</html>