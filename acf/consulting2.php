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
                                        <li class="breadcrumb-item active" aria-current="page">Consulting
                                        </li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Consulting
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="section-3 odd showcase blog-grid projects" style="padding-bottom: 15px;">
            <div class="container full-grid">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">Our</span>
                        <h2 class="mb-0" style="margin-top: 0px;">Vendor<span class="featured"><span> List</span></span></h2>
                    </div>
                </div>
                <div class="swiper-container mid-slider items" data-perview="4"> 
                    <div class="swiper-wrapper">
                        
                        <?php 
                        
                                  $selectUser= $objFun->sql("SELECT * FROM user WHERE role='Vendor'");

                    				if($selectUser->num_rows>0)
                    				{
                    				    while($resultUser=$selectUser->fetch_assoc())
                    				    {
                    				    
                    				    if(!empty($resultUser['ratting']) && !empty($resultUser['comment']))
                    				    {
                    				        
                    				
                        
                        
                        
                        ?>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="<?php if(!empty($resultUser['image'])){echo $resultUser['image'];}else{echo "assets/images/unnamed.jpg"; }?>" alt="userlist" style="width:343px; height:360px;">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="javascript:void(0);" class="d-lg-flex align-items-center">
                                            <?php 
                                            
                                                $total=$resultUser['ratting'];
                                                $count=1;
                                                for($i=1; $i<=5;$i++)
                                                {
                                                    if($count<=$total)
                                                    {
                                                        echo "<i class='fa fa-star'></i>";
                                                    }else{
                                                        
                                                        echo "<i class='icon-star'></i>";
                                                    }
                                                    $count++;
                                                }
                                            
                                            
                                            ?>
                                            
                                        </a>
                                 </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <h4><?=$resultUser['first_name']?></h4>
                                            <p><?=$resultUser['comment']?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php 
                        
                    				    }
                    				}
                    				}
                        
                        ?>
                    
                    </div>
                </div>
            </div>
        </section>
        <section class="section-3 odd showcase blog-grid projects" style="padding-top: 0px;">
            <div class="container full-grid">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">Our</span>
                        <h2 class="mb-0" style="margin-top: 0px;">Subscriber<span class="featured"><span> List</span></span></h2>
                    </div>
                </div>
                <div class="swiper-container mid-slider items" data-perview="4"> 
                    <div class="swiper-wrapper">
                           
                        <?php 
                        
                                  $selectUser1= $objFun->sql("SELECT * FROM user WHERE role='Subscriber'");

                    				if($selectUser1->num_rows>0)
                    				{
                    				    while($resultUser1=$selectUser1->fetch_assoc())
                    				    {
                    				    
                    				    if(!empty($resultUser1['ratting']) && !empty($resultUser1['comment']))
                    				    {
                    				        
                    				
                        
                        
                        
                        ?>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="<?php if(!empty($resultUser1['image'])){echo $resultUser1['image'];}else{echo "assets/images/unnamed.jpg"; }?>" alt="userlist" style="width:343px; height:360px;">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="javascript:void(0);" class="d-lg-flex align-items-center">
                                               <a href="javascript:void(0);" class="d-lg-flex align-items-center">
                                            <?php 
                                            
                                                $total1=$resultUser1['ratting'];
                                                $count1=1;
                                                for($ir=1; $ir<=5;$ir++)
                                                {
                                                    if($count1<=$total1)
                                                    {
                                                        echo "<i class='fa fa-star'></i>";
                                                    }else{
                                                        
                                                        echo "<i class='icon-star'></i>";
                                                    }
                                                    $count1++;
                                                }
                                            
                                            
                                            ?>
                                            
                                        </a>
                                        </a>
                                 </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <h4><?=$resultUser1['first_name']?></h4>
                                            <p><?=$resultUser1['comment']?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php 
                        
                    				    }
                    				}
                    				}
                        
                        ?>
                    </div>
                </div>
            </div>
        </section>
<?php include('includes/footer.php'); ?>