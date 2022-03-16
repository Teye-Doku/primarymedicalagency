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
  tr th{
    min-width:171px;
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
                  <a href="addproduct">
                     <button class="pull-right btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i></button>
                  </a>
                  <h4 class="card-title" style="text-transform:uppercase;"><b>JOB</b></h4>
                  <p class="card-category"> RECENT JOB</p>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px;">
                          #
                        </th>
                        <th class="text-center">
                          Category
                        </th>
                        <th class="text-center">
                          Job Name
                        </th>
                        <th class="text-center">
                          Job Type
                        </th>
                        <th class="text-center">
                          Location
                        </th>
                        <th class="text-center">
                          Sallary
                        </th>
                        <th class="text-center">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('job',$where);

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
                                  $where="WHERE id='".$value['category']."'";
                                  $data=$objFun->selectData('sub_category',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value2) {
                                        
                                        
                                        
                                         $where="WHERE id='".$value2['parent']."'";
                                         $data=$objFun->selectData('parent_category',$where);
                                         if(!empty($data))
                                         {
                                             foreach ($data as $value1) {
                                                 
                                                 echo $value1['name'];
                                             }
                                         }
                                    }
                                  }
                            ?>
                          </td>
                          <td style="width:30%;">
                             <?=$value['job_title']?> 
                          </td>
                          <td>
                              <?=$value['job_type']?>
                          </td>
                          <td>
                             <?=$value['location']?>
                          </td>
                          <td>
                             <?=$value['salary']?>
                          </td>
                          <td style="width:20%;">
                            <a href="editProduct?id=<?=$value['id']?>">
                            <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            </a>
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('job')?>">
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
              <h5 class="modal-title" id="exampleModalLabel">ADD MENU</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/checkData.php?ptype=<?=base64_encode('menuname')?>" method="POST" name="menu" onsubmit=" return checkData()" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="" style="margin-bottom:10px;">
                        <div id="menuMessage" style="color:red;"></div>
                        <lable>Menu Name:</lable>
                        <input type="text" name="mname" class="form-control">
                    </div>
                    <div class="" style="margin-bottom:10px;">
                        <div id="urlMessage" style="color:red;"></div>
                        <lable>Url:</lable>
                        <input type="text" name="url" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>

      <script type="text/javascript">
        
          $(document).ready( function () {

            $('#myTable').DataTable();
        } );

      </script>
<!-- ===============================================================Validation============================================================ -->
      <script type="text/javascript">
        function checkData()
        {

             var menu=  document.menu.mname.value;
             var url=   document.menu.url.value;
             if(menu==''){

                document.getElementById('menuMessage').innerHTML='* Please Enter Menu Name';

                return false;
             }

             if(url==''){

                document.getElementById('urlMessage').innerHTML='* Please Enter Url';

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

     <script type="text/javascript">
       
        function status(value,id){

            var pvalue= value;
            var pid=    id;


            $.ajax({

                type:'post',
                url:  '../controller/updateData.php?pid=<?=base64_encode('status')?>',
                data:  {postvalue:pvalue,postid:pid},

                success: function(response){
                  location.reload();
                }


            });
        }

     </script>