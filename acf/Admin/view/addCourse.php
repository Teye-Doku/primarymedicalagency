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
                  <a href="course">
                     <button class="pull-right btn btn-warning">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                     </button>
                   </a>
                  <h4 class="card-title" style="text-transform:uppercase;"><b>ADD COURSE</b></h4>
                  <p class="card-category"> ADD COURSE HERE</p>

                </div>
                <div class="card-body">
                  <div class="">
                   <form action="../controller/checkData.php?ptype=<?=base64_encode('course')?>" method="POST" name="coursefrm" onsubmit=" return checkData()" enctype="multipart/form-data">
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
                                        <option value="<?=$value['id']?>"><?=$value['subcategory']?></option>

                                      <?php }} ?>
                                    </select>
                                </div>
                                <div class="" style="margin-bottom:10px;">
                                  <lable><b>IMAGE:</b></lable>
                                  <input type="file" name="image" class="form-control">
                                </div>
                                <div class="" style="margin-bottom:10px;">
                                  <lable><b>TITLE:</b></lable>
                                  <div id="titleMessage" style="color: red;"></div>
                                  <input type="text" name="ntitle" class="form-control">
                                </div>
                                <div class="" style="margin-bottom:10px;">
                                    <lable><b>CONTENT:</b></lable>
                                    <textarea name="content" id="content" class="form-control ckeditor"></textarea>
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
      <script type="text/javascript">
        function checkData()
        {

             var category= document.coursefrm.cate.value;
             var title=    document.coursefrm.ntitle.value;

             if(category==''){

                document.getElementById('catMessage').innerHTML='* Please Select Category Name';

                return false;
             }

             if(title==''){

                document.getElementById('titleMessage').innerHTML='* Please Enter Course Title';

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


<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
<script>
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "../controller/addCkeditor.php"
 });
</script>