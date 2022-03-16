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
                   <!-- <button class="pull-right btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i></button> -->
                  <h4 class="card-title" style="text-transform:uppercase;"><b>RECENT MEDICAL APPOINTMENT</b></h4>
                  <p class="card-category"> RECENT MEDICAL APPOINTMENT</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px;">
                          #
                        </th>
                        <th class="text-center">
                          First Name
                        </th>
                        <th class="text-center">
                          Last Name
                        </th>
                        <th class="text-center">
                          Email
                        </th>
                        <th class="text-center">
                          Phone
                        </th>
                        <th class="text-center">
                          Comments
                        </th>
                        <th class="text-center">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('appoint_medical',$where);
                                  
                                  $i=1;
                                  
                                  if(!empty($data)){
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <?=$value['fname']?>
                          </td>
                          <td>
                             <?=$value['lname']?>
                          </td>
                          <td><?=$value['email']?></td>
                          <td><?=$value['phone']?></td>
                          <td><?=$value['comments']?></td>
                          <td>
                            
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('appointMedical')?>">
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

    


    <!-- ==========================================================UpdateData================================================================= -->
    
    

  
      <script type="text/javascript">
        
          $(document).ready( function () {

            $('#myTable').DataTable();
        } );

      </script>
<!-- ===============================================================Validation============================================================ -->
      <script type="text/javascript">
        function checkData()
        {

             var category= document.categoryfrm.category.value;
             var subcategory= document.categoryfrm.subcategory.value;

             if(category==''){

                document.getElementById('catMessage').innerHTML='* Please Select Category Name';

                return false;
             }

             if(subcategory==''){

                document.getElementById('subMessage').innerHTML='* Please Enter Sub Category Name';

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