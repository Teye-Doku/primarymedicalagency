<?php 
          include('includes/header.php');
          include('includes/sidenav.php');
          include('includes/topnav.php');

        

          $where="WHERE id='".$_GET['id']."'";
          $data=$objFun->selectData('job',$where);
          if(!empty($data))
          {
        
              foreach ($data as $valueproduct) 
              {

              }
          }
                      
           
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

  .image-preview 
  {
    width: 150px;
    height: 150px;
    position: relative;
    overflow: hidden;
    background-color: #eee;
    margin: 0 auto;
    border: 1px solid #ddd;
  }


  .image-preview label 
  {
    position: absolute;
    z-index: 5;
    opacity: .9;
    cursor: pointer;
    background-color: #bdc3c7;
    color: #000;
    font-size: 12px;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    text-align: center;
    padding: 7px;
  }



  .image-preview input 
  {
    line-height: 160px;
    font-size: 187px;
    position: absolute;
    opacity: 0;
    z-index: 10;
  }
</style>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary" style="margin-bottom:20px;">
                  <a href="course">
                     <button class="pull-right btn btn-warning">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                     </button>
                   </a>
                  <h4 class="card-title" style="text-transform:uppercase;"><b>EDIT JOB</b></h4>
                  <p class="card-category"> EDIT JOB HERE</p>

                </div>
                <div class="card-body">
                  <div class="">
                   <form action="../controller/editData.php?ptype=<?=base64_encode('product')?>" method="POST" name="productfrm" onsubmit=" return checkData()" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?=$valueproduct['id']?>">
                                    <lable><b>Job Name:</b></lable>
                                    <div id="pnameMessage" style="color: red;"></div>
                                    <input type="text" name="jobtitle" class="form-control" placeholder="Product Name" value="<?=$valueproduct['job_title']?>"> 
                                </div>


                                <div class="" style="margin-bottom:10px;">
                                    <lable><b>CATEGORY:</b></lable>
                                    <div id="catMessage" style="color: red;"></div>
                                    <select name="cate" class="form-control">
                                        <option value="">--Select--</option>
                                        <?php


                                            $where="";
                                            $data=$objFun->selectData('sub_category',$where);

                                            if(!empty($data)){
                                              $i=1;
                                              foreach ($data as $value) {


                                        ?>
                                        <option value="<?=$value['id']?>" <?php if($value['id']==$valueproduct['category']){ echo 'Selected'; } ?> ><?=$value['subcategory']?></option>

                                      <?php }} ?>
                                    </select>
                                </div>

                                


                                <div class="form-group">
                                    <lable><b>Job Type:</b></lable>
                                    <div id="ppriceMessage" style="color: red;"></div>
                                    <input type="text" name="jobtype" class="form-control" placeholder="Product Price" value="<?=$valueproduct['job_type']?>"> 
                                </div> 

                                

                                <div class="" style="margin-bottom:10px;">
                                  <lable><b>Location:</b></lable>
                                  <div id="quantityMessage" style="color: red;"></div>
                                  <input type="text" name="location" class="form-control" placeholder="Quantity" value="<?=$valueproduct['location']?>">
                                </div>

                               

                               

                                <div class="" style="margin-bottom:10px;">
                                  <lable><b>Salary:</b></lable>
                                  
                                  <input type="text" name="salary" class="form-control" placeholder="CAS" value="<?=$valueproduct['salary']?>">
                                </div>

                                 <div class="form-group">
                                    <lable><b>Discipline:</b></lable>
                                    <div id="upcMessage" style="color: red;"></div>
                                    <input type="text" name="discipline" class="form-control" placeholder="UPC" value="<?=$valueproduct['discipline']?>"> 
                                </div>

                                 <div class="form-group">
                                    <lable><b>Reference:</b></lable>
                                  
                                    <input type="text" name="cas" class="form-control" placeholder="SKU" value="<?=$valueproduct['reference']?>"> 
                                </div>

                               

                               

                             
                          <div class="" style="margin-bottom:10px;">
                                    <lable><b>Job Description:</b></lable>
                                    <textarea name="content" id="content" class="form-control ckeditor"><?=$valueproduct['job_description']?></textarea>
                          </div>

                          <div class="" style="margin-bottom:10px;">
                                    <lable><b>About The Role:</b></lable>
                                    <textarea name="content1" id="content1" class="form-control ckeditor"><?=$valueproduct['role']?></textarea>
                          </div>

                          <div class="" style="margin-bottom:10px;">
                                    <lable><b>About You:</b></lable>
                                    <textarea name="content2" id="content2" class="form-control ckeditor"><?=$valueproduct['about_you']?></textarea>
                          </div> 
                               
                          <div class="" style="margin-bottom:10px;">
                                <input type="submit" name="submit" class="btn btn-success form-control">
                          </div>
                    </form>
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
<!-- ===============================================================Validation============================================================ -->
     
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


<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
<script>
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "../controller/addCkeditor.php"
 });
</script>

<script>
  CKEDITOR.replace( 'content1', {
   height: 300,
  filebrowserUploadUrl: "../controller/addCkeditor.php"
 });
</script>

<script>
  CKEDITOR.replace( 'content2', {
   height: 300,
  filebrowserUploadUrl: "../controller/addCkeditor.php"
 });
</script>