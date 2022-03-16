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
                  <a href="PackageDetail">
                   <button class="pull-right btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i></button>
                 </a>
                  <h4 class="card-title" style="text-transform:uppercase;"><b>PACKAGE</b></h4>
                  <p class="card-category"> RECENT PACKAGE</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px; width:5%;">
                          #
                        </th>
                        <th class="text-center" style="width:20%;">
                          Package
                        </th>
                        <th class="text-center" style="width:25%;">
                          Feature
                        </th>
                        <th class="text-center" style="width:30%;">
                          Status
                        </th>
                        <th class="text-center" style="width:20%;">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('package_value',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <?php
                                  $packageId=$value['package_id'];

                                  $whereCon="WHERE id='$packageId'";
                                  $package=$objFun->selectData('package',$whereCon);
                                  foreach ($package as $Packagevalue) {

                                    echo $Packagevalue['package_name'];
                                  }
                              ?>
                          </td>
                          <td>
                              <?=$value['package_option']?>
                          </td>
                          <td>
                              <?=$value['status']?>
                          </td>
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#editModal<?=$value['id']?>">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>

                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('packagedetail')?>">
                            <button class="btn btn-danger">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                            </a>
                           
                          </td>
                        </tr>

                      <?php 
                            $i++;
                          }
                            
                          } 
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
      <?php include('includes/footer.php'); ?>

   

     
<!-- ==============================================================UpdateData==================================================================== -->
    
    <?php

            $where="";
            $data1=$objFun->selectData('package_value',$where);
            if(!empty($data1)){
              $i=1;
              foreach ($data1 as $value1) {
    ?>
    <div class="modal fade" id="editModal<?=$value1['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT PACKAGE FEATURE</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/editData.php?ptype=<?=base64_encode('packagefeature')?>" method="POST" name="service">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?=$value1['id']?>">
                    <div class="" style="margin-bottom:10px;">
                         <label>Service Name <span style="color:red;">*</span></label>
                            <select class="form-control" name="packagename" >
                                <option value=""> Select Service</option>
                                <?php

                                  $where="";
                                  $data=$objFun->selectData('package',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                                ?>
                                <option value="<?=$value['id']?>" <?php if($value['id']==$value1['package_id']){echo "Selected";}?>><?=$value['package_name']?></option>
                                <?php }} ?>
                            </select>
                      </div>

                      <div class="" style="margin-bottom:10px;">
                        <label>Feature</label>
                        <input type="text" name="feature" class="form-control" value="<?=$value1['package_option']?>">
                        
                      </div>
                      <div class="" style="margin-bottom:10px;">
                        <label>Status</label>
                        <input type="radio" name="status"  value="yes" required <?php if($value1['status']=="yes") {echo "checked";} ?>> Yes
                        <input type="radio" name="status" value="no" required <?php if($value1['status']=="no") {echo "checked";} ?>> No
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>

  <?php }} ?>

      <script type="text/javascript">
        
          $(document).ready( function () {

            $('#myTable').DataTable();
        } );

      </script>
<!-- ===============================================================Validation============================================================ -->
     
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

     