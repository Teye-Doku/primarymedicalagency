



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
                    <a href="viewBlog">
                   <button class="pull-right btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                   </a>
                  <h4 class="card-title" style="text-transform:uppercase;"><b>BLOG</b></h4>
                  <p class="card-category"> ADD BLOG</p>
                    
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6" style="border-right: 3px solid #9c34b3;">
                            <div>
                                <div style="margin-bottom:20px; border-bottom: 3px solid #9c34b3;">
                                    <h4 style="font-weight: 500;">ADD BLOG CATEGORY</h4>
                                </div>
                                <div style="border-bottom: 1px solid #ff9800; margin-bottom:20px;">
                                <form action="../controller/checkData.php?ptype=<?=base64_encode('blogCategory')?>" method="POST"  enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Category:</label>
                                            <input type="text" name="category" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                </form>
                                </div>
                            </div>
                            <div class="">
                                <div style="margin-bottom:20px; border-bottom: 1px solid #ff9800;">
                                    <h4 style="font-weight: 500;">VIEW BLOG CATEGORY</h4>
                                </div>
                            <table class="table table-bordered" id="myTable">
                              <thead class=" text-primary bg-info">
                                <th class="text-center" style=" font-size:25px; width:5%;">
                                  #
                                </th>
                                
                                <th class="text-center" style="width:20%;">
                                  Category
                                </th>
                                <th class="text-center" style="width:15%;">
                                  Action
                                </th>
                              </thead>
                              <tbody>
                                <?php
        
                                          $where="";
                                          $data=$objFun->selectData('blog_category',$where);
        
                                          if(!empty($data)){
                                            $i=1;
                                            foreach ($data as $value) {
                                 ?>
                                <tr>
                                  <td>
                                      <?=$i?>
                                  </td>
                                 
                                  <td><?=$value['category']?></td>
                                  
                                  <td>
                                    
                                    <a href="../controller/deleteData.php?id=<?=base64_encode($value['id'])?>&type=<?=base64_encode('blogcategory')?>">
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
                        
                        <div class="col-sm-6">
                                <div class="">
                                    <div style="margin-bottom:20px; border-bottom: 3px solid #9c34b3;">
                                        <h4 style="font-weight: 500;">ADD BLOG</h4>
                                    </div>
                                    <form action="../controller/checkData.php?ptype=<?=base64_encode('blog')?>" method="POST"  enctype="multipart/form-data">
                                        <div class="form-group" style="margin-top:0px;">
                                            <label>Category:</label>
                                            <select class="form-control" name="category" required>
                                                <option value="Null">Select</option>
                                                <?php 
                                                            $sql='';
                                                            $selectCategory=$objFun->selectData('blog_category',$sql);
                                                            if(!empty($selectCategory))
                                                            {
                                                                foreach($selectCategory as $valueCategory)
                                                                {
                                                                    ?>
                                                                    <option value="<?=$valueCategory['category']?>"><?=$valueCategory['category']?></option>
                                                                    <?php
                                                                }
                                                            }
                                                
                                                
                                                
                                                
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Title:</label>
                                            <input type="text" name="title" class="form-control" placeholder="Blog Title" required>
                                        </div>
                                        <div class="" style="margin-top:10px; margin-bottom:10px;">
                                            <label>Image:</label>
                                            <input type="file" name="image" class="form-control" placeholder="Blog Image" required>
                                        </div>
                                        <label style="margin-top:10px; margin-bottom:10px;">Description:</label>
                                        <div class="form-group" style="margin-top:10px; margin-bottom:10px;">
                                            
                                            <textarea name="content" id="content" class="form-control ckeditor"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </form>
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

<script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
<script>
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "upload.php"
 });
</script>

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
