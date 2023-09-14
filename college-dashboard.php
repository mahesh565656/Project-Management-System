
<?php 
 
include "config.php";

if (isset($_POST['submit'])) {

    $name = $_POST['proname'];
    $col = $_POST['collagename'];
    $domain = $_POST['domain'];
    $language = $_POST['languages'];
    $desc = $_POST['description'];
    $query = "INSERT INTO projects(proname,collagename,domain,languages,description) VALUES ('$name','$col', '$domain', '$language','$desc')";
    $sql = mysqli_query($conn, $query) or die("Could Not Perform the Query");
    echo  "<script>window.location.href='index.php'</script>";
}

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
                                <h6 class="mb-0"><?php  echo $_SESSION["email"]; ?></h6>
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
<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <?php if (isset($_SESSION["email"])) : ?>
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control border-0" type="search" placeholder="Search">
            </form>

            <div class="navbar-nav align-items-center ms-auto">


                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <!--        <img class="rounded-circle me-lg-2" src="<?php // echo $_SESSION['image']; ?>" alt="" style="width: 40px; height: 40px;">  -->
                        <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["colname"]; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="logout.php" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
    <?php endif; ?>

    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row  bg-light rounded align-items-center justify-content-center mx-0">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">


                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i></h3>
                        </a>
                        <h3>Upload Projects</h3>
                    </div>
                    <form method="post" action="college-dashboard.php">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="proname" placeholder="jhondoe">
                            <label for="floatingText">Project Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="collagename" placeholder="name@example.com">
                            <label for="floatingInput">College Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="domain" placeholder="name@example.com">
                            <label for="floatingInput">Domain</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="languages" placeholder="Password">
                            <label for="floatingPassword">Programming Languages Used</label>
                        </div>

                        <div class="form-floating" style="height:200px;">
                            <input style="height:200px; padding-top:0;" type="text" class="form-control" name="description" placeholder="Profile Picture">
                            <label for="floatingPassword">Description</label>
                        </div>




                        <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Upload</button>

                    </form>
                </div>
            </div>
        </div>
    </div>



</div>
</div>
</div>
</div>
<!-- Blank End -->


<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>