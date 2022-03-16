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
                  <a href="addCourse">
                       <button class="pull-right btn btn-warning">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                       </button>
                  </a>
                  <h4 class="card-title" style="text-transform:uppercase;"><b>COURSE</b></h4>
                  <p class="card-category"> RECENT COURSE</p>

                </div>
                <div class="card-body">
                  <div class="">
                    <table class="table table-bordered" id="myTable">
                      <thead class=" text-primary bg-info">
                        <th class="text-center" style=" font-size:25px; width:5%;">
                          #
                        </th>
                        <th class="text-center" style="width:10%;">
                          Category
                        </th>
                        <th class="text-center" style="width:20%;">
                          Title
                        </th>
                        <th class="text-center" style="width:20%;">
                          Image
                        </th>
                        <th class="text-center" style="width:30%;">
                          Content
                        </th>
                        <th class="text-center" style="width:15%;">
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php

                                  $where="";
                                  $data=$objFun->selectData('course',$where);

                                  if(!empty($data)){
                                    $i=1;
                                    foreach ($data as $value) {
                         ?>
                        <tr>
                          <td>
                              <?=$i?>
                          </td>
                          <td>

                                <?php

                                  $pid=$value['category'];

                                  $where2="WHERE id='$pid'";

                                  $data2=$objFun->selectData('sub_category',$where2);

                                  if(!empty($data2))
                                  {
                                    $i=1;
                                    foreach ($data2 as $value2) 
                                    {
                                      echo $value2['subcategory'];
                                    }
                                  }
                                ?>
                              
                          </td>
                          <td><?=$value['title']?></td>
                          <td><img src="<?=$value['image']?>" width="50%"></td>
                          <td style="text-align:justify;">
                              <?php 
                                    

                                    $string=$value["content"];

                                    $string = strip_tags($string);
                                      if (strlen($string) > 270) {
                                                            
                                                                // truncate string
                                         $stringCut = substr($string, 0,210);
                                         $endPoint = strrpos($stringCut, ' ');
                                                            
                                         //if the string doesn't contain any space then it will cut without word basis.
                                         $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                         $string .= '...';
                                        }
                                      echo $string; 
                               ?>
                          </td>
                          <td>
                            <button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                            <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('course')?>">
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