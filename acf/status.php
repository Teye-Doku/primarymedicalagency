<?php 
    include('includes/header.php');
    include('includes/navbar.php'); 
    
    
    if(isset($_POST['search']))
    {
        $uniqueid=      $objFun->checkData($_POST['uniqueid']);
        $selectUser= $objFun->sql("SELECT * FROM user WHERE unique_id='$uniqueid'");

				if($selectUser->num_rows>0)
				{
				    $resultUser=$selectUser->fetch_assoc();
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
                        <img src="assets/images/track.jpg" alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Status</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Status</h1>
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
                        <h3 class="card-title"><i class="fas fa-share-square mr-2"></i>Your Status</h3>
                           <div>
                               <table class="tables table-striped">
                                    <tbody>
                                        <tr>
                                            <td style="width:60%;">Acc. Verification</td>
                                             <td class="rgtb"><span class="label label-success lbs">  <?php if($resultUser['ac_status']==0){echo "Pending"; }else{ echo "Confirm";}?></span></td>
                                        </tr>
                                        <tr>
                                            <td>Member Since</td>
                                            <td class="rgtb"><span class="label label-success lbs"> <?=$resultUser['add_date']?></span></td>
                                        </tr>
                                        <tr>
                                            <td style="width:60%;">Package</td>
                                            <td class="rgtb">
                                                <span class="label label-success lbs">
                                                <?php 
                                                        
                                                        
                                                         
                                                                            $package=$resultUser['package'];
                                                                            $where="WHERE id='$package'";
                                                                            $packageName=$objFun->selectData('package',$where);
                                                                            foreach ($packageName as  $valuePackageName) {
                                                                                
                                                                                echo $valuePackageName['package_name'];
                                                                            }
                                                                       
                                                ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:60%;">Payment</td>
                                            <td class="rgtb"><span class="label label-success lbs"> <?php if($resultUser['payment_status']==0){echo "Pending"; }else{ echo "Confirm";}?></span></td>
                                        </tr>
                                        <tr>
                                            <td style="width:60%;">Role</td>
                                            <td class="rgtb"><span class="label label-success lbs"><?=$resultUser['role']?></span></td>
                                        </tr>
                                        <tr>
                                            <td style="width:60%;">Unique No.</td>
                                            <td class="rgtb"><span class="label label-success lbs"><?=$resultUser['unique_id']?></span></td>
                                        </tr>
                                    </tbody>
                               </table>
                                <a href="login">Login to know more details</a>
                            </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
  

<?php include('includes/footer.php'); ?> 