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
                  <h4 class="card-title" style="text-transform:uppercase;"><b>SEO</b></h4>
                  <p class="card-category"> SEO KEYWORD</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px;">
                          #
                        </th>
                        <th class="text-center">
                          Title
                        </th>
                        <th class="text-center">
                          Description
                        </th>
                        <th class="text-center">
                          Keywords
                        </th>
                        <th class="text-center">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('seo',$where);

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
                            <?=$value['description']?>
                          </td>
                          <td>
                            <?=$value['keywords']?>
                          </td>
                          <td>
                            <!-- <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> -->
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('seo')?>">
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
              <h5 class="modal-title" id="exampleModalLabel">SEO</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/checkData.php?ptype=<?=base64_encode('seo')?>" method="POST" name="seo" onsubmit=" return checkData()" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="" style="margin-bottom:10px;">
                        <div id="titleMessage" style="color:red;"></div>
                        <lable>Title:</lable>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="" style="margin-bottom:10px;">
                        <div id="desMessage" style="color:red;"></div>
                        <lable>Description:</lable>
                        <textarea class="form-control" name="description" style="height:160px;" maxlength="160"></textarea>
                    </div>
                    <div class="" style="margin-bottom:10px;">
                        <div id="keyMessage" style="color:red;"></div>
                        <lable>Keywords:</lable>
                        <textarea class="form-control" name="keywords" style="height:160px;"></textarea>
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

             
             var description=    document.seo.description.value;
             var keywords=       document.seo.keywords.value;


             

             if(description==''){

                document.getElementById('desMessage').innerHTML='* Please Enter Meta Description';

                return false;
             }

             if(keywords==''){

                document.getElementById('keyMessage').innerHTML='* Please Enter meta Keywords';

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