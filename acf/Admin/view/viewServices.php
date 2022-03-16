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
                  <a href="serviceDetail">
                   <button class="pull-right btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i></button>
                 </a>
                  <h4 class="card-title" style="text-transform:uppercase;"><b>SERVICES</b></h4>
                  <p class="card-category"> RECENT SERVICES</p>

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
                                  $data=$objFun->selectData('about_services',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <?=$value['service_name']?>
                          </td>
                          <td>
                              <?=substr($value['title_description'],0,120)?>...
                          </td>
                          <td>
                              <img src="../<?=$value['image']?>" style="width:50%;">
                          </td>
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#editModal<?=$value['id']?>">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>

                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('servicedetail')?>">
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
    
    <?php

            $where="";
            $data1=$objFun->selectData('about_services',$where);
            if(!empty($data1)){
              $i=1;
              foreach ($data1 as $value1) {
    ?>
    <div class="modal fade" id="editModal<?=$value1['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT SERVICE</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/editData.php?ptype=<?=base64_encode('aboutservice')?>" method="POST" name="service">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?=$value1['id']?>">
                    <div class="" style="margin-bottom:10px;">
                         <label>Service Name <span style="color:red;">*</span></label>
                            <select class="form-control" name="servicename" >
                                <option value=""> Select Service</option>
                                <?php

                                  $where="";
                                  $data=$objFun->selectData('services',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                                ?>
                                <option value="<?=$value['name']?>" <?php if($value1['service_name']==$value['name']){echo "Selected";}?>><?=$value['name']?></option>
                                <?php }} ?>
                            </select>
                      </div>

                      <div class="" style="margin-bottom:10px;">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" >
                        <div style="margin-top: 10px;">
                            <img src="../<?=$value1['image']?>" width="25%">
                        </div>
                      </div>

                       <div class="" style="margin-bottom:10px;">
                         <label>Description</label>
                        <textarea name="editor1" class="form-control"><?=$value1['title_description']?></textarea>
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

     <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script>
                        CKEDITOR.replace( 'editor1' );
        </script>