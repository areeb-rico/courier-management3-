<!doctype html>
<html lang="en">

<head>
  <!-- extra -->
   <!-- Favicon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="admin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/admin/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    


    <!-- Libraries Stylesheet -->
    <link href="admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="admin/css/style.css" rel="stylesheet">

    <!-- extra -->


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>rider dashboard</title>
  <link rel="shortcut icon" type="image/png" href="rider/images/logos/favicon.png" />
  <link rel="stylesheet" href="rider/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!--  App Topstrip -->
    <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-left">
      

      <div class="d-lg-flex align-items-center gap-2">
         <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="rider/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
        <h3 class="text-white  mb-lg-0 fs-5 text-center">Rider Dashboard</h3>
        <div class="d-flex align-items-center justify-content-center gap-2">
          
         
        </div>
      </div>

    </div>
    <!-- Sidebar Start -->
    <aside class="left-sidebar" >
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="rider/images/logos/logo.png" alt="" / height="100px">
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-6"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                <i class="ti ti-atom"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="/viewparcels" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu"> View Parcels</span>
                </div>
                
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="/uploadparcel" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-shopping-cart"></i>
                  </span>
                  <span class="hide-menu">Upload a Parcel
                   </span>
                </div>
                
              </a>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-layout-grid"></i>
                  </span>
                  <span class="hide-menu">Front Pages</span>
                </div>
                
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="/updatelocation">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">ubdatelocation</span>
                    </div>
                    
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="#">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">About Us</span>
                    </div>
                    
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="#">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Blog</span>
                    </div>
                    
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="#">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Blog Details</span>
                    </div>
                    
                  </a>
                </li>
              </ul>
            </li>
             <li class="sidebar-item">
              <form action="/logout" method="post">
                        @csrf

              <a class="sidebar-link justify-content-between"  
                aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="fa fa-sign-out-alt"></i>
                  </span>
                  <span>
                     <button type="submit" class="nav-item nav-link hide-menu " >Logout</button>
                   </span>
                </div>   
              </a>
              </form>
            </li>

      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
 <!--  Main wrapper -->
    
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar">
<form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-item nav-link text-white" style="background-color: red; border: none;"><i class="fa fa-sign-out-alt text-dark me-2"></i>Logout</button>
  </form>

        </nav>
      </header>
      <!--  Header End -->
@yield('content2')
  </div>
  <script src="rider/libs/jquery/dist/jquery.min.js"></script>
  <script src="rider/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="rider/js/sidebarmenu.js"></script>
  <script src="rider/js/app.min.js"></script>
  <script src="rider/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="rider/libs/simplebar/dist/simplebar.js"></script>
  <script src="rider/js/dashboard.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  <!-- extra -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/admin/js/bootstrap.bundle.min.js"></script>
    <script src="admin/lib/chart/chart.min.js"></script>
    <script src="admin/lib/easing/easing.min.js"></script>
    <script src="admin/lib/waypoints/waypoints.min.js"></script>
    <script src="admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="admin/js/main.js"></script>
</body>

</html>
