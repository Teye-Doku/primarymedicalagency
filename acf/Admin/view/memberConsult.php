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
                  <h4 class="card-title" style="text-transform:uppercase;"><b>Member Consult</b></h4>
                  <p class="card-category"> Recent Member Consult</p>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px;">
                          #
                        </th>
                        <th class="text-center">
                          Name
                        </th>
                        
                        <th class="text-center">
                         Title
                        </th>
                        <th class="text-center">
                          Contact Type
                        </th>
                        <th class="text-center">
                          Address Line 1
                        </th>
                        <th class="text-center">
                          Address Line 2
                        </th>
                        <th class="text-center">
                          City
                        </th>
                        <th class="text-center">
                         State/Province/Region
                        </th>
                        <th class="text-center">
                          Postal
                        </th>
                        <th class="text-center">
                          Country
                        </th>
                        <th class="text-center">
                          Eamil ID
                        </th>
                        <th class="text-center">
                          Email Notifications
                        </th>
                        <th class="text-center">
                          Phone Number
                        </th>
                        <th class="text-center">
                          Extention
                        </th>
                        <th class="text-center">
                          Mobile Number
                        </th>
                        <th class="text-center">
                          Fax
                        </th>
                        <th class="text-center">
                          Directory Office Description
                        </th><th class="text-center">
                          Certification Type
                        </th>
                        <th class="text-center">
                          Licensing State
                        </th>
                        <th class="text-center">
                         License Expiration Date
                        </th>
                        <th class="text-center">
                        License Number
                        </th>
                        <th class="text-center">
                         Practicing Now
                        </th>
                         <th class="text-center">
                         Name of Medical Institution
                        </th>
                         <th class="text-center">
                         Graduation Year
                        </th>
                        <th class="text-center">
                         Professional Affiliated Memberships
                        </th>
                        <th class="text-center">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('member_consult',$where);
                                  
                                  $i=1;
                                  
                                  if(!empty($data)){
                                    foreach ($data as $value) {
                         ?>
                         
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <?=$value['prefix']." ".$value['first_name']." ".$value['last_name']?>
                          </td>
                          <td>
                             <?=$value['title']?>
                          </td>
                          <td><?=$value['contact_type']?></td>
                          <td><?=$value['address_one']?></td>
                          <td><?=$value['address_two']?></td>
                          <td><?=$value['city']?></td>
                          <td><?=$value['state']?></td>
                          <td><?=$value['pin']?></td>
                          <td><?=$value['country']?></td>
                          <td><?=$value['email']?></td>
                          <td><?=$value['email_notification']?></td>
                          <td><?=$value['phone_number']?></td>
                          <td><?=$value['phone_extention']?></td>
                          <td><?=$value['mobile_number']?></td>
                          <td><?=$value['fax']?></td>
                          <td><?=$value['description']?></td>
                          <td><?=$value['certification_type']?></td>
                          <td><?=$value['licensing_state']?></td>
                          <td><?=$value['license_expiration_date']?></td>
                          <td><?=$value['license_number']?></td>
                          <td><?=$value['practicing_now']?></td>
                          <td><?=$value['name_of_medical_institution']?></td>
                          <td><?=$value['graduation_year']?></td>
                          <td><?=$value['professional_affiliated_memberships']?></td>
                          
                        
                          <td>
                            
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('memberConsult')?>">
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