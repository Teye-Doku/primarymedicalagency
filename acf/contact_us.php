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
                        <video class="full-image to-bottom" data-mask="70" src="assets/videos/work.mp4" autoplay muted loop></video>  

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Contact Us</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="cpss form contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Send a message</span>
                                <h2>Get in <span class="featured"><span>Touch</span></span></h2>
                                <p>We will respond to your message as soon as possible.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <form action="send.php" method="post" >
                                    <input type="hidden" name="section" value="nexgen_form">

                                    <!--<input type="hidden" name="reCAPTCHA">-->
                                    <!-- Remove this field if you want to disable recaptcha -->

                                    <div class="row form-group-margin">
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="name" class="form-control field-name" placeholder="Name">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="email" name="email" class="form-control field-email" placeholder="Email">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="phone" class="form-control field-phone" placeholder="Phone">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <i class="icon-arrow-down mr-3"></i>
                                            <select name="info" class="form-control field-info">
                                                <option value="" selected disabled>More Info</option>
                                                <option value="Audit & Assurance">Audit & Assurance</option>
                                                <option value="Financial Advisory">Financial Advisory</option>
                                                <option value="Analytics and M&A">Analytics and M&A</option>
                                                <option value="Middle Marketing">Middle Marketing</option>
                                                <option value="Legal Consulting">Legal Consulting</option>
                                                <option value="Regulatory Risk">Regulatory Risk</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12 m-0 p-2 input-group">
                                            <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12 col-12 m-0 p-2 input-group">
                                            <span class="form-alert"></span>
                                        </div>
                                        <div class="col-12 input-group m-0 p-2">
                                            <!--<a class="btn primary-button" name="submit">SEND</a>-->
                                            <button class="btn btn-primary" name="submit">SEND</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="contacts">
                            <h4>Example Inc.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Curabitur convallis, diam a egestas iaculis, neque lorem interdum felis, in viverra lacus tortor in leo.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        470-238-6885
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        bmacorp@yahoo.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        2480 Windy Hill Rd., SE Suite 206 Marietta, Georgia 30067
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
        
<?php include('includes/footer.php'); ?>