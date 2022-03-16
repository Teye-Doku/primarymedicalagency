<?php 
    include('includes/header.php');
    include('includes/navbar.php'); 
    if(!empty($_GET['id'])){

        $packageId=base64_decode($_GET['id']);
    }else{

       $packageId=""; 
    }
    
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
                                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Register</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Result -->
        <section id="result" class="offers">
            <div class="container">
            <div class="row items">
                <div class="col-12 col-md-4 pr-md-5 text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-0">ACTF | FIRM</span>
                            <h2><span class="featured"><span>Registration</span></span></h2>
                            <blockquote><p>Assistance Business Service Consulting® mission is to provide professional and 
                                paraprofessional services to clients in their homes, assisting them to achieve the 
                                highest level of potential in their day-to-day self-care activities.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" class="col-12 col-md-7 item acts cardss">
                    <div class="card-body card-body--padding--2">
                        <h3 class="card-title"><i class="fas fa-user mr-2"></i> Register</h3>

                        <?php

                                if(isset($_SESSION['msg']))
                                {

                        ?>
                        <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" style="background: none;">&times;</button>
                          <strong><?=$_SESSION['msg']?></strong>
                        </div>
                        <?php 
                                }

                                unset($_SESSION['msg']);
                        ?>

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
                        <form action="controller/signup.php" method="POST">
                            <div class="form-group">
                                <label for="signup-email">Email address</label>
                                <input id="signup-email" type="email" name="email" class="form-control" placeholder="customer@example.com" required>
                            </div>
                            <div class="form-group input-group slcs">
                            	<label for="select-role">Select Role</label> <i class="icon-arrow-down mr-3"></i>
                            	<select name="role" required="">
                            		<option value="">--Select Your Role--</option>
                            		<option value="vendor">Vendor</option>
                            		<option value="subscriber">Subscriber</option>
                            	</select>
                            </div>
                            <div class="form-group input-group slcs">
                                <label for="select-role">Select Package</label>
                                <i class="icon-arrow-down mr-3"></i>
                                <select name="info" required>
                                    <option value="">--Select Your Package--</option>
                                    <?php 
                                            
                                            $sql="";
                                            $selectPackage= $objFun->selectData('package',$sql);

                                            if(!empty($selectPackage))
                                            {
                                                foreach ($selectPackage as $valuePackage) {
                                    ?>
                                    <option value="<?=$valuePackage['id']?>" <?php if($valuePackage['id']==$packageId){echo "selected";} ?>><?=$valuePackage['package_name']?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="signup-password">Password</label>
                                <input id="signup-password" type="password" name="password" class="form-control" placeholder="Input Password" required="">
                            </div>
                            <div class="form-group">
                                <label for="signup-confirm">Repeat password</label>
                                <input id="signup-confirm" type="password" name="confirmPassword" class="form-control" placeholder="Conform Password" required>
                            </div>
                            <div class="btnslr">
                                <div class="form-group mb-0">
                                    <button type="submit" id="regis" class="btn btn-primary mt-3" name="signup">Register</button>
                                </div>
                                <div class="form-group mb-0">
                                    <a href="login">
                                    <button type="button" id="login" class="btn btn-primary mt-3 logs">Login</button>
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