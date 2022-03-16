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
                  <h4 class="card-title" style="text-transform:uppercase;"><b>HR STAFFING</b></h4>
                  <p class="card-category"> RECENT HR STAFFING</p>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
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
                          Dob
                        </th>
                        <th class="text-center">
                          Address One
                        </th>
                        <th class="text-center">
                          Address Two
                        </th>
                        <th class="text-center">
                          City
                        </th>
                        <th class="text-center">
                          State
                        </th>
                        <th class="text-center">
                          zip
                        </th>
                        <th class="text-center">
                          Country
                        </th>
                        <th class="text-center">
                          Interested
                        </th>
                        <th class="text-center">
                          Gender
                        </th>
                        <th class="text-center">
                          Contact You
                        </th>
                        <th class="text-center">
                          Find Us
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
                                  $data=$objFun->selectData('hr_staffing',$where);
                                  
                                  $i=1;
                                  
                                  if(!empty($data)){
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <?=$value['firstName']?>
                          </td>
                          <td>
                             <?=$value['lastName']?>
                          </td>
                          <td><?=$value['eamil']?></td>
                          <td><?=$value['phoneNumber']?></td>
                          <td><?=$value['dateBirth']?></td>
                          <td><?=$value['AddressOne']?></td>
                          <td><?=$value['AddressTne']?></td>
                          <td><?=$value['City']?></td>
                          <td><?=$value['State']?></td>
                          <td><?=$value['zip']?></td>
                          <td><?=$value['Country']?></td>
                          <td><?=$value['Interested']?></td>
                          <td><?=$value['Gender']?></td>
                          <td><?=$value['contactyou']?></td>
                          <td><?=$value['findus']?></td>
                          <td><?=$value['Comments']?></td>
                          
                          <td>
                            
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('hrstaffing')?>">
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