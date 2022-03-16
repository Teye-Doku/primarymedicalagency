<?php 
    include('includes/header.php');
    include('includes/navbar.php'); 
?>
        <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="assets/images/bg-wide.jpg" alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Login</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Result -->
        <section id="result" class="logss offers">
            <div class="container">
            <div class="row items">
                <div class="col-12 col-md-4 pr-md-5 text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-0">ACTF | FIRM</span>
                            <h2><span class="featured"><span>Login</span></span></h2>
                            <blockquote><p>Assistance Business Service Consulting® mission is to provide professional and 
                                paraprofessional services to clients in their homes, assisting them to achieve the 
                                highest level of potential in their day-to-day self-care activities.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" class="col-12 col-md-7 item acts cardss">
                    <div class="card-body card-body--padding--2">
                        <h3 class="card-title"><i class="fas fa-user mr-2"></i> Login</h3>

                        <?php

                                if(isset($_SESSION['error']))
                                {

                        ?>
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" style="background: none;">&times;</button>
                          <strong><?=$_SESSION['error']?></strong>
                        </div>
                        <?php 
                                }

                                unset($_SESSION['error']);
                        ?>
                        
                        <form action="controller/signin.php" method="POST">
                            <div class="form-group">
                                <label for="signup-email">Email address</label>
                                <input id="signup-email" type="email" name="email" class="form-control" placeholder="customer@example.com" required="">
                            </div>
                            
                            <div class="form-group">
                                <label for="signup-password">Password</label>
                                <input id="signup-password" type="password" name="password" class="form-control" placeholder="Enter Password" required="">
                            </div>
                            <div class="btnslr">
                                <div class="form-group mb-0">
                                    <button type="submit" id="login" name="login" class="btn btn-primary mt-3">Login</button>
                                </div>
                                <div class="form-group mb-0">
                                    <a href="package">
                                    <button type="button" id="regis" class="btn btn-primary mt-3" name="signup">Register</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
  

<?php include('includes/footer.php'); ?> 