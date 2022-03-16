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
                  <a href="product">
                     <button class="pull-right btn btn-warning">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                     </button>
                   </a>
                  <h4 class="card-title" style="text-transform:uppercase;"><b>ADD JOB</b></h4>
                  <p class="card-category"> ADD JOB HERE</p>

                </div>
                <div class="card-body">
                  <div class="">
                   <form action="../controller/productAdd.php" method="POST" name="productfrm" onsubmit=" return checkData()" enctype="multipart/form-data">
                                <div class="form-group">
                                    <lable><b>Job Title:</b></lable>
                                    <div id="pnameMessage" style="color: red;"></div>
                                    <input type="text" name="jobtitle" class="form-control" placeholder="Job Title"> 
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
                                        <option value="<?=$value['id']?>"><?=$value['subcategory']?></option>

                                      <?php }} ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <lable><b>Job Type:</b></lable>
                                    <div id="pcodeMessage" style="color: red;"></div>
                                    <input type="text" name="jobtype" class="form-control" placeholder="Job Type"> 
                                </div>

                                <div class="form-group">
                                    <lable><b>Location:</b></lable>
                                    <div id="pmodelMessage" style="color: red;"></div>
                                    <input type="text" name="location" class="form-control" placeholder="Location"> 
                                </div>

                                


                                <div class="form-group">
                                    <lable><b>Salary:</b></lable>
                                    <div id="ppriceMessage" style="color: red;"></div>
                                    <input type="text" name="salary" class="form-control" placeholder="Salary"> 
                                </div> 

                                


                                <div class="" style="margin-bottom:10px;">
                                  <lable><b>Discipline:</b></lable>
                                  <div id="quantityMessage" style="color: red;"></div>
                                  <input type="text" name="discipline" class="form-control" placeholder="Discipline">
                                </div>

                               

                              

                                <div class="" style="margin-bottom:10px;">
                                  <lable><b>Reference:</b></lable>
                                  
                                  <input type="text" name="cas" class="form-control" placeholder="Reference">
                                </div>

                                 


                            
                          <div class="" style="margin-bottom:10px;">
                                    <lable><b>Job Description:</b></lable>
                                    <textarea name="content" id="content" class="form-control ckeditor"></textarea>
                          </div>

                          <div class="" style="margin-bottom:10px;">
                                    <lable><b>About The Role:</b></lable>
                                    <textarea name="content1" id="content1" class="form-control ckeditor"></textarea>
                          </div>
                          <div class="" style="margin-bottom:10px;">
                                    <lable><b>About You:</b></lable>
                                    <textarea name="content2" id="content2" class="form-control ckeditor"></textarea>
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

            
             var jobtitle=              document.productfrm.jobtitle.value;
             var jobCategory=           document.productfrm.cate.value;
             var jobtype=               document.productfrm.jobtype.value;
             var location=              document.productfrm.location.value;
            
          
             var sallary=               document.productfrm.salary.value;
            
             var disiplin=              document.productfrm.discipline.value;

          
            

             if(jobtitle==''){

                document.getElementById('pnameMessage').innerHTML='* Please Enter Job Title';

                return false;
             }

             if(jobCategory==''){

                document.getElementById('catMessage').innerHTML='* Please Select Job Category';

                return false;
             }

             if(jobtype==''){

                document.getElementById('pcodeMessage').innerHTML='* Please Enter Job Type';

                return false;
             }

             if(location==''){

                document.getElementById('pmodelMessage').innerHTML='* Please Enter Job location';

                return false;
             }

           

             if(sallary==''){

                document.getElementById('ppriceMessage').innerHTML='* Please Enter job sallary';

                return false;
             }

             if(disiplin==''){

                document.getElementById('quantityMessage').innerHTML='* Please Enter Job Discipline';

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
