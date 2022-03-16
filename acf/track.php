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
                        <img src="assets/images/track.jpg" alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Track</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Track</h1>
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
                <div data-aos="fade-up" class="col-12 item acts cardss">
                    <div class="card-body card-body--padding--2">
                        <h3 class="card-title"><i class="fas fa-share-square mr-2"></i>Type your Unique No. which is sent in email and track your status.</h3>
                            <form action="status" method="POST">
                            <div class="form-group">
                                <label for="unique_no">Unique No.</label>
                                <input id="unique_no" name="uniqueid" type="text" class="form-control" placeholder="Unique No.">
                            </div>
                            <div class="btnslr">
                                <div class="form-group mb-0">
                                    <button type="submit" name="search" id="unique" class="btn btn-primary mt-3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
  

<?php include('includes/footer.php'); ?> 