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
                  <h4 class="card-title" style="text-transform:uppercase;"><b>LINKS</b></h4>
                  <p class="card-category"> RECENT LINKS</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px;">
                          #
                        </th>
                        <th class="text-center">
                          Link Name
                        </th>
                        <th class="text-center">
                          Url
                        </th>
                        <th class="text-center">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('links',$where);

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
                                    echo $sid=$value['name'];

                                 
                              ?>
                          </td>
                          <td>
                              <?=$value['url']?>
                          </td>
                          <td>
                            <!--<button class="btn btn-success" data-toggle="modal" data-target="#editModal">-->
                            <!--  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>-->
                            <!--</button>-->
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('url')?>">
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
              <h5 class="modal-title" id="exampleModalLabel">ADD LINKS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/checkData.php?ptype=<?=base64_encode('links')?>" method="POST" name="categoryfrm" onsubmit=" return checkData()">
                <div class="modal-body">

                    <div class="form-group">
                        
                        <lable>Name:</lable>
                        <div id="serviceMessage" style="color:red;"></div>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Link Name">
                    </div>

                    <div class="form-group">
                        
                        <lable>Url:</lable>
                        <div id="catMessage" style="color:red;"></div>
                        <input type="text" name="url" class="form-control" placeholder="Enter Your Link Url">
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
            $data1=$objFun->selectData('parent_category',$where);
            if(!empty($data1)){
              $i=1;
              foreach ($data1 as $value1) {
    ?>
    <div class="modal fade" id="editModal<?=$value1['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT CATEGORY</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/editData.php?ptype=<?=base64_encode('category')?>" method="POST" name="categoryfrm">
                <div class="modal-body">
                    <div class="form-group">
                        
                        <lable>Name:</lable>
                        <div id="serviceMessage" style="color:red;"></div>
                        <select name="sid" class="form-control">

                                <option value="">SELECT</option>
                             <?php

                                  $where2="";
                                  $data2=$objFun->selectData('services',$where2);

                                  if(!empty($data2)){
                                   
                                    foreach ($data2 as $value2) {
                             ?>
    
                                  <option value="<?=$value2['id']?>" <?php if($value1['service_id']==$value2['id']){ echo "Selected";}?>><?=$value2['name']?></option>

                          <?php }} ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$value1['id']?>">
                        <lable>Url:</lable>
                        <div id="catMessage" style="color:red;"></div>
                        <input type="text" name="updatecategory" class="form-control" placeholder="Enter Your Category Name" value="<?=$value1['name']?>">
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
             var serviceid= document.categoryfrm.name.value;
             var categoryname= document.categoryfrm.url.value;
             
             if(serviceid==''){

                document.getElementById('serviceMessage').innerHTML='* Enter Your Link Name';

                return false;
             }

             if(categoryname==''){

                document.getElementById('catMessage').innerHTML='* Enter Your Link url';

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