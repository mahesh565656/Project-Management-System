<?php
include "includes/header.php";
?>
<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
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

            <?php if (isset($_SESSION["email"])) : ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <!--     <img class="rounded-circle me-lg-2" src="<?php // echo $_SESSION['image']; 
                                                                            ?>" alt="" style="width: 40px; height: 40px;"> -->
                        <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["name"]; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="logout.php" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Blank Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row  bg-light rounded align-items-center justify-content-center mx-0">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Projects</h6>
                    <div class="table-responsive">
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM projects");
                        if (mysqli_num_rows($result) > 0) {
                        ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">College Name</th>
                                        <th scope="col">Domain</th>
                                        <th scope="col">Languages</th>
                                        <th scope="col">View Project</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    $i = 0;
                                    while ($row = mysqli_fetch_array($result)) {

                                    ?>
                                        <tr>
                                            <th scope="row"><?php  echo $row['id']; ?></th>
                                            <td><?php echo $row['proname']; ?></td>
                                            <td><?php echo $row['collagename'];
                                                ?></td>
                                            <td><?php echo $row['domain']; ?></td>
                                            <td><?php echo $row['languages']; ?>
                                            </td>

                                            <td><a href="detail.php?id=<?php echo $row['id'];?>">View</a></td>
                                        </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                <?php
                            } else {
                                echo "No result found";
                            }
                                ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blank End -->

</div>
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