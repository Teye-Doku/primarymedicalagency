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
                  <h4 class="card-title" style="text-transform:uppercase;"><b>ADD SERVICE DETAIL</b></h4>
                  <p class="card-category"> SERVICE DETAIL</p>

                </div>
                <div class="card-body">
                    <form class="" method="POST" action="../controller/checkData.php?ptype=<?=base64_encode('servicedetal')?>" enctype="multipart/form-data">
                      <div class="" style="margin-bottom:10px;">
                         <label>Service Name <span style="color:red;">*</span></label>
                            <select class="form-control" name="servicename" required>
                                <option value=""> Select Service</option>
                                <?php

                                  $where="";
                                  $data=$objFun->selectData('services',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                                ?>
                                <option value="<?=$value['name']?>"><?=$value['name']?></option>
                                <?php }} ?>
                            </select>
                      </div>
                      <div class="" style="margin-bottom:10px;">
                         <label>Title</label>
                         <input type="text" name="stitle" class="form-control">
                      </div>
                      <div class="" style="margin-bottom:10px;">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" required>
                      </div>

                       <div class="" style="margin-bottom:10px;">
                         <label>Description</label>
                        <textarea name="editor1" class="form-control"></textarea>
                      </div>
                     <!--   <div class="" style="margin-bottom:10px;">
                         <label>Sub Title</label>
                         <input type="text" name="stitle" class="form-control">
                      </div>
                       <div class="" style="margin-bottom:10px;">
                         <label>Description</label>
                         <textarea name="editor2" class="form-control"></textarea>
                      </div> -->
                      <div class="">
                          <button class="btn btn-primary" type="submit" name="submit">ADD</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
      <?php include('includes/footer.php'); ?>
      <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script>
                        CKEDITOR.replace( 'editor1' );
        </script>
        
         <!-- <script>
                        CKEDITOR.replace( 'editor2' );
        </script> -->

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