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
                                        <li class="breadcrumb-item active" aria-current="page">Service Packages
                                        </li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Service Packages
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section id="pricing" class=" odd plans">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">Select Package First</span>
                        <h2><span class="featured"><span>Select</span></span> Package</h2>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">

                    <?php 
                            $count=1;
                            $sql="";
                            $selectPackage= $objFun->selectData('package',$sql);

                            if(!empty($selectPackage))
                            {
                                foreach ($selectPackage as $valuePackage) {
                                    

                    ?>
                    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                        <div data-aos="fade-up"  class="card">
                            <?php 

                                    if($count==2){

                            ?>
                            <span class="badge">Most<br>Popular</span>
                          <?php } ?>
                            <a href="register?id=<?=base64_encode($valuePackage['id'])?>" class="choose-plan"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                            <i class="icon icon-globe"></i>
                            <h4><?=$valuePackage['package_name']?></h4>
                            <span class="price">
                                <i>$</i><?=$valuePackage['package_price']?><span class="plan"> / mo</span>
                            </span>                            
                            <ul class="list-group list-group-flush">

                                <?php 
                                    // fetaure
                                    $sqlCon="WHERE package_id='".$valuePackage['id']."'";
                                    $packageFeature= $objFun->selectData('package_value',$sqlCon);

                                    foreach ($packageFeature as $valuePackageFeature) {
                                ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span><?=$valuePackageFeature['package_option']?></span>
                                    <?php 


                                            if($valuePackageFeature['status']=="yes"){

                                    ?>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                <?php } else{ ?>
                                    <i class="icon-min m-0 fas fa-times text-right"></i>
                                <?php } ?>
                                </li>

                               <?php } ?>
                            </ul>
                        </div>
                    </div>

                <?php $count++; }} ?>
                    
                </div>
            </div>
        </section>



   <?php include('includes/footer.php'); ?>