
<?php 
          include('includes/header.php');
          include('includes/sidenav.php'); 
          include('includes/topnav.php');
          

?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form name="profile" action="../controller/checkProfile.php" method="POST" onsubmit=" return checkData()" enctype="multipart/form-data">
                    <?php

                        $where="WHERE id='".$_SESSION['id']."'";
                        $data=$objFun->selectData('admin',$where);

                        if(!empty($data)){

                          foreach ($data as $value) {
                    ?>
                    <div class="row">
                      <div class="col-md-5">
                        <div id="cnameMessage" style="color:red;"></div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Company Name</label>
                          <input type="text" class="form-control" name="cname" value="<?=$value['company_name']?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div id="emailMessage" style="color:red;"></div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" value="<?=$value['email']?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div id="passMessage" style="color:red;"></div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" name="pass" value="<?=$value['password']?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div id="firstMessage" style="color:red;"></div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control" name="fname" value="<?=$value['owner_name']?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div id="lastMessage" style="color:red;"></div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" name="lname" value="<?=$value['owner_lastName']?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div id="addressMessage" style="color:red;"></div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control" name="address" value="<?=$value['address']?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div id="cityMessage" style="color:red;"></div>
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control" name="city" value="<?=$value['city']?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div id="countryMessage" style="color:red;"></div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control" name="country" value="<?=$value['country']?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div id="postcodeMessage" style="color:red;"></div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control" name="pin" value="<?=$value['pin_code']?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div id="aboutMessage" style="color:red;"></div>
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> About Your Company</label>
                            <textarea class="form-control" rows="5" name="about"><?=$value['about']?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div id="imageMessage" style="color:red;"></div>
                      <div class="col-md-4">
                        <div class="">
                          <label class="bmd-label-floating">Profile Image</label>
                          <input type="file" class="form-control" name="image">
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="<?=$value['image']?>" />
                  </a>
                </div>
                <div class="card-body">
                  <!-- <h6 class="card-category text-gray">CEO / Co-Founder</h6> -->
                  <h4 class="card-title"><?php echo $name=$value['owner_name']." ".$value['owner_lastName'];?></h4>
                  <p class="card-description" style="text-align:justify;">
                    <?=$value['about']?>
                  </p>
                  <!-- <a href="javascript:;" class="btn btn-primary btn-round">Follow</a> -->
                  
                </div>
              </div>
            </div>
          <?php } } ?>
          </div>
        </div>
      </div>
     
     <?php include('includes/footer.php'); ?>


     <script type="text/javascript">
        function checkData(){

            var companyName=      document.profile.cname.value;
            var email=            document.profile.email.value;
            var pass=             document.profile.pass.value;
            var Fname=            document.profile.fname.value;
            var Lname=            document.profile.lname.value;
            var Address=          document.profile.address.value;
            var city=             document.profile.city.value;
            var country=          document.profile.country.value;
            var pin=              document.profile.pin.value;
            var About=            document.profile.about.value;
            

            if(companyName==''){

              document.getElementById('cnameMessage').innerHTML="* Please Enter Your Company Name";
              return false;
            }

            if(email==''){

              document.getElementById('emailMessage').innerHTML="* Please Enter Your Email";
              return false;
            }

            if(pass==''){

              document.getElementById('passMessage').innerHTML="* Please Enter Your Company Password";
              return false;
            }

            if(Fname==''){

              document.getElementById('firstMessage').innerHTML="* Please Enter Your First Name";
              return false;
            }

            if(Lname==''){

              document.getElementById('lastMessage').innerHTML="* Please Enter Your Last Name";
              return false;
            }

            if(Address==''){

              document.getElementById('addressMessage').innerHTML="* Please Enter Your Address";
              return false;
            }

            if(city==''){

              document.getElementById('cityMessage').innerHTML="* Please Enter Your City";
              return false;
            }

            if(country==''){

              document.getElementById('countryMessage').innerHTML="* Please Enter Your Country";
              return false;
            }

            if(pin==''){

              document.getElementById('postcodeMessage').innerHTML="* Please Enter Post Code";
              return false;
            }

            if(About==''){

              document.getElementById('aboutMessage').innerHTML="* Please Write Something About Your Company";
              return false;
            }

           

        }
     </script>

     <script type="text/javascript">
       
       $(document).ready(function(){

          <?php 

              if(isset($_SESSION['msg'])){
          ?>
           md.showNotification('bottom','right','<?=$_SESSION["msg"]?>');
          <?php 
          }
            unset($_SESSION['msg']);
          ?>
        });
     </script>