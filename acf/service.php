<?php 
    include('includes/header.php');
    include('includes/navbar.php'); 


   


    // service name
    if(!empty($_GET['id']))
        { 
            $sid= base64_decode($_GET['id']);
        }else{
            $sid="";
        }
    $whereCondition1="WHERE id='$sid' OR name='$sid'";
    $selectServiceName1= $objFun->selectData('services',$whereCondition1);

    if(!empty($selectServiceName1))
        {
                                        
            foreach ($selectServiceName1 as $valueServiceName1) 
                {

                   $_SESSION['serviceName']= $valueServiceName1['name'];
                    $_SESSION['serviceId']=   $valueServiceName1['id'];

                    $query="SELECT * FROM about_services WHERE service_name='".$_SESSION['serviceName']."'";
                    $serviceDetail= $objFun->sql($query);
                    $resultServiceDetail=$serviceDetail->fetch_assoc();

                    $resultServiceDetail['id'];

                }
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
                                        <li class="breadcrumb-item active" aria-current="page"><?=$_SESSION['serviceName']?></li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text"><?=$_SESSION['serviceName']?></h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Result -->
        <section id="result" class="srvss">
            <div class="container">
            <div class="row items">
                <div class="col-12 col-md-4 pr-md-5 text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-0">Services</span>
                            <h2><span class="featured"><span><?=$_SESSION['serviceName']?></span></span></h2>
                            <blockquote><p style="text-align:justify;"><?=strip_tags($resultServiceDetail['title_description'])?></p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" class="col-12 col-md-7 item acts">
                    
                    
                     <form id="regForm" action="controller/serviceData" method="post">
                        <!-- One "tab" for each step in the form: -->
                        
                        <div id="error" style="color:red;    position: absolute;left: 10%;top: 18%;">
                            
                        </div>
                        <div style="display:<?php if(!empty($_SESSION['servicesend'])){ echo "block";  }else{ echo "none"; }?>;">
                            <div class="text-center">
                            <img src="check-circle.gif" style=" width: 35%;">
                            <h4>Successfully Sent</h4>
                            </div>
                            <?php


                                if(!empty($_SESSION['servicesend'])){

                            ?>
                            <script type = "text/JavaScript">
                                 AutoRefresh(5000);
                                function AutoRefresh( t ) {
                                   setTimeout("location.reload(true);", t);
                                }
                            
                          </script>
                      <?php } ?>
                        </div> 
                        <?php //unset($_SESSION['servicesend']); ?>
                        <div style="display:<?php if(!empty($_SESSION['servicesend'])){ echo "none";  }else{ echo "block"; }?>;">
                        <?php 


                                    $whereCat="WHERE service_id='".$_SESSION['serviceId']."'";
                                    $selectServiceCategoty= $objFun->selectData('parent_category',$whereCat);


                                    $balercode=sizeof($selectServiceCategoty);

                                    if(!empty($selectServiceCategoty))
                                    {
                                        $pageNo=0;
                                        foreach ($selectServiceCategoty as $valueCategory) {

                                                $categoryName=strtolower(str_replace(' ','',$valueCategory['name']));

                                                $categoryId=$valueCategory['id'];


                        ?>
                        <div class="tab">
                            <h1><?=$valueCategory['name']?></h1>

                            <div class="mt-1 mb-1">
                                <br>
                            </div>
                            

                            <?php

                                $whereSub="WHERE parent='".$valueCategory['id']."'";
                                    $selectServiceSubCategoty= $objFun->selectData('sub_category',$whereSub);

                                    if(!empty($selectServiceSubCategoty))
                                    {
                                        foreach ($selectServiceSubCategoty as $valueSubCategory) {

                            ?>

                            
                            <div class="number1">
                                <input type="radio" id="inputvalue" name="<?=substr($categoryName,0,4)?>" value="<?=$valueSubCategory['subcategory']?>" onchange="nextPrev(1)">
                                <label for="male"><?=$valueSubCategory['subcategory']?></label><br>
                            </div>

                            <?php }}?>
                            
                        </div>

                        <?php $pageNo++; } unset($_SESSION['servicesend']); ?> 


                            <div class="tab">
                                <h1>Where do you need the <?=$_SESSION['serviceName']?>?</h1>
                                <p>The postcode or town for the address where you want the <?=$_SESSION['serviceName']?>.</p>
                                <div id="jk" style="color:red;"></div>
                                <div class="number1 textnumber">
                                    
                                    <input type="text" id="pin" name="pin" class="form-control field-name" placeholder="Enter your postcode or town" required>
                                    
                                </div>
                                 <!-- <button type="submit">Continue</button> -->
                            </div>


                    <?php }?>
               
                        
                        <div style="overflow:auto;">
                          <div class="pvbtns">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Back</button>
                            <button type="button" id="nextBtn" onclick="showerror()">Continue</button>

                            <button type="button" id="nextBtnCust" style="display:none;position: absolute;left: 80%;
" onclick="checkData()">Submit</button>
                          </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">

                            <!--Count Page No   -->
                          <?php for($i=1; $i<=$pageNo;$i++){ ?>  
                          <span class="step"></span>
                          <?php } ?>
                        </div>
                         </div>
                      </form>
                   
                </div>
            </div>
            </div>
        </section>

       
<?php include('includes/footer.php'); ?>      
<script>
    function showerror(){
        document.getElementById('error').innerHTML='** PLEASE SELECT A OPTION';
        setTimeout(myFunction, 2000);
    }
    function myFunction(){
        document.getElementById('error').innerHTML='';
        //document.getElementById('error').style.display='none';
    }

    function checkData()
    {
        var pin=document.getElementById('pin').value;
         if(pin==""){
            document.getElementById('jk').innerHTML="** Please Enter Your Post Code";
            //return false;
         }          
         else{
            nextPrev(1);
         }
                    
    }
</script>    
