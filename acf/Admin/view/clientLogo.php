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
                   <!--<button class="pull-right btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i></button>-->
                  <h4 class="card-title" style="text-transform:uppercase;"><b>CLIENT LOGO</b></h4>
                  <p class="card-category"> LOGO</p>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                     
                            <form class="" method="POST" action="../controller/checkData.php?ptype=<?=base64_encode('clientlogo')?>" enctype="multipart/form-data">
                              <div class="">
                                 <label>Image</label>
                                 <input type="file" name="image" class="form-control">
                                 <input type="hidden" name="type" value="clientlogo">
                              </div>
                              <div class="">
                                  <button class="btn btn-primary">ADD</button>
                              </div>
                          </form>
                          
                          <div style="box-shadow: 0px 1px 3px -1px; border: 1px solid black; margin-top: 30px; padding-left: 20px;">
                              
                              <?php

                                  $where="";
                                  $data=$objFun->selectData('clientlogo_style',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                                        echo $typ=$value['type'];
                                        
                                 
                                  
                                  if($typ==="block")
                                  {
                                     ?>
                                      On website:<button class="btn btn-danger" onclick="client('none')">HIDE</button>
                                     <?php
                                  }else{
                                     ?>
                                      On website:<button class="btn btn-success" onclick="client('block')">SHOW</button>
                                     <?php
                                  }
                                  
                                  
                                    }
                                      
                                  }
                               ?>
                             
                             
                          </div>
                          
                        </div>
                    <div class="col-sm-9">
                        <div>
                       <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px;">
                          #
                        </th>
                        <th class="text-center" style="width:70%;">
                          Image
                        </th>
                        <th class="text-center" style="width:70%;">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="WHERE type='clientlogo'";
                                  $data=$objFun->selectData('image',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <img src="<?=$value['image']?>" width="30%">
                          </td>
                          <td>
                            <!-- <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> -->
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('clientlogo')?>">
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
        </div>
      </div>
      
      <?php include('includes/footer.php'); ?>
        
      <!-- =========================================================INSERT DATA================================================================ -->

    
    

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
      
      <script>
          function client(str)
          {
              var style= str;
              
              $.ajax({
                 
                 type:'POST',
                 url:'statusClient',
                 data:{type:style},
                 success:function(response){
                     
                     //alert(response);
                     location.reload();
                 }
              });
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