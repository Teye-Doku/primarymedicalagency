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
                   <!-- <button class="pull-right btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i></button>
 -->                  <h4 class="card-title" style="text-transform:uppercase;"><b>SLIDER CONTENT</b></h4>
                  <p class="card-category"> SLIDER CONTENT</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px;">
                          #
                        </th>
                        <th class="text-center">
                          Content One
                        </th>
                        <th class="text-center">
                          Content Two
                        </th>
                        <th class="text-center">
                          Content Three
                        </th>
                        <th class="text-center">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('slider_content',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <?=$value['content_one']?>
                          </td>
                          <td>
                              <?=$value['content_two']?>
                          </td>
                          <td>
                              <?=$value['content_three']?>
                          </td>
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#editModal<?=$value['id']?>">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>

                           
                           
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

    <!--  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">ADD CONTENT</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <form action="../controller/checkData.php?ptype=<?=base64_encode('sliderContent')?>" method="POST" name="categoryfrm" onsubmit=" return checkData()">
               <div class="modal-body">
                   <div class="form-group">
                        
                       <lable>Content One:</lable>
                       <div id="catMessage" style="color:red;"></div>
                       <input type="text" name="contentOne" class="form-control" placeholder="Enter Your Service Name" required="">
                   </div>

                   <div class="form-group">
                        
                       <lable>Content Two:</lable>
                       <div id="catMessage" style="color:red;"></div>
                       <input type="text" name="contentTwo" class="form-control" placeholder="Enter Your Service Name" required="">
                   </div>

                   <div class="form-group">
                        
                       <lable>Content Three:</lable>
                       <div id="catMessage" style="color:red;"></div>
                       <input type="text" name="contentThree" class="form-control" placeholder="Enter Your Service Name" required="">
                   </div>
               </div>
               <div class="modal-footer">
                 <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
               </div>
           </form>
       </div>
     </div>
    </div> -->
<!-- ==============================================================UpdateData==================================================================== -->
    
    <?php

            $where="";
            $data1=$objFun->selectData('slider_content',$where);
            if(!empty($data1)){
              $i=1;
              foreach ($data1 as $value1) {
    ?>
    <div class="modal fade" id="editModal<?=$value1['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT SLIDER CONTENT</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/editData.php?ptype=<?=base64_encode('sliderContent')?>" method="POST" name="categoryfrm">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$value1['id']?>">
                        <lable>Content One:</lable>
                        <div id="catMessage" style="color:red;"></div>
                        <input type="text" name="contentOne" class="form-control" placeholder="Enter Your Service Name" value="<?=$value1['content_one']?>">
                    </div>


                   <div class="form-group">
                        
                       <lable>Content Two:</lable>
                       <div id="catMessage" style="color:red;"></div>
                       <input type="text" name="contentTwo" class="form-control" placeholder="Enter Your Service Name" required="" value="<?=$value1['content_two']?>">
                   </div>

                   <div class="form-group">
                        
                       <lable>Content Three:</lable>
                       <div id="catMessage" style="color:red;"></div>
                       <input type="text" name="contentThree" class="form-control" placeholder="Enter Your Service Name" required="" value="<?=$value1['content_three']?>">
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