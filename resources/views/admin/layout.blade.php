<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>admin dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
</head>

<body>
    <div class="container-xxl position-relative  d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3"style="background-color:#012b3c ;">
            <nav class="navbar  navbar-light" >
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 style="color: #f95c19;"><i class="fa fa-hashtag me-2"></i>Dashboard</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-white">Arib rico</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/dashboard" class="nav-item nav-link  text-white"><i class="fa fa-tachometer-alt text-dark me-2"></i>Dashboard</a>
                        <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown"><i class="fa fa-cubes text-dark me-2"></i>Elements</a>
                    <a href="/widget" class=" nav-item nav-link text-white"><i class="fa fa-box-open text-dark me-2"></i> view parcels</a>
                    <a href="form.html" class="nav-item nav-link text-white"><i class="fa fa-user-plus text-dark me-2"></i>add rider</a>
                    <a href="/viewrider" class="nav-item nav-link text-white"><i class="fa fa-users text-dark me-2"></i>view riders</a>
                    
                </div>
            </nav>
        </div>

@yield('content')
            <!-- Back to Top -->
      

    <!-- JavaScript Libraries -->
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