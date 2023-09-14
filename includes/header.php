<?php 
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">


                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>

               <?php  if(isset($_SESSION["email"])) :?>
                        <div class="d-flex align-items-center ms-4 mb-4">
                            <div class="position-relative">
                           <!--     <img class="rounded-circle" src="<?php // echo $_SESSION["image"]; ?>" alt="" style="width: 40px; height: 40px;">  -->
                                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0"><?php  echo $_SESSION["name"]; ?></h6>
                                <span>Admin</span>
                            </div>
                        </div>
<?php endif; ?>
              
            




                <div class="navbar-nav w-100">
               
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>University/College </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signup-college.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Sign Up</a>
                            <a href="signin-college.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Sign In</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Student </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signup-user.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Sign Up</a>
                            <a href="signin-user.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Sign In</a>
                        </div>
                    </div>
                  
                </div>
            </nav>
        </div>
       
        <!-- Sidebar End -->