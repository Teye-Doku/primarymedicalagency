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
                  
                  <h4 class="card-title" style="text-transform:uppercase;"><b>DELIVERY ADDRESS</b></h4>
                  <p class="card-category" style="text-transform:uppercase;"> Product Delivery Address</p>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center"  >
                          #
                        </th>
                        <th class="text-center" >
                          User Name
                        </th>
                        <th class="text-center"  >
                          Product Name
                        </th>
                        <th class="text-center"  >
                          Recipient Name
                        </th>
                        <th class="text-center"  >
                          Email
                        </th>
                        <th class="text-center"  >
                          Address
                        </th>
                        <th class="text-center"  >
                          City
                        </th>
                        <th class="text-center"  >
                          Zip
                        </th>
                        <th class="text-center"  >
                          Mobile No
                        </th>
                       <!--  <th class="text-center"  >
                          Status
                        </th> -->
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('delivery_address',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td style="width:30%;">
                             <?php  
                                  $uid=$value['user_id'];
                                  $user=$objFun->sql("SELECT first_name,last_name FROM user WHERE id='$uid'");
                                  $userName=$user->fetch_assoc();
                                  echo $userNm=$userName['first_name']." ".$userName['last_name'];
                              ?> 
                          </td>
                          <td>
                              <?php 
                                  $pid=$value['product_id'];
                                   $productName=$objFun->sql("SELECT product_name FROM product WHERE id='$pid'");
                                   $resultName=$productName->fetch_assoc();
                                   echo $resultName['product_name'];
                              ?>
                             
                          </td>
                          <td>
                             <?=$value['name']?>
                          </td>
                          <td>
                              <?=$value['email']?>
                          </td>
                          <td>
                             <?=$value['address']?>
                          </td>
                          <td>
                             <?=$value['city']?>
                          </td>
                          <td>
                             <?=$value['zip']?>
                          </td>

                          <td>
                             <?=$value['mobile']?>
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

     

      <script type="text/javascript">
        
          $(document).ready( function () {

            $('#myTable').DataTable();
        } );

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

     