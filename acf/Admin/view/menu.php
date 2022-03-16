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
                  <h4 class="card-title" style="text-transform:uppercase;"><b>MENU</b></h4>
                  <p class="card-category"> RECENT MENU NAME</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px;">
                          #
                        </th>
                        <th class="text-center">
                          Menu Name
                        </th>
                        <th class="text-center">
                          Url
                        </th>
                        <th class="text-center">
                          status
                        </th>
                        <th class="text-center">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('menu',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td style="width:30%;">
                             <?=$value['name']?> 
                          </td>
                          <td>
                              <?=$value['url']?>
                          </td>
                          <td>
                              <?php 
                                  $id=$value["id"];
                                  if($value['status']==1){ 
                              ?>
                              <button class="btn btn-success" onclick=" status('0','<?php echo $id; ?>')">Enable</button>
                            <?php 
                                }else{
                              ?>
                              <button class="btn btn-danger" onclick=" status('1','<?php echo $id; ?>')">Disable</button>
                            <?php } ?>
                          </td>
                          <td style="width:20%;">
                            <!-- <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> -->
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('menu')?>">
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