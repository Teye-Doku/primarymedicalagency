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
                  
                  <h4 class="card-title" style="text-transform:uppercase;"><b>APPLICATION</b></h4>
                  <p class="card-category"> RECENT APPLICATION</p>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center"  >
                          #
                        </th>
                        <th class="text-center" >
                          Job Title 
                        </th>
                        <th class="text-center"  >
                          Applicant name
                        </th>
                        <th class="text-center"  >
                          Email
                        </th>
                        <th class="text-center"  >
                          Gender
                        </th>
                        <th class="text-center"  >
                          Marital Status
                        </th>
                        <th class="text-center"  >
                          Current Job
                        </th>
                        <th class="text-center"  >
                          Monthly Sallary
                        </th>
                        <th class="text-center"  >
                         Current Location
                        </th>

                        <th class="text-center"  >
                         Source
                        </th>

                        <th class="text-center"  >
                         Resume
                        </th>

                        <th class="text-center"  >
                          Aplication date
                        </th>

                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('job_application',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td style="width:30%;">
                             <?php  
                                  $uid=$value['job_id'];
                                  $user=$objFun->sql("SELECT * FROM job WHERE id='$uid'");
                                  $userName=$user->fetch_assoc();
                                  echo $jobNm=$userName['job_title'];
                              ?> 
                          </td>
                          <td style="width:30%;">
                             <?=$value['name']?> 
                          </td>
                          <td>
                             <?=$value['email']?>
                          </td>
                          <td>
                              <?=$value['gender']?>
                          </td>
                          <td>
                             <?=$value['maital_status']?>
                          </td>
                          <td>
                             <?=$value['current_job']?>
                          </td>
                          <td>
                             <?=$value['monthly_sallary']?>
                          </td>
                          <td>
                             <?=$value['current_location']?>
                          </td>
                          <td>
                             <?=$value['source']?> 
                          </td>
                          <td style="width:20%;">
                          
                            <a  target="_blank" href="http://instatalentrecruit.dinetictechnologies.com/<?=$value['resume']?>"><i class="fa fa-file" aria-hidden="true"></i></a>
                          </td>

                          <td style="width:20%;">
                            <?=$value['aplication_date']?>
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
                url:  '../controller/updateData.php?pid=<?=base64_encode('orderStatus')?>',
                data:  {postvalue:pvalue,postid:pid},

                success: function(response){
                  location.reload();
                  //alert(response);
                }


            });
        }

     </script>