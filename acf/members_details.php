<?php 
    include('includes/header.php');
    include('includes/navbar.php');
    
    if(isset($_GET['id']))
    {
        $_SESSION['useraccount']=base64_decode($_GET['id']);
    }
    
    $sql="WHERE id='".$_SESSION['useraccount']."'";
    $selectUser= $objFun->selectData('user',$sql);
                                     
    if(isset($_POST['review']))
    {
        $rating=        $objFun->checkData($_POST['rating']);
        $message=       $objFun->checkData($_POST['message']);
        $userid=        $_SESSION['useraccount'];
        
        
       $upadeUser="UPDATE `user` SET `ratting`='$rating',`comment`='$message' WHERE id='$userid'";
         if($objFun->sql($upadeUser)){
             
             echo "<script>alert('Thank You For Given Us a Feedback!')</script>";
         }
    }
    
    
    // if(isset($_POST['message']))
    // {
        
        
    //     $message=        $objFun->checkData($_POST['usermessage']);
    //     $senderId=       $_SESSION['userid'];
    //     $reciverid=      $_SESSION['useraccount'];  
    //     if(!empty($message))
    //     {
    //         $insertMessage="INSERT INTO `message`(`sender_id`, `reciver_id`, `message`) VALUES ('$senderId','$reciverid','$message')";
    //         if($objFun->sql($insertMessage))
    //         {
             
    //          echo "<script>alert('Your Message Send Successfully!')</script>";
    //         }
    //     }
    // }
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
        <section id="result" class="section-1 offers" style="padding-bottom: 10px;">
            <div class="container">
            <div class="row items">
                <div class="col-12 text">
                    <div data-aos="fade-up"  class="row intro">
                        
                        <?php 
                        
                        
                                 if(!empty($selectUser))
                                {
                                                                     
                                    foreach($selectUser as $resultUser)
                                    {
                                        
                                
                                    
                        
                        ?>
                        <div class="col-12 p-0">
                             <h2><span class="featured">Name:</span> <?=$resultUser['first_name']?></h2>
                             <a href="controller/logout">
                                    <button class="btn btn-danger fffs">logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>
                             </a>
                            <!--<form class="form-horizontal" action="#" role="form">-->
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-3 mgbt-xs-20">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <div class="form-img text-center mgbt-xs-15"> <img alt="example image" src="<?php if(!empty($resultUser['image'])){ echo $resultUser['image']; }else{ echo "assets/images/unnamed.jpg"; } ?>"> </div>
                                                    <div class="starshow">
                                                        <?php 
                                            
                                                            $total1=$resultUser['ratting'];
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
                                                    </div>
                                                    <div class="cmmts">
                                                    	<hr>
                                                    	<h3 class="mgbt-xs-15">Comment regarding this services</h3>
                                                    	<form action="" method="POST">
                                                    		<fieldset>
                                                    			<div class="row">
                                                    				<div class="form-group input-group slcs">
                                                    					<label for="select-role">Select Rating</label> <i class="icon-arrow-down mr-3"></i>
                                                    					<select name="rating">
                                                    						<option value="" selected="">----Select----</option>
                                                    						<option value="1">One Star</option>
                                                    						<option value="2">Two Star</option>
                                                    						<option value="3">Three Star</option>
                                                    						<option value="4">Four Star</option>
                                                    						<option value="5">Five Star</option>
                                                    					</select>
                                                    				</div>
                                                    			</div>
                                                    			<div class="row">
                                                    				<div class="col-12 input-group p-0">
                                                    					<textarea name="message" data-minlength="3" class="form-control" placeholder="Message" required=""></textarea>
                                                    				</div>
                                                    			</div>
                                                    			<div class="col-12 input-group p-0">
                                                    				<button id="next-3" class="send btn primary-button" type="submit" name="review">COMMENT</button>
                                                    			</div>
                                                    		</fieldset>
                                                    	</form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 bbbs">
                                            
                                           <div class="messaging" id="msgdiv">
                                            	<div class="inbox_msg">
                                            		<div class="mesgs">
                                            			<div class="msg_history">
                                            			    
                                            			    <?php 
                                            			    
                                            			           $sql1="WHERE (sender_id=".$_SESSION['userid']." OR reciver_id=".$_SESSION['userid'].") AND (reciver_id=".$_SESSION['useraccount']." OR sender_id=".$_SESSION['useraccount'].") ORDER BY id ASC";
                                                                    $selectMessage= $objFun->selectData('message',$sql1);
                                                                    
                                                                    if(!empty($selectMessage))
                                                                    {
                                                                        foreach($selectMessage as $resultMessage)
                                                                        {
                                                                            
                                                                            $date=date_create($resultMessage['message_date']);
                                                                            $messageDate=date_format($date,"M d | H:i");
                                                                            
                                            			                    if($resultMessage['sender_id']==$_SESSION['userid'])
                                            			                    {
                                            			    
                                            			    ?>
                                            			
                                            				<div class="outgoing_msg">
                                            					<div class="sent_msg">
                                            						<p><?=$resultMessage['message']?></p> <span class="time_date"> <?=$messageDate;?></span> </div>
                                            				</div>
                                            				<?php 
                                            			                        
                                            			                    }
                                            			                    else{
                                            			                    
                                            			                    
                                            			                    ?>
                                            				
                                            			
                                            				<div class="incoming_msg">
                                            					<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            					<div class="received_msg">
                                            						<div class="received_withd_msg">
                                            							<p><?=$resultMessage['message']?></p> <span class="time_date"> <?=$messageDate;?></span></div>
                                            					</div>
                                            				</div>
                                            				<?php 	}}} ?>
                                            			</div>
                                            			<div class="type_msg">
                                            				<div class="input_msg_write">
                                            				  <form  action="javascript:vboid(0)" method="post" onsubmit="myFunction()" name="mform">
                                            					<input type="text" class="write_msg" id="message" placeholder="Type a message" name="usermessage" />
                                            					<button class="msg_send_btn" type="submit" ><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            				  </form>
                                            				</div>
                                            			</div> 
                                            		</div>
                                            	</div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        <!-- col-sm-12 -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- panel-body -->
                            <!--</form>-->
                        </div>
                        
                        
                        <?php 
                        
                        
                                    }
                                }
                        
                        
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </section>
         <section class="section-6 odd showcase blog-grid projects" style="padding-top: 0px;">
            <div class="container full-grid">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2 class="mb-0" style="margin-top: 0px;"><?php if($_SESSION['role']=='subscriber'){echo "Vendor"; }else{ echo "Subscriber";}?><span class="featured"><span> List</span></span></h2>
                    </div>
                </div>
                <div class="swiper-container mid-slider items" data-perview="4"> 
                    <div class="swiper-wrapper">
                        <?php 
                        
                                    
                    				        
                    				if($_SESSION['role']=='subscriber')
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
<?php include('includes/footer.php'); ?>


<script>
    function myFunction() {
   
        
        var senderid=       '<?=$_SESSION["userid"]?>';
        var reciverid=      '<?=$_SESSION['useraccount']?>';
        var sendmessage=    document.mform.usermessage.value;
        
        if(senderid!=='' && reciverid!=='' && sendmessage!=='')
        {
           $.ajax({
               
               type:'POST',
               url:'controller/message.php',
               data:{sid:senderid,rid:reciverid,smessage:sendmessage},
               success: function(response){
                    
                //   location.reload();
                $("#msgdiv").load(window.location.href + " #msgdiv" );
               }
           }); 
        }
    }
</script>