<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="../Assets/Templetes/Admin/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../Assets/Templetes/Admin/assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .brand-logo {
      padding: 30px 15px;
      background-color: #f0f0f0;
    }
    .admin-title {
      font-size: 32px;
      font-weight: bold;
      color: #008b8b;
      text-transform: uppercase;
      letter-spacing: 2px;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
    }
    .admin-title i {
      font-size: 40px;
      margin-right: 15px;
      color: #008b8b;
    }
    .admin-title span {
      display: inline-block;
      vertical-align: middle;
    }
    .sidebar-link i {
      margin-right: 10px;
    }
  </style>
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img w-100">
            <h1 class="admin-title">
              <i class="fas fa-user-shield"></i>
              <span>ADMIN</span>
            </h1>
          </a>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Homepage.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
            <i class="fas fa-cogs nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Actions</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="District.php" aria-expanded="false">
                <span>
                <i class="fas fa-map-marked-alt"></i>
                </span>
                <span class="hide-menu">District</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Place.php" aria-expanded="false">
                <span>
                <i class="fas fa-map-pin"></i>
                </span>
                <span class="hide-menu">Place</span>
              </a>
            </li>
           
            <li class="sidebar-item">
              <a class="sidebar-link" href="Category.php" aria-expanded="false">
                <span>
                <i class="fas fa-tags"></i>
                </span>
                <span class="hide-menu">Category</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Vaccine.php" aria-expanded="false">
                <span> 
                <i class="fas fa-syringe"></i>
                </span>
                <span class="hide-menu">Vaccines</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Newcenter.php" aria-expanded="false">
                <span>
                <i class="fas fa-clinic-medical"></i>
                </span>
                <span class="hide-menu">New Center List</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ViewAllBooking.php" aria-expanded="false">
                <span>
                <i class="fas fa-calendar-check"></i>
                </span>
                <span class="hide-menu">Booking List</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Viewcentercomplaints.php" aria-expanded="false">
                <span>
                <i class="fas fa-comment-alt"></i>
                </span>
                <span class="hide-menu">View Center Complaints</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Viewcenterreplys.php" aria-expanded="false">
                <span>
                <i class="fas fa-reply"></i>
                </span>
                <span class="hide-menu">View Center Replys</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Viewcomplaints.php" aria-expanded="false">
                <span>
                <i class="fas fa-comments"></i>
                </span>
                <span class="hide-menu">View User Complaints</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="viewreplys.php" aria-expanded="false">
                <span>
                <i class="fas fa-comment-dots"></i>
                </span>
                <span class="hide-menu">View User Replys</span>
              </a>
            </li>

            <br><br>
  
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="../Logout.php" aria-expanded="false">
                <span>
                <i class="fas fa-sign-out-alt"></i>
                </span>
                <span class="hide-menu">Log out</span>
              </a>
            </li>  -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="../Assets/Templetes/Admin/assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div> -->
        </nav> 
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
     <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
       <!-- Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
          
              <!-- <a class="sidebar-link" href="../Logout.php" aria-expanded="false">
                <span>
                <i class="fas fa-sign-out-alt"></i>
                </span>
                <span class="hide-menu">Log out</span>
              </a>
            </li> -->
              <!-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> -->
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../Assets/Templetes/Admin/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
              <a class="sidebar-link" href="../Logout.php" aria-expanded="false">
                <span>
                <i class="fas fa-sign-out-alt"></i>
                </span>
                <span class="hide-menu">Log out</span>
              </a>
            </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
      <div class="row">