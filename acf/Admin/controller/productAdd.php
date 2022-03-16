<?php


session_start();

include('function.php');
$objFun= new Fun;



if(isset($_POST['submit'])){


		$jobtitle=         			$objFun->validateData($_POST['jobtitle']);
		$category=		  			$objFun->validateData($_POST['cate']);
		$jobtype=		  			$objFun->validateData($_POST['jobtype']);
		$location=	  			    $objFun->validateData($_POST['location']);
		$sallary=		  			$objFun->validateData($_POST['salary']);
		$disipline=		  			$objFun->validateData($_POST['discipline']);
		$reference=		  			$objFun->validateData($_POST['cas']);
		$jobdescription=	  	    $objFun->validateData($_POST['content']);
		$role=	  			        $objFun->validateData($_POST['content1']);
		$about=	  			        $objFun->validateData($_POST['content2']);
		
		

		
			
				


				$insertJob="INSERT INTO `job`(`job_title`, `category`, `job_type`, `location`, `salary`, `discipline`, `reference`, `job_description`, `role`, `about_you`) VALUES ('$jobtitle','$category','$jobtype','$location','$sallary','$disipline','$reference','$jobdescription','$role','$about')";

				if($objFun->sql($insertJob)){

						$error="Product Add Successfully";

					    $_SESSION['msg']=$error;

					    header('location:../view/product.php');
				}else{

					    $error="Unable To add Product";

					    $_SESSION['msg']=$error;

					    header('location:../view/addproduct.php');
				}
			





}



?>