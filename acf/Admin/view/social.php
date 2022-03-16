<?php 
          include('includes/header.php');
          include('includes/sidenav.php');
          include('includes/topnav.php');
           
?>

<style type="text/css">
  
  #myTable_filter{

    float:right;
  }
  #myTable_paginate{

    float:right;
  }
  th{

    color:#fff;
    font-size:20px!important;
    text-transform:uppercase;
  }

  tr{

    text-align:center;
  }

  form{

    margin:0px;
  }
</style>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary" style="margin-bottom:20px;">
                  <h4 class="card-title" style="text-transform:uppercase;"><b>SOCIAL NETWORK LINK</b></h4>
                  <p class="card-category"> RECENT SOCIAL NETWORK LINK</p>

                </div>
                <div class="card-body">
                  <div class="">
                   <form action="../controller/checkData.php?ptype=<?=base64_encode('social')?>" method="POST" name="social" onsubmit=" return checkData()" enctype="multipart/form-data">

                                <?php

                                      $select="SELECT * FROM social";
                                      $querySelect=$objFun->sql($select);
                                      if($querySelect->num_rows>0){

                                          $rowId=$querySelect->fetch_assoc();

                                ?>

                                <div class="" style="margin-bottom:10px;">
                                    <lable><b>FACEBOOK:</b></lable>
                                    <input type="text" name="facebook" class="form-control" value="<?=$rowId['facebook']?>">
                                </div>
                                <div class="" style="margin-bottom:10px;">
                                  <lable><b>LINKEDIN:</b></lable>
                                  <input type="text" name="linkedin" class="form-control" value="<?=$rowId['linkedin']?>">
                                </div>
                                <div class="" style="margin-bottom:10px;">
                                  <lable><b>YOUTUBE:</b></lable>
                                  
                                  <input type="text" name="youtube" class="form-control" value="<?=$rowId['youtube']?>">
                                </div>
                                <div class="" style="margin-bottom:10px;">
                                    <lable><b>TWITER:</b></lable>
                                    <input type="text" name="twiter" class="form-control" value="<?=$rowId['twiter']?>">
                               </div>
                               <div class="" style="margin-bottom:10px;">
                                    <lable><b>INSTAGRAM:</b></lable>
                                    <input type="text" name="instagram" class="form-control" value="<?=$rowId['instagram']?>">
                               </div>

                             <?php } ?>
                               <div class="" style="margin-bottom:10px;">
                                <button type="submit" name="submit" class="btn btn-success form-control" value="">Save Changes</button>
                               </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
      <?php include('includes/footer.php'); ?>

      

      <script type="text/javascript">
        
          $(document).ready( function () {

            $('#myTable').DataTable();
        } );

      </script>

<!-- =====================================================Notification==================================================================== -->
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


<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
