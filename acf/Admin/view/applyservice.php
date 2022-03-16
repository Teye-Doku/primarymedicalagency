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
                  <h4 class="card-title" style="text-transform:uppercase;"><b>SERVICE APPLY</b></h4>
                  <p class="card-category"> RECENT SERVICE APPLY</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px;">
                          #
                        </th>
                        <th class="text-center">
                          User
                        </th>
                        <th class="text-center">
                          Service Name
                        </th>
                        <th class="text-center">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('apply_service',$where);
                                  
                                  $i=1;
                                  
                                  if(!empty($data)){
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>

                                <?php

                                  $pid=$value['user_id'];

                                  if($pid==0)
                                  {
                                    echo "Guest";

                                  }else{

                                    echo "Member";
                                  }

                                  
                                ?>
                              
                          </td>
                          <td>
                              <?php 
                                  $serviceid=$value['service_name'];
                                  $where2="WHERE id='$serviceid'";

                                  $data2=$objFun->selectData('services',$where2);

                                  if(!empty($data2))
                                  {
                                   
                                    foreach ($data2 as $value2) 
                                    {
                                      echo $value2['name'];
                                    }
                                  }
                              ?>
                          </td>
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#editModal<?=$value['id']?>"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('applyservice')?>">
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
    
    <?php
          // service apply
          $where="";
          $data2=$objFun->selectData('apply_service',$where);                        
                                 
          if(!empty($data2)){
          foreach ($data2 as $value2) {

            $serviceData=unserialize($value2['service_data']);
    ?>

    <div class="modal fade" id="editModal<?=$value2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">SERVICE DETAIL</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/editData.php?ptype=<?=base64_encode('subcategory')?>" method="POST" name="categoryfrm" onsubmit=" return checkData()">
                <div class="modal-body">
                    <div>
                        <div class="text-center">
                            <strong style="font-size:25px; font-weight:700; text-transform:uppercase;">
                                <?php 
                                   // service name 
                                  $serviceid1=$value2['service_name'];
                                  $where21="WHERE id='$serviceid1'";

                                  $data21=$objFun->selectData('services',$where21);

                                  if(!empty($data21))
                                  {
                                   
                                    foreach ($data21 as $value21) 
                                    {
                                      echo $value21['name'];
                                  
                              ?>
                              <hr style="    border: 2px solid #741d82; width: 144px; margin-top: 0px;">
                            </strong>
                        </div>
                        <div>
                          <?php 


                                

                                     foreach($serviceData as $valueData)
                                    {
                                      $rahul= $valueData;

                                      $where1="WHERE subcategory='".$rahul."'";
                                      $parentCat=$objFun->selectData('sub_category',$where1);                        
                                                       
                                    if(!empty($parentCat)){
                                    foreach ($parentCat as $valueparentCat) {
                                    
                          ?>
                          <div>
                          <h4 style="font-size: 17px; font-weight: 400; color: red;">
                            <?php
                                      $catid=$valueparentCat['parent'];
                                      $where12="WHERE id='".$catid."'";
                                      $parentCat2=$objFun->selectData('parent_category',$where12);
                                      foreach ($parentCat2 as $valueParent) {
                                        echo $valueParent['name'];
                                      }
                            ?>
                              
                          </h4>
                          <h5 style="font-size: 15px; color: green; font-weight: 400;">
                            ->
                            <?php

                                echo $rahul;
                            ?>
                              
                            </h5>
                         </div>
                        <?php } } }   }
                                  } ?>
                        </div>
                    </div>
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