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
                  <h4 class="card-title" style="text-transform:uppercase;"><b>BLOG</b></h4>
                  <p class="card-category"> RECENT BLOG POST</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px; width:5%;">
                          #
                        </th>
                        <th class="text-center" style="width:20%;">
                          Title
                        </th>
                        <th class="text-center" style="width:25%;">
                          Description
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
                                  $data=$objFun->selectData('blog',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <?=$value['title']?>
                          </td>
                          <td>
                              <?=substr($value['description'],0,180)?>
                          </td>
                          <td>
                              <img src="../<?=$value['image']?>" style="width:50%;">
                          </td>
                          <td>
                            <a href="editBlog?id=<?=$value['id']?>">
                            <button class="btn btn-success">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                            </a>
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('blog')?>">
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