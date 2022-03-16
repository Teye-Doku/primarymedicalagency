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
                   <!--<button class="pull-right btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i></button>-->
                  <h4 class="card-title" style="text-transform:uppercase;"><b>SERVICE IMAGE</b></h4>
                  <p class="card-category"> IMAGE</p>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                     
                            <form class="" method="POST" action="../controller/checkData.php?ptype=<?=base64_encode('image')?>" enctype="multipart/form-data">
                              <div class="">
                                 <label>Image</label>
                                 <input type="file" name="image" class="form-control">
                                 <input type="hidden" name="type" value="service">
                              </div>
                              <div class="">
                                  <button class="btn btn-primary">ADD</button>
                              </div>
                          </form>
                          
                        </div>
                    <div class="col-sm-8">
                        <div>
                         <?php

                                  $where="WHERE type='service'";
                                  $data=$objFun->selectData('image',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                            <img src="<?=$value['image']?>" style="width:50%;" >
                            
                       <?php }} ?>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
      <?php include('includes/footer.php'); ?>
        
      <!-- =========================================================INSERT DATA================================================================ -->

    
    

      <script type="text/javascript">
        
          $(document).ready( function () {

            $('#myTable').DataTable();
        } );

      </script>
<!-- ===============================================================Validation============================================================ -->
      <script type="text/javascript">
        function checkData()
        {

             
             var description=    document.seo.description.value;
             var keywords=       document.seo.keywords.value;


             

             if(description==''){

                document.getElementById('desMessage').innerHTML='* Please Enter Meta Description';

                return false;
             }

             if(keywords==''){

                document.getElementById('keyMessage').innerHTML='* Please Enter meta Keywords';

                return false;
             }
        }
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