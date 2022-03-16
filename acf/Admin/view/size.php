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
                  <h4 class="card-title" style="text-transform:uppercase;"><b>ABOUT US</b></h4>
                  <p class="card-category"> ABOUT US</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px; width:5%;">
                          #
                        </th>
                        <th class="text-center" style="width:20%;">
                          Vision
                        </th>
                        <th class="text-center" style="width:20%;">
                          Mission
                        </th>
                       <!--  <th class="text-center" style="width:20%;">
                          Startegy
                        </th>
                        <th class="text-center" style="width:20%;">
                          Who we are
                        </th> -->
                        <th class="text-center" style="width:15%;">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('about_us',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td style="text-align:justify;">
                              <?php
                                  $content=$value['mission'];
                                  $pos=strpos($content, ' ', 100);
                                  echo substr($content,0,$pos ); 
                              ?>
                          </td>
                           <td style="text-align:justify;">
                              <?php 

                                  
                                  $content2=$value['vission'];
                                  $pos2=strpos($content2, ' ', 60);
                                  echo substr($content2,0,$pos2 );
                              ?>
                          </td>
                           <!-- <td style="text-align:justify;"> -->
                              <?php
                                   

                                    //$content3=$value['startegy'];
                                    //$pos3=strpos($content3, ' ', 100);
                                    //echo substr($content3,0,$pos3 );
                              ?>
                          <!-- </td>
                           <td style="text-align:justify;"> -->
                              <?php 
                                   
                                     //$content1=$value['who_we_are'];
                                    //$pos1=strpos($content1, ' ', 100);
                                    // echo substr($content1,0,$pos1 ); 
                              ?>
                         <!--  </td> -->
                          <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#editModal<?=$value['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('aboutus')?>">
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
              <h5 class="modal-title" id="exampleModalLabel">ADD ABOUT US</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/checkData.php?ptype=<?=base64_encode('aboutus')?>" method="POST" name="categorytype" onsubmit=" return checkData()">
                <div class="modal-body">
                    
                    <div class="form-group">
                        
                        <lable>Mission:</lable>
                        <div id="missionMessage" style="color:red;"></div>
                        <textarea type="text" name="mission" class="form-control" placeholder="Enter Size"></textarea>
                    </div>

                    <div class="form-group">
                        
                        <lable>Vission:</lable>
                        <div id="vissionMessage" style="color:red;"></div>
                        <textarea type="text" name="vission" class="form-control" placeholder="Enter Size"></textarea>
                    </div>

                    <!-- <div class="form-group">
                        
                        <lable>Startegy:</lable>
                        <div id="startegyMessage" style="color:red;"></div>
                        <textarea type="text" name="startegy" class="form-control" placeholder="Enter Size"></textarea>
                    </div>

                    <div class="form-group">
                        
                        <lable>Who we Are:</lable>
                        <div id="whoMessage" style="color:red;"></div>
                        <textarea type="text" name="who" class="form-control" placeholder="Enter Size"></textarea>
                    </div> -->
                </div>
                <div class="modal-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>




      <!-- =========================================================Edit DATA================================================================ -->

        <?php

                                  $where="";
                                  $data1=$objFun->selectData('about_us',$where);

                                  if(!empty($data1)){
                                    $i=1;
                                    foreach ($data1 as $value1) {
        ?>
      <div class="modal fade" id="editModal<?=$value1['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT ABOUT US</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/editData.php?ptype=<?=base64_encode('abouus')?>" method="POST" name="categorytype" onsubmit=" return checkData()">
                <div class="modal-body">
                    
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$value1['id']?>">
                        <lable>Mission:</lable>
                        
                        <input type="text" name="mission" class="form-control" placeholder="Enter Size" value="<?=$value1['mission']?>">
                    </div>

                    <div class="form-group">
                       
                        <lable>Vission:</lable>
                        
                        <input type="text" name="vission" class="form-control" placeholder="Enter Size" value="<?=$value1['vission']?>">
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

             var mission=     document.categorytype.mission.value;
             var vission=     document.categorytype.vission.value;
             var startegy=    document.categorytype.startegy.value;
             var who=         document.categorytype.who.value;
            
             if(mission==''){

                document.getElementById('missionMessage').innerHTML='* Please Enter Mission';

                return false;
             }

             if(vission==''){

                document.getElementById('vissionMessage').innerHTML='* Please Enter Vission';

                return false;
             }

             if(startegy==''){

                document.getElementById('startegyMessage').innerHTML='* Please Enter Startegy';

                return false;
             }

             if(who==''){

                document.getElementById('whoMessage').innerHTML='* Please Enter Who we are';

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