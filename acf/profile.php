<?php 
    include('includes/header.php');
    include('includes/navbar.php');
    
    if(isset($_POST['review']))
    {
        $rating=        $objFun->checkData($_POST['rating']);
        $message=       $objFun->checkData($_POST['message']);
        $userid=        $_SESSION['userid'];
        
        
       $upadeUser="UPDATE `user` SET `ratting`='$rating',`comment`='$message' WHERE id='$userid'";
         if($objFun->sql($upadeUser)){
             
             echo "<script>alert('Thank You For Given Us a Feedback!')</script>";
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
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard
                                        </li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Dashboard
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Result -->
        <section id="result" class="section-1 offers">
            <div class="container">
            <div class="row items">
                <div class="col-12 text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0">
                           

                            <?php 

                                $sql="WHERE id='".$_SESSION['userid']."'";
                                $selectUser= $objFun->selectData('user',$sql);

                                if(!empty($selectUser))
                                {
                                    foreach ($selectUser as $valueUser) {

                                       
                                        # code...
                            ?>



                            
                                <div class="panel-body">
                                    <h2><span class="featured">Profile:</span> <?=$valueUser['first_name']?></h2>
                                    <a href="controller/logout">
                                    <button class="btn btn-danger fffs">logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>
                                    </a>
                                    <form class="form-horizontal" action="controller/profile" method="post" role="form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-3 mgbt-xs-20">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <div class="form-img text-center mgbt-xs-15"> <img alt="example image" src="<?php if(!empty($valueUser['image'])){ echo $valueUser['image'];}else{ echo "assets/images/big.jpg";}?>" style="width:250px; height:250px;"> </div>
                                                    <input id="fileInput" type="file" name="image" style="display:none;" />
                                                    <div class="form-img-action text-center mgbt-xs-20"> <a class="hmts vd_btn  vd_bg-blue" href="javascript:void(0);" onclick="document.getElementById('fileInput').click();"><i class="icon-cloud-upload append-icon"></i> Upload</a> </div>
                                                    <br>
                                                    <div>
                                                        <table class="tables table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60%;">Acc. Verification</td>
                                                                    <td class="rgtb">
                                                                        <span class="label label-success lbs">
                                                                         <?php if($valueUser['ac_status']==0){echo "Pending"; }else{ echo "Confirm";}?>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Member Since</td>
                                                                    <td class="rgtb"><span class="label label-success lbs"> <?=$valueUser['add_date']?></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60%;">Package</td>
                                                                    <td class="rgtb"><span class="label label-success lbs">
                                                                        <?php 
                                                                            $package=$valueUser['package'];
                                                                            $where="WHERE id='$package'";
                                                                            $packageName=$objFun->selectData('package',$where);
                                                                            foreach ($packageName as  $valuePackageName) {
                                                                                
                                                                                echo $valuePackageName['package_name'];
                                                                            }
                                                                        ?>
                                                                            
                                                                        </span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60%;">Payment</td>
                                                                    <td class="rgtb">
                                                                        <span class="label label-success lbs">
                                                                         <?php if($valueUser['payment_status']==0){echo "Pending"; }else{ echo "Confirm";}?>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60%;">Role</td>
                                                                    <td class="rgtb">
                                                                        <span class="label label-success lbs">
                                                                         <?=$valueUser['role']?>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60%;">Unique No.</td>
                                                                    <td class="rgtb"><span class="label label-success lbs"><?=$valueUser['unique_id']?></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="paylk"><a class="paylk" href="javascript:void(0)">Pay Now</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div style="margin-left:10px;">
                                            <h3 class="mgbt-xs-15">Account Setting</h3>

                                            <?php if(!empty($_SESSION['msg'])){ ?>
                                                <div class="alert alert-success alert-dismissible">
                                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                  <?=$_SESSION['msg']?>
                                                </div>
                                            <?php } unset($_SESSION['msg']); ?>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="email" name="email" placeholder="email@yourcompany.com" autocomplete="off" value="<?=$valueUser['email']?>" required> 
                                                        </div>
                                                        <!-- col-xs-12 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Select Package</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9 slrdo">

                                    <?php 
                                            
                                            $sql="";
                                            $selectPackage= $objFun->selectData('package',$sql);

                                            if(!empty($selectPackage))
                                            {
                                                foreach ($selectPackage as $valuePackage) {
                                    ?>
                                                            <input type="radio" id="silver" name="package" value="<?=$valuePackage['id']?>" <?php if($valueUser['package']==$valuePackage['id']){echo "checked"; } ?>>
                                                            <label for="silver"><?=$valuePackage['package_name']?></label><br>

                                    <?php }} ?>
                                                            
                                                        
                                                        </div>
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Password</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="password" name="password" class="width-40" placeholder="password" value="<?=$valueUser['password']?>" required> </div>
                                                        <!-- col-xs-12 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Confirm Password</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="password" name="conpass" class="width-40" placeholder="password" value="<?=$valueUser['password']?>" required> </div>
                                                        <!-- col-xs-12 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->
                                            <hr>
                                            <!-- form-group -->
                                            <h3 class="mgbt-xs-15">Profile Setting</h3>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text" name="username" class="width-40" placeholder="Mariah Carayban" value="<?=$valueUser['first_name']?>"></div>
                                                        <!-- col-xs-12 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Phone</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="number" name="phone" class="width-40" placeholder="1234567890" value="<?=$valueUser['mobile']?>"></div>
                                                        <!-- col-xs-12 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Gender</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9 slrdo">
                                                            <input type="radio" id="male" name="gender" value="male" <?php if($valueUser['gender']=="male"){echo "checked";}?>>
                                                            <label for="male">Male</label><br>
                                                            <input type="radio" id="female" name="gender" value="female"  <?php if($valueUser['gender']=="female"){echo "checked";}?>>
                                                            <label for="female">Female</label>
                                                        
                                                        </div>
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <div class="userupd">
                                                <button type="submit" id="regiss" name="profile" class="btn btn-primary mt-3">Updates</button>
                                            </div>
                                            </form>
                                            <!----comment Form--->
                                            <!--<div class="cmmt">-->
                                            <!--    <hr>-->
                                            <!--     <h3 class="mgbt-xs-15">Comment regarding this services</h3>-->
                                            <!--    <form action="" method="POST">-->
                                            <!--        <fieldset>-->
                                            <!--            <div class="row">-->
                                            <!--                <div class="form-group input-group slcs">-->
                                            <!--                    <label for="select-role">Select Rating</label>-->
                                            <!--                    <i class="icon-arrow-down mr-3"></i>-->
                                            <!--                    <select name="rating">-->
                                            <!--                        <option value="" selected>----Select----</option>-->
                                            <!--                        <option value="1">One Star</option>-->
                                            <!--                        <option value="2">Two Star</option>-->
                                            <!--                        <option value="3">Three Star</option>-->
                                            <!--                        <option value="4">Four Star</option>-->
                                            <!--                        <option value="5">Five Star</option>-->
                                            <!--                    </select>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--            <div class="row">-->
                                            <!--                <div class="col-12 input-group p-0">-->
                                            <!--                    <textarea name="message" data-minlength="3" class="form-control" placeholder="Message" required></textarea>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--            <div class="col-12 input-group p-0">-->
                                            <!--                <button id="next-3" class="send btn primary-button" type="submit" name="review">COMMENT</button>-->
                                            <!--            </div>-->
                                            <!--        </fieldset>-->
                                            <!--    </form>-->
                                            <!--</div>-->
                                            <!---comment form end--->
                                        </div>
                                        <!-- col-sm-12 -->
                                     </div>
                                    </div>
                                    <!-- row -->
                                </div>

                            <?php }} ?>
                                <!-- panel-body -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        
        
        <section class="section-6 odd showcase blog-grid projects" style="padding-top: 0px;">
            <div class="container full-grid">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2 class="mb-0" style="margin-top: 0px;"><?php if($valueUser['role']=='subscriber'){echo "Vendor"; }else{ echo "Subscriber";}?><span class="featured"><span> List</span></span></h2>
                    </div>
                </div>
                <div class="swiper-container mid-slider items" data-perview="4"> 
                    <div class="swiper-wrapper">
                        <?php 
                        
                                    $_SESSION['role']=$valueUser['role'];
                    				        
                    				if($valueUser['role']=='subscriber')
                                    {
                                        $role="vendor";
                                    }
                                    else{
                                        $role="subscriber";
                                    }
                            
                                     $sql="WHERE role='$role'";
                                     $selectRole= $objFun->selectData('user',$sql);
                                     
                                     if(!empty($selectRole))
                                     {
                                         
                                         foreach($selectRole as $resultUser1)
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
                                        <a href="http://vaishalinews.com/acf/members_details?id=<?=base64_encode($resultUser1['id'])?>">
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
                        
                        ?>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- About -->
       
<?php include('includes/footer.php'); ?>