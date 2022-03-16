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
                  <a href="addBlog">
                   <button class="pull-right btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i></button>
                 </a>
                  <h4 class="card-title" style="text-transform:uppercase;"><b>REVIEW</b></h4>
                  <p class="card-category"> RECENT REVIEW</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px; width:5%;">
                          #
                        </th>
                        <th class="text-center" style="width:20%;">
                          Name
                        </th>
                        <th class="text-center" style="width:25%;">
                          Feedback
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
                                  $data=$objFun->selectData('review',$where);

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
                              <?=$value['message']?>
                          </td>
                          <td>
                              <img src="..<?=substr($value['image'],5)?>" style="width:50%;">
                          </td>
                          <td>
                             <?php 
                             
                                
                                if($value['type']==1)
                                {
                             
                             
                             ?>
                                    <button class="btn btn-success" onclick="show('<?=$value["id"]?>',0)">
                                      Enable
                                    </button>
                                    
                            <?php 
                            
                                }else{
                                    
                                    ?>
                                    <button class="btn btn-danger" onclick="show('<?=$value["id"]?>',1)">
                                      Disable
                                    </button>
                                    <?php
                                }
                            
                            ?>

                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('review')?>">
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
    


      <script type="text/javascript">
        
          $(document).ready( function () {

            $('#myTable').DataTable();
        } );

      </script>
<!-- ===============================================================Validation============================================================ -->
      <script type="text/javascript">
        function checkData()
        {

             var image= document.categoryfrm.category.value;

             if(image==''){

                document.getElementById('catMessage').innerHTML='* Please Enter Category Name';

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
     
     <script>
          function show(id,val)
          {
              var sid=  id;
              var sval= val;
              
              $.ajax({
                 
                 type:'POST',
                 url:'statusReview',
                 data:{sendid:sid,sendval:sval},
                 success:function(response){
                     
                     //alert(response);
                     location.reload();
                 }
              });
          }
      </script>