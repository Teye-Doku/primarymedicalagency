



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
                  <p class="card-category"> EDIT BLOG</p>
                    
                </div>
                <div class="card-body">
                    
                                <div class="">
                                    <div style="margin-bottom:20px; border-bottom: 3px solid #9c34b3;">
                                        <h4 style="font-weight: 500;">EDIT BLOG</h4>
                                    </div>
                                    <form action="../controller/editData.php?ptype=<?=base64_encode('blog')?>" method="POST"  enctype="multipart/form-data">
                                        
                                        
                                        
                                        <?php
                                                  $id=$_GET['id'];
                                                  $where="WHERE id='$id'";
                                                  $data=$objFun->selectData('blog',$where);
                
                                                  if(!empty($data)){
                                                    $i=1;
                                                    foreach ($data as $value) {
                                         ?>
                                         <input type="hidden" name="id" value="<?=$value['id']?>">
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
                                                                    <option value="<?=$valueCategory['category']?>" <?php if($value['category']==$valueCategory['category']){echo "selected" ; }?>><?=$valueCategory['category']?></option>
                                                                    <?php
                                                                }
                                                            }
                                                
                                                
                                                
                                                
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Title:</label>
                                            <input type="text" name="title" class="form-control" placeholder="Blog Title" required value="<?=$value['title']?>">
                                        </div>
                                        <div class="" style="margin-top:10px; margin-bottom:10px;">
                                            <label>Image:</label>
                                            <input type="file" name="image" class="form-control" placeholder="Blog Image" required>
                                            <div style="margin-top:10px">
                                                <img src="../<?=$value['image']?>" width="200px" height="200px">
                                            </div>
                                        </div>
                                        <label style="margin-top:10px; margin-bottom:10px;">Description:</label>
                                        <div class="form-group" style="margin-top:10px; margin-bottom:10px;">
                                            
                                            <textarea name="content" id="content" class="form-control ckeditor"><?=$value['description']?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </form>
                              </div>
                      
                      <?php } } ?>
                  
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
