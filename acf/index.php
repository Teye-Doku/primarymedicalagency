<?php 
    include('includes/header.php');
    include('includes/navbar.php'); 
?>
   

        <!-- Hero -->
        <section id="slider" class="hero p-0">
            <div class="swiper-container full-slider animation slider-h-100 slider-h-auto">

                <!-- Particles -->
                <div id="particles-1" class="full-image" data-mask="50"></div>     
                
                <!-- Media -->

                <?php




                                  $where="ORDER BY id DESC LIMIT 1";
                                  $slider=$objFun->selectData('slider',$where);
                                  
                                  $i=1;
                                  
                                  if(!empty($slider)){
                                    foreach ($slider as $valueslider) {
                        


                ?>
                <div class="parallax-x-bg" style="background-image:url(Admin/<?=substr($valueslider['image'],3)?>)" data-swiper-parallax="-50%"></div>
            <?php } } ?>

                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <div class="slide-content row">
                            <div class="col-12 d-flex justify-content-start inner">
                                <div class="left text-left">


                                     <?php




                                          $whereCon="ORDER BY id DESC LIMIT 1";
                                          $sliderContent=$objFun->selectData('slider_content',$whereCon);
                                          
                                          $i=1;
                                          
                                          if(!empty($sliderContent)){
                                            foreach ($sliderContent as $valuesliderContent) {
                                 ?>
                                    <!-- Content -->
                                    <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text"><?=$valuesliderContent['content_one']?> <br><span class="featured"><span><?=$valuesliderContent['content_two']?></span></span></h1>
                                    <p data-aos="zoom-in" data-aos-delay="2400" class="description" style="text-align:justify;"><?=$valuesliderContent['content_three']?></p>
                                <?php 

                                    } } 
                                ?>
                                    <!-- Action -->
                                    <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                        <div class="d-sm-inline-flex">
                                            <a href="#" class="smooth-anchor mt-4 btn primary-button">FIND OUT MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
       <!-- Services -->
        <section class="section-3 odd showcase blog-grid projects" style="padding-bottom: 0px;">
            <div class="container full-grid">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">We do more for everyone</span>
                        <h2 class="mb-0">OUR <span class="featured"><span>SERVICES</span></span></h2>
                    </div>
                </div>
                <div class="swiper-container mid-slider items" data-perview="4"> 
                    <div class="swiper-wrapper">

                        <?php 

                            $sql="";
                            $selectService= $objFun->selectData('about_services',$sql);

                            if(!empty($selectService))
                            {
                                foreach ($selectService as $valueService) {
                                    # code...
                                


                        ?>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="Admin/<?=$valueService['image']?>" alt="Lorem ipsum" style="height:360px; width:343px;">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="service?name=<?=str_replace(' ','_',$valueService['service_name'])?>&id=<?=base64_encode($valueService['service_name'])?>">
                                            <h4><?=$valueService['service_name']?></h4>
                                            <p><?=$valueService['title']?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } } ?>
                  <!--       <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/news-2.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Services 2</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/news-3.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Services 3</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/news-4.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Services 4</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/news-5.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="accounting.html">
                                            <h4>Accounting</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/news-1.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="consulting.html">
                                            <h4>Consulting</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/news-2.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Services 7</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/news-5.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="webdesign.html">
                                            <h4>Web Design</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Vendor List -->
        <section class="section-6 odd showcase blog-grid projects" style="padding-top: 0px;">
            <div class="container full-grid">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">List of Users</span>
                        <h2 class="mb-0">Vendors <span class="featured"><span>and</span> Subscribers</span></h2>
                    </div>
                </div>
                <div class="swiper-container mid-slider items" data-perview="4"> 
                    <div class="swiper-wrapper">
                        <?php 
                        
                                  $selectUser1= $objFun->sql("SELECT * FROM user");

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
                                    <div class="card-body svname">
                                        <a href="javascript:void(0);">
                                            <h4><?=$resultUser1['first_name']?>(<?=$resultUser1['role']?>)</h4>
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
        <!-- About -->
        <section id="about" class="section-2 odd highlights image-right featured">
            <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0 rest">
                            <span class="pre-title m-auto m-md-0">Main Areas of Work Advanced Network Consulting Services.</span>
                            <h2><span class="featured"><span>The</span></span> RESULTS</h2>
                        </div>
                    </div>
                    <div class="row items homeresult">                             
                        <div data-aos="fade-up" class="col-12 col-md-6 p-0 pr-md-4 item">
                            <h4><img class="iconimg" src="assets/icon/mid-icon1.png"> BUILD CAREERS & EDUCATION</h4>
                            <p>ECA analytical capabilities</p>
                        </div>           
                        <div data-aos="fade-up" class="col-12 col-md-6 p-0 item">
                            <h4><img class="iconimg" src="assets/icon/mid-icon2.png"> FORMULATE PUBLIC SOLUTIONS</h4>
                            <p>MAcroeonomic and structural policy</p>
                        </div> 
                    </div>
                    <div class="row items homeresult"> 
                        <div data-aos="fade-up" class="col-12 col-md-6 p-0 item">
                            <h4><img class="iconimg" src="assets/icon/mid-icon3.png"> DESIGN SERVICE CONSULTATION</h4>
                            <p>Innovative Financing Models</p>
                        </div>  
                        <div data-aos="fade-up" class="col-12 col-md-6 p-0 pr-md-4 item">
                            <h4><img class="iconimg" src="assets/icon/mid-icon4.png"> INTEGRATE BUSINESS ASSOCIATIONS</h4>
                            <p>Regional and sub-regional transboundary initiatives</p>
                        </div>
                    </div>
                    <div class="row items homeresult"> 
                        <div data-aos="fade-up" class="col-12 col-md-6 p-0 item">
                            <h4><img class="iconimg" src="assets/icon/mid-icon5.png">LAW ADVOCATE</h4>
                            <p>Continental idea at the global level</p>
                        </div>  
                        <div data-aos="fade-up" class="col-12 col-md-6 p-0 pr-md-4 item">
                            <h4><img class="iconimg" src="assets/icon/mid-icon6.png"> CALL</h4>
                            <p>470-238-6885</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0 image">
                    <img src="assets/images/about-4.jpg" class="fit-image" alt="Fit Image">
                </div>
            </div>
            </div>
        </section>
            <!-- Process -->
            <section id="process" class="section-1 process offers gfts">
                <div class="container full">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <span class="pre-title">We do more for everyone</span>
                            <h2 class="mb-0">OUR <span class="featured"><span>STRATEGIC FRAMEWORK</span></span></h2>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center items">
                        <div class="col-12 col-md-6 col-lg-2 item">
                            <div class="step"><span>01</span></div>
                            <h4>Build</h4>
                            <p>ECA analytical capabilities</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2 item">
                            <div class="step"><span>02</span></div>
                            <h4>Formulate</h4>
                            <p>MAcroeonomic and structural policy</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2 item">
                            <div class="step"><span>03</span></div>
                            <h4>Design</h4>
                            <p>Innovative Financing Models</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2 item">
                            <div class="step"><span>04</span></div>
                            <h4>Integrate</h4>
                            <p>Regional and sub- regional transboundary initiatives</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2 item">
                            <div class="step"><span>05</span></div>
                            <h4>Advocate</h4>
                            <p>Continental idea at the global level</p>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Contact -->
        <section id="contact" class="section-6 form contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Statement</span>
                                <h2>OUR <span class="featured"><span>MISSION</span></span></h2>
                                <?php 

                                    $sql="";
                                    $selectAbout= $objFun->selectData('about_us',$sql);

                                    if(!empty($selectAbout))
                                    {
                                        foreach ($selectAbout as $valueAbout) {
                                            # code...
                                        


                                ?>
                                <p style="text-align:justify;"><?=$valueAbout['mission']?></p>
                                <p style="text-align:justify;"><?=$valueAbout['vission']?></p>


                            <?php } } ?>
                            </div>
                        </div>                       
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="contacts">
                            <img src="assets/useer/btm2-img1.png" alt="USER">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Services -->
        <section id="services" class="section-1 offers featured gfts">
            <div class="container fms">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">We do more for everyone</span>
                        <h2 class="mb-0">ACNI | FIRM <span class="featured"><span>FORMS</span></span></h2>
                    </div>
                </div>
                <div class="row justify-content-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card ab">
                            <img class="resulticn" src="assets/icon/icon1.png">
                            <h4>Member Consult Forms</h4>
                            <p style="font-size: 14px;">Refer a client with ease through our online referral form.</p>
                            <a href="http://www.vaishalinews.com/acf/member-consult-form"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card cd">
                            <img class="resulticn" src="assets/icon/icon2.png">
                            <h4>Evaluation Consult</h4>
                            <p style="font-size: 14px;">We will conduct an assessment to evaluate your situation.</p>
                            <a href="http://www.vaishalinews.com/acf/evaluation-consult"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card ef">
                            <img class="resulticn" src="assets/icon/icon3.png">
                            <h4>Payment Consult Options</h4>
                            <p style="font-size: 14px;">Allow us to help you with processing payments claims for services.</p>
                            <a href="http://www.vaishalinews.com/acf/payment-consult-option.php"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card gh">
                            <img class="resulticn" src="assets/icon/icon4.png">
                            <h4>Affiliate Consult Referrals</h4>
                            <p style="font-size: 14px;">We accept consulting referrals. Send your referrals online.</p>
                            <a href="#"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card ij">
                            <img class="resulticn" src="assets/icon/icon5.png">
                            <h4>On-Call Consult Survey</h4>
                            <p style="font-size: 14px;">Let us know how we are doing. Answer our online survey today!</p>
                            <a href="#"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card kl">
                            <img class="resulticn" src="assets/icon/icon6.png">
                            <h4>H.R. Consult Staffing</h4>
                            <p style="font-size: 14px;">Need more staff members? You can count on our HR staffing expertise.</p>
                            <a href="http://www.vaishalinews.com/acf/h-r-staffing"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card mn">
                            <img class="resulticn" src="assets/icon/icon7.png">
                            <h4>Lab Asst Consult Service</h4>
                            <p style="font-size: 14px;">Our LabAsst service helps you stay up-to-date on your health status.</p>
                            <a href="http://www.vaishalinews.com/acf/labasst-service"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php include('includes/footer.php'); ?>