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
                  <h4 class="card-title" style="text-transform:uppercase;"><b>PACKAGE NAME</b></h4>
                  <p class="card-category"> RECENT PACKAGE</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px;">
                          #
                        </th>
                        <th class="text-center">
                          Name
                        </th>
                        <th class="text-center">
                          Price
                        </th>
                        <th class="text-center">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('package',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <?=$value['package_name']?>
                          </td>
                          <td>
                              <?=$value['package_price']?>
                          </td>
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#editModal<?=$value['id']?>">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>

                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('packageName')?>">
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

      <!-- =========================================================INSERT DATA================================================================ -->

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">ADD PACKAGE</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <form action="../controller/checkData.php?ptype=<?=base64_encode('packageName')?>" method="POST" name="categoryfrm" onsubmit=" return checkData()">
               <div class="modal-body">
                   <div class="form-group">
                        
                       <lable>Package Name:</lable>
                       <div id="nameMessage" style="color:red;"></div>
                       <input type="text" name="pname" class="form-control" placeholder="Enter Your Package Name" >
                   </div>
                   <div class="form-group">
                        
                       <lable>Package Price:</lable>
                       <div id="priceMessage" style="color:red;"></div>
                       <input type="text" name="pprice" class="form-control" placeholder="Enter Your Package Price" >
                   </div>
               </div>
               <div class="modal-footer">
                 <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
               </div>
           </form>
       </div>
     </div>
    </div>
<!-- ==============================================================UpdateData==================================================================== -->
    
    <?php

            $where="";
            $data1=$objFun->selectData('package',$where);
            if(!empty($data1)){
              $i=1;
              foreach ($data1 as $value1) {
    ?>
    <div class="modal fade" id="editModal<?=$value1['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT PACKAGE NAME</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/editData.php?ptype=<?=base64_encode('package')?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$value1['id']?>">
                        <lable>Name:</lable>
                        
                        <input type="text" name="pnm" class="form-control" placeholder="Enter Your Service Name" value="<?=$value1['package_name']?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$value1['id']?>">
                        <lable>Price:</lable>
                       
                        <input type="text" name="ppri" class="form-control" placeholder="Enter Your Service Name" value="<?=$value1['package_price']?>">
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

             var PackageName= document.categoryfrm.pname.value;
             var packagePrice= document.categoryfrm.pprice.value;

             if(PackageName==''){

                document.getElementById('nameMessage').innerHTML='* Please Enter Package Name';

                return false;
             }

             if(packagePrice==''){

                document.getElementById('priceMessage').innerHTML='* Please Enter Package Price';

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