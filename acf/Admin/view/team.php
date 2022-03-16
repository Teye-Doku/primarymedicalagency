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
                   <button class="pull-right btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
                  <h4 class="card-title" style="text-transform:uppercase;"><b>Team</b></h4>
                  <p class="card-category"> RECENT Team</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px; width:10%;">
                          #
                        </th>
                        <th class="text-center" style="width:20%;">
                          Name
                        </th>
                        <th class="text-center" style="width:20%;">
                          Designation
                        </th>
                         <th class="text-center" style="width:30%;">
                          Image
                        </th>
                        <th class="text-center" style="width:20%;">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('team',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <?=$value['name']?>
                          </td>
                           <td>
                              <?=$value['designation']?>
                          </td>
                          <td>
                            <img src="../<?=$value['image']?>" style="width:40%;">
                          </td>
                          <td>
                            <!-- <button class="btn btn-success" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> -->
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('team')?>">
                                <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

      <!-- =========================================================INSERT DATA================================================================ -->

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">ADD TEAM</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/checkData.php?ptype=<?=base64_encode('team')?>" method="POST" name="categorytype" onsubmit=" return checkData()" enctype="multipart/form-data">
                <div class="modal-body">
                    
                    <div class="form-group">
                        
                        <lable>Name:</lable>
                        <div id="typeMessage" style="color:red;"></div>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        
                        <lable>Designation:</lable>
                        <div id="typeMessage" style="color:red;"></div>
                        <input type="text" name="designation" class="form-control" placeholder="Enter Designation">
                    </div>

                    <div class="">
                        
                        <lable>Image:</lable>
                        <div id="imageMessage" style="color:red;"></div>
                        <input type="file" name="image" class="" placeholder="Enter Your Type">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>

<!-- ========================================================Updatedata============================================================== -->

 <?php

                                  $where="";
                                  $data1=$objFun->selectData('product_type',$where);

                                  if(!empty($data1)){
                                    $i=1;
                                    foreach ($data1 as $value1) {
  ?>



<div class="modal fade" id="editModal<?=$value1['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT PRODUCT TYPE</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/editData.php?ptype=<?=base64_encode('type')?>" method="POST" name="categorytype" onsubmit=" return checkData()">
                <div class="modal-body">
                    
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$value1['id']?>">
                        <lable>Product Type:</lable>
                        <div id="typeMessage" style="color:red;"></div>
                        <input type="text" name="type" class="form-control" placeholder="Enter Your Type" value="<?=$value1['type']?>">
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
      <script type="text/javascript">
        function checkData()
        {

             var type= document.categorytype.type.value;
             var image= document.categorytype.image.value;
            
             if(type==''){

                document.getElementById('typeMessage').innerHTML='* Please Enter Product Type';

                return false;
             }

             if(image==''){

                document.getElementById('imageMessage').innerHTML='* Please Choose A Image';

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