<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Home</title>

<head>
    <?php

    include 'php/head.php'

    ?>


</head>

<body>

    <!-- header starts -->
    <?php

    include 'php/header.php'

    ?>
    <!-- header ends -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="assets/img/hero-carousel/hero-carousel-4.svg" class="img-fluid animated">
            <h2>Welcome to <span>Placement Portal</span></h2>
            <p>Department Of Computer Applications</p>
            <p>Bharathiar University, Coimbatore</p>
            <div class="d-flex">
                <a href="login.php" class="btn-get-started scrollto">Login</a>

            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="" class="stretched-link">Login</a></h4>
                            <p>Students can use here to login </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4><a href="" class="stretched-link">Register</a></h4>
                            <p>Register yourself here.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="" class="stretched-link">Look for companies</a></h4>
                            <p>You can search for companies here.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                            <h4><a href="" class="stretched-link">Apply for Drives</a></h4>
                            <p>Look for eligibilty criteria and apply for companies accordingly.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->




        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>DCA <em>Genesis</em> </h3>
                        <p>The Department of Computer Applications was established in the year 2008.  It has its roots from the year
                            1985 and it is one of the well known departments in the field of computer applications education and
                            research. It plays a vital role in both academic and research contributions to the society.  The Department
                            of Computer Applications offers Master of Computer Applications (M.C.A.), M.Sc. Data Analytics, M.Sc
                            Cyber Security, M.Phil. Computer Science and Ph.D. Computer Science programmes.  It imparts the state-
                            of-the-art computer knowledge to students so that they are ready to solve the real-world challenges.
                        </p>
                        <a class="cta-btn align-self-start" href="#">Get Started</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="img">
                            <img src="assets//img//feature-7.jpg" alt="" class="img-fluid animated">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Call To Action Section -->


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->



        <!-- ======= Features Section ======= -->
        <section id="objectives" class="features" name="objectives">
            <div class="container" data-aos="fade-up">



                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Objectives</h3>
                                <p class="fst-itali">
                                    Our Placement Portal serves various objectives:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Developing the students to meet the Industries recruitment process.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> To motivate students to develop Technical knowledge and soft skills in
                                        terms of career planning, goal setting.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> To produce world-class professionals who have excellent analytical skills,
                                        communication skills, team building spirit and ability to work in cross cultural
                                        environment.</li>

                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets//img//features-1.svg" alt="" class="img-fluid animated">
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->





                    <section id="statistics" class="content-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center latest-job margin-bottom-20">
                                    <h1>Our Statistics</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM job_post";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Total Drives</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-paper"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM company WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Job Offers</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE resume!=''";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>CV'S/Resume</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-list"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-red">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Daily Users</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-stalker"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                    </section>
                    <!-- ======= F.A.Q Section ======= -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <?php

    include 'php/footer.php';
    ?>

    <!-- End Footer -->

    <!-- TPO bot -->

                                            

    <!-- tpo bot ends -->



</body>

</html>