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
                  
                  <h4 class="card-title" style="text-transform:uppercase;"><b>USER</b></h4>
                  <p class="card-category" style="text-transform:uppercase;"> Recent User</p>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center">
                          #
                        </th>
                        <th class="text-center">
                          Name
                        </th>
                        <th class="text-center">
                          Role
                        </th>
                        <th class="text-center">
                          Email
                        </th>
                        <th class="text-center">
                          Phone
                        </th>
                        <th class="text-center">
                          Gender
                        </th>
                        <th class="text-center">
                          Image
                        </th>
                        <th class="text-center">
                          Package
                        </th>
                        <th class="text-center">
                          Password
                        </th>
                        <th class="text-center">
                          Rating
                        </th>
                        <th class="text-center">
                          Password
                        </th>
                         
                        <th>Ac Status</th>
                        <th>Payment Status</th>
                        <th class="text-center">
                          Action
                        </th>
                     
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('user',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>
                              <?=$value['first_name']?>
                          </td>
                          <td>
                            <?=$value['role']?>  
                          </td>
                          <td>
                             <?=$value['email']?>
                          </td>
                         
                          
                          <td>
                             <?=$value['mobile']?>
                          </td>
                         
                         <td>
                             <?=$value['gender']?>
                          </td>
                          <td>
                             <img src="../<?=substr($value['image'],5)?>" style="height:100px; width:100px;">
                          </td>
                          <td>
                             <?php 
                                  $packageid=$value['package'];
                                  $whereSql="WHERE id='$packageid'";
                                  $packageName= $objFun->selectData('package',$whereSql);

                                  foreach ($packageName as  $valuePackage) {
                                      echo $valuePackage['package_name'];
                                  }
                              ?>
                          </td>
                          <td>
                             <?=$value['password']?>
                          </td>
                          <td>
                             <?=$value['ratting']?>
                          </td>
                          <td>
                             <?=$value['comment']?>
                          </td>
                           
                          <td>
                            <?php if($value['ac_status']==0){?>
                              <button class="btn btn-danger" onclick=" accountStatus('<?=$value['id']?>',1)">
                                Pending
                              </button>
                            <?php }else{ ?>
                              <button class="btn btn-success" onclick=" accountStatus('<?=$value['id']?>',0)">
                                Confirm
                              </button>
                            <?php } ?>
                          </td>
                          <td>
                            <?php if($value['payment_status']==0){?>
                              <button class="btn btn-danger" onclick=" paymentStatus('<?=$value['id']?>',1)">
                                Pending
                              </button>
                            <?php }else{ ?>
                              <button class="btn btn-success" onclick=" paymentStatus('<?=$value['id']?>',0)">
                                Confirm
                              </button>
                            <?php } ?>
                          </td>
                          <td>
                              <button class="btn btn-success" data-toggle="modal" data-target="#editModal<?=$value['id']?>">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>

                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('user')?>">
                            <button class="btn btn-danger">
                              <i class="fa fa-trash" aria-hidden="true"></i>
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

      <?php

            $where="";
            $data1=$objFun->selectData('user',$where);
            if(!empty($data1)){
              $i=1;
              foreach ($data1 as $value1) {
    ?>
    <div class="modal fade" id="editModal<?=$value1['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT USER</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="../controller/editData.php?ptype=<?=base64_encode('user')?>" method="POST" name="service" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?=$value1['id']?>">
                    <div class="" style="margin-bottom:10px;">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control"  value="<?=$value1['first_name']?>">
                        
                    </div>
                    <div class="" style="margin-bottom:10px;">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?=$value1['email']?>">
                        
                    </div>
                    <div class="" style="margin-bottom:10px;">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" value="<?=$value1['mobile']?>">
                       
                    </div>

                    <div class="" style="margin-bottom:10px;">
                        <label>Gender</label>
                        <input type="radio" id="male" name="gender" value="male" <?php if($value1['gender']=="male"){echo "checked";}?>>
                          <label for="male">Male</label>
                          <input type="radio" id="female" name="gender" value="female"  <?php if($value1['gender']=="female"){echo "checked";}?>>
                          <label for="female">Female</label>
                       
                    </div>
                    <div class="" style="margin-bottom:10px;">
                         <label>Role <span style="color:red;">*</span></label>
                            <select class="form-control" name="role" >
                                <option value=""> Select</option>
                                
                                <option value="vendor">Vendor</option>
                                 <option value="subscriber">Subscriber</option>
                                
                            </select>
                      </div>
                    <div class="" style="margin-bottom:10px;">
                         <label>Package <span style="color:red;">*</span></label>
                            <select class="form-control" name="servicename" >
                                <option value=""> Select</option>
                                <?php

                                  $where="";
                                  $data=$objFun->selectData('package',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                                ?>
                                <option value="<?=$value['id']?>" <?php if($value1['package']==$value['id']){echo "Selected";}?>><?=$value['package_name']?></option>
                                <?php }} ?>
                            </select>
                      </div>

                      <div class="" style="margin-bottom:10px;">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" >
                        <div style="margin-top: 10px;">
                            <img src="../<?=substr($value1['image'],5)?>" width="25%">
                        </div>
                      </div>

                       <div class="" style="margin-bottom:10px;">
                         <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?=$value1['password']?>">
                      </div>
                      
                      <div class="" style="margin-bottom:10px;">
                         <label>Rating</label>
                        <select name="rating" class="form-control">
                            <option value="" selected>----Select----</option>
                            <option value="1" <?php if($value1['ratting']==1){echo "Selected";}?>>One Star</option>
                            <option value="2" <?php if($value1['ratting']==2){echo "Selected";}?>>Two Star</option>
                            <option value="3" <?php if($value1['ratting']==3){echo "Selected";}?>>Three Star</option>
                            <option value="4" <?php if($value1['ratting']==4){echo "Selected";}?>>Four Star</option>
                            <option value="5" <?php if($value1['ratting']==5){echo "Selected";}?>>Five Star</option>
                        </select>
                      </div>
                      
                      <div class="" style="margin-bottom:10px;">
                         <label>Comment</label>
                        <textarea type="textarea" name="comment" class="form-control"><?=$value1['comment']?></textarea>
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
       
       function accountStatus(id,value){

          var id=id;
          var status=value;

          $.ajax({

              type:'post',
              url:'accountStatus',
              data:{uid:id,astatus:status},

              success: function(response){

                location.reload();
                //alert(response);
              }
          });
       }


       function paymentStatus(uid,uvalue){

          var uid=uid;
          var ustatus=uvalue;

          $.ajax({

              type:'post',
              url:'paymentStatus',
              data:{uid:uid,ustatus:ustatus},

              success: function(response){

                location.reload();
                //alert(response);
              }
          });

       }
     </script>

     