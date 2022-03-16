<?php

session_start();

include('function.php');
$objFun= new Fun;

$ptype=base64_decode($_GET['ptype']);


switch ($ptype) {
	
		// case 'unit':

		// 				$unit=	$objFun->validateData($_POST['unit']);
		// 				$id=  	$objFun->validateData($_POST['id']);
		// 				if(!empty($unit)){

		// 					$update="UPDATE `product_unit` SET `unit_name`='$unit' WHERE id='$id'";

		// 					if($objFun->sql($update)){

		// 						$error="Unit Name Has Been Update Successfully";

		// 						$_SESSION['msg']=$error;

		// 						header('location:../view/unit.php');

		// 					}else{

		// 						$error="ERROR ! Unit Name Unable To Update";

		// 						$_SESSION['msg']=$error;

		// 						header('location:../view/unit.php');
		// 					}
		// 				}

		// break;



		// case 'type':

		// 				$type=			$objFun->validateData($_POST['type']);
		// 				$id=			$objFun->validateData($_POST['id']);
		// 				if(!empty($type)){

		// 					$update="UPDATE `product_type` SET `type`='$type' WHERE id='$id'";

		// 					if($objFun->sql($update)){

		// 						$error="Product Type Has Been Update Successfully";

		// 						$_SESSION['msg']=$error;

		// 						header('location:../view/type.php');

		// 					}else{

		// 						$error="ERROR ! Product Type Unable To Update";

		// 						$_SESSION['msg']=$error;

		// 						header('location:../view/type.php');
		// 					}
		// 				}

		// break;


	case 'user':

				
		$email=  	$objFun->checkData($_POST['email']);
		$package=   $objFun->checkData($_POST['servicename']);
		$pass=   	$objFun->checkData($_POST['password']);
		$role=   	$objFun->checkData($_POST['role']);
		$username=  $objFun->checkData($_POST['name']);
		$phone=   	$objFun->checkData($_POST['phone']);
		$gender=   	$objFun->checkData($_POST['gender']);
		$rating=   	$objFun->checkData($_POST['rating']);
		$comment=   $objFun->checkData($_POST['comment']);
		$id=   		$objFun->checkData($_POST['id']);



		
			$imgfile=$_FILES["image"]["name"];
			if(!empty($imgfile))
			{
				$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
			
				$allowed_extensions = array(".jpg","jpeg",".png",".gif");
				
				if(!in_array($extension,$allowed_extensions))
				{
					echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
					echo "<script>window.location.href='../view/user.php'</script>";
				}
				else
				{
					$imgnewfile=md5($imgfile).$extension;
					$path='../assets/img/profile/'.$imgnewfile;
					move_uploaded_file($_FILES["image"]["tmp_name"],$path);
					$img='Admin/assets/img/profile/'.$imgnewfile;
					$query="UPDATE `user` SET `first_name`='$username',`email`='$email',`mobile`='$phone',`gender`='$gender',`password`='$pass',`image`='$img',`package`='$package',role='$role',`ratting`='$rating',`comment`='$comment' WHERE id='$id'";

					if($objFun->sql($query)){

						$_SESSION['msg']="Profile Has Been Updated !";
						echo "<script>window.location.href='../view/user.php'</script>";
					}else{

						$_SESSION['msg']="Unable To Updated Profile !";
						echo "<script>window.location.href='../view/user.php'</script>";
					}
				}
		}else{
			
				   $query="UPDATE `user` SET `first_name`='$username',`email`='$email',`mobile`='$phone',`gender`='$gender',`password`='$pass',`package`='$package',role='$role',`ratting`='$rating',`comment`='$comment' WHERE id='$id'";

					if($objFun->sql($query)){

						$_SESSION['msg']="Profile Has Been Updated !";
						echo "<script>window.location.href='../view/user.php'</script>";
					}else{

						$_SESSION['msg']="Unable To Updated Profile !";
						echo "<script>window.location.href='../view/user.php'</script>";
					}
		}
		

	break;

		case 'abouus':

						$mission=		$objFun->validateData($_POST['mission']);
						$vission=		$objFun->validateData($_POST['vission']);
						//$startegy=		$objFun->validateData($_POST['startegy']);
						//$whoweare=		$objFun->validateData($_POST['who']);
						$id=		    $objFun->validateData($_POST['id']);


						if(!empty($mission) && !empty($vission)){

							$update="UPDATE `about_us` SET `mission`='$mission',`vission`='$vission' WHERE id='$id'";

							if($objFun->sql($update)){

								$error="About Us Has Been Update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/size.php');

							}else{

								$error="ERROR ! About Us Unable To Update";

								$_SESSION['msg']=$error;

								header('location:../view/size.php');
							}
						}

		break;


		// case 'color':

		// 				$color=		$objFun->validateData($_POST['color']);
		// 				$id=		$objFun->validateData($_POST['id']);
		// 				if(!empty($color)){

		// 					$update="UPDATE `product_color` SET `color_name`='$color' WHERE id='$id'";

		// 					if($objFun->sql($update)){

		// 						$error="Color Has Been Update Successfully";

		// 						$_SESSION['msg']=$error;

		// 						header('location:../view/color.php');

		// 					}else{

		// 						$error="ERROR ! Color Unable To Update";

		// 						$_SESSION['msg']=$error;

		// 						header('location:../view/color.php');
		// 					}
		// 				}

		// break;


		case 'category':

						$category=		$objFun->validateData($_POST['updatecategory']);
						$serviceId=		$objFun->validateData($_POST['sid']);
						$id=			$objFun->validateData($_POST['id']);
						if(!empty($category)){

							$update="UPDATE `parent_category` SET service_id='$serviceId', `name`='$category' WHERE id='$id'";

							if($objFun->sql($update)){

								$error="Category Name Has Been update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/parentCategory.php');

							}else{

								$error="ERROR ! Category Name Unable To update";

								$_SESSION['msg']=$error;

								header('location:../view/parentCategory.php');
							}
						}

		break;

		case 'package':

						$pName=		    $objFun->validateData($_POST['pnm']);
						$pPrice=		$objFun->validateData($_POST['ppri']);
						$id=			$objFun->validateData($_POST['id']);
						if(!empty($pName) && !empty($pPrice)){

							$update="UPDATE `package` SET `package_name`='$pName',`package_price`='$pPrice' WHERE id='$id'";

							if($objFun->sql($update)){

								$error="Package Name Has Been update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/package.php');

							}else{

								$error="ERROR ! Package Name Unable To update";

								$_SESSION['msg']=$error;

								header('location:../view/package.php');
							}
						}

		break;

		case 'sliderContent':

						$contentOne=		    $objFun->validateData($_POST['contentOne']);
						$contentTwo=		    $objFun->validateData($_POST['contentTwo']);
						$contentThree=			$objFun->validateData($_POST['contentThree']);
						$id=					$objFun->validateData($_POST['id']);
						if(!empty($contentOne) && !empty($contentTwo) && !empty($contentThree)){

							$update="UPDATE `slider_content` SET `content_one`='$contentOne',`content_two`='$contentTwo',`content_three`='$contentThree' WHERE id='$id'";

							if($objFun->sql($update)){

								$error="Slider Content Has Been update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/sliderContent.php');

							}else{

								$error="ERROR ! Slider Content Unable To update";

								$_SESSION['msg']=$error;

								header('location:../view/sliderContent.php');
							}
						}

		break;



		case 'packagefeature':
					
					$packageName=				$objFun->validateData($_POST['packagename']);
					$feature=				    $objFun->validateData($_POST['feature']);
					$status=				    $objFun->validateData($_POST['status']);
					$id=				        $objFun->validateData($_POST['id']);
					

					if(!empty($packageName) && !empty($feature) && !empty($status)){

							$insert="UPDATE `package_value` SET `package_id`='$packageName',`package_option`='$feature',`status`='$status' WHERE id='$id'";

							if($objFun->sql($insert)){

								$error="Package Feature Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/viewPackage.php');

							}else{

								$error="ERROR ! Package Feature Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/viewPackage.php');
							}
					}
		break;


		// case 'subcategory':

		// 				$category=			$objFun->validateData($_POST['category']);
		// 				$subcategory=		$objFun->validateData($_POST['subcategory']);
		// 				$id=				$objFun->validateData($_POST['id']);

		// 				if(!empty($category)){

		// 					$update="UPDATE `sub_category` SET `parent`='$category',`subcategory`='$subcategory' WHERE id='$id'";

		// 					if($objFun->sql($update)){

		// 						$error="Sub-Category Name Has Been update Successfully";

		// 						$_SESSION['msg']=$error;

		// 						header('location:../view/subCategory.php');

		// 					}else{

		// 						$error="ERROR ! Sub-Category Name Unable To update";

		// 						$_SESSION['msg']=$error;

		// 						header('location:../view/subCategory.php');
		// 					}
		// 				}

		// break;
		
		
		case 'service':

						$category=		$objFun->validateData($_POST['service']);
						$id=			$objFun->validateData($_POST['id']);
						if(!empty($category)){

							$update="UPDATE `services` SET `name`='$category' WHERE id='$id'";

							if($objFun->sql($update)){

								$error="Service Name Has Been update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/services.php');

							}else{

								$error="ERROR ! Service Name Unable To update";

								$_SESSION['msg']=$error;

								header('location:../view/services.php');
							}
						}

		break;


		case 'aboutservice':

						$name=		        $objFun->validateData($_POST['servicename']);
						$description=		$objFun->validateData($_POST['editor1']);
						$id=			    $objFun->validateData($_POST['id']);

						if(!empty($imgfile=$_FILES["image"]["name"])){

						$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		
						$allowed_extensions = array(".jpg","jpeg",".png",".gif");
						
						if(!in_array($extension,$allowed_extensions))
						{
							echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
						}
						else
						{
						
							$imgnewfile=md5($imgfile).$extension;
							$path='../assets/img/service/'.$imgnewfile;
							move_uploaded_file($_FILES["image"]["tmp_name"],$path);

							$img='assets/img/service/'.$imgnewfile;

							$insert="UPDATE `about_services` SET `service_name`='$name',`title_description`='$description',`image`='$img' WHERE id='$id'";

							if($objFun->sql($insert)){

								$error="Service  Has Been Update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/viewServices.php');

							}else{

								$error="ERROR ! Service Unable To Update";

								$_SESSION['msg']=$error;

								header('location:../view/viewServices.php');
							}

							
						}
					}else{


						$insert="UPDATE `about_services` SET `service_name`='$name',`title_description`='$description' WHERE id='$id'";

							if($objFun->sql($insert)){

								$error="Service  Has Been Update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/viewServices.php');

							}else{

								$error="ERROR ! Service Unable To Update";

								$_SESSION['msg']=$error;

								header('location:../view/viewServices.php');
							}

					}

		break;


		case 'blog':
                        $id=		        $objFun->validateData($_POST['id']);
                        $category=		    $objFun->validateData($_POST['category']);
						$name=		        $objFun->validateData($_POST['title']);
						$description=		$objFun->validateData($_POST['content']);
						

						if(!empty($imgfile=$_FILES["image"]["name"])){

						$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		
						$allowed_extensions = array(".jpg","jpeg",".png",".gif");
						
						if(!in_array($extension,$allowed_extensions))
						{
							echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
						}
						else
						{
						
							$imgnewfile=md5($imgfile).$extension;
							$path='../assets/img/blog/'.$imgnewfile;
							move_uploaded_file($_FILES["image"]["tmp_name"],$path);

							$img='assets/img/blog/'.$imgnewfile;

							$insert="UPDATE `blog` SET `category`='$category',`title`='$name',`description`='$description',`image`='$img' WHERE id='$id'";

							if($objFun->sql($insert)){

								$error="Blog  Has Been Update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/viewBlog.php');

							}else{

								$error="ERROR ! Blog Unable To Update";

								$_SESSION['msg']=$error;

								header('location:../view/viewBlog.php');
							}

							
						}
					}else{


						$insert="UPDATE `blog` SET `category`='$category', `title`='$name',`description`='$description' WHERE id='$id'";

							if($objFun->sql($insert)){

								$error="Blog  Has Been Update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/viewBlog.php');

							}else{

								$error="ERROR ! Blog Unable To Update";

								$_SESSION['msg']=$error;

								header('location:../view/viewBlog.php');
							}

					}

		break;

		case 'practice':

						$name=		        $objFun->validateData($_POST['title']);
						$description=		$objFun->validateData($_POST['editor1']);
						$id=			    $objFun->validateData($_POST['id']);

						if(!empty($imgfile=$_FILES["image"]["name"])){

						$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		
						$allowed_extensions = array(".jpg","jpeg",".png",".gif");
						
						if(!in_array($extension,$allowed_extensions))
						{
							echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
						}
						else
						{
						
							$imgnewfile=md5($imgfile).$extension;
							$path='../assets/img/practice/'.$imgnewfile;
							move_uploaded_file($_FILES["image"]["tmp_name"],$path);

							$img='assets/img/practice/'.$imgnewfile;

							$insert="UPDATE `practice` SET `name`='$name',`image`='$img',`description`='$description' WHERE id='$id'";

							if($objFun->sql($insert)){

								$error="Practices Been Update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/viewPractices.php');

							}else{

								$error="ERROR ! Practices Unable To Update";

								$_SESSION['msg']=$error;

								header('location:../view/viewPractices.php');
							}

							
						}
					}else{


						$insert="UPDATE `practice` SET `name`='$name',`description`='$description' WHERE id='$id'";

							if($objFun->sql($insert)){

								$error="Practice  Has Been Update Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/viewPractices.php');

							}else{

								$error="ERROR ! Practice Unable To Update";

								$_SESSION['msg']=$error;

								header('location:../view/viewPractices.php');
							}

					}

		break;
		// case 'product':
		// $id=         				$objFun->validateData($_POST['id']);
		// $jobtitle=         			$objFun->validateData($_POST['jobtitle']);
		// $category=		  			$objFun->validateData($_POST['cate']);
		// $jobtype=		  			$objFun->validateData($_POST['jobtype']);
		// $location=	  			    $objFun->validateData($_POST['location']);
		// $sallary=		  			$objFun->validateData($_POST['salary']);
		// $disipline=		  			$objFun->validateData($_POST['discipline']);
		// $reference=		  			$objFun->validateData($_POST['cas']);
		// $jobdescription=	  	    $objFun->validateData($_POST['content']);
		// $role=	  			        $objFun->validateData($_POST['content1']);
		// $about=	  			        $objFun->validateData($_POST['content2']);

		

	


		// 			$editProduct="UPDATE `job` SET `job_title`='$jobtitle',`category`='$category',`job_type`='$jobtype',`location`='$location',`salary`='$sallary',`discipline`='$disipline',`reference`='$reference',`job_description`='$jobdescription',`role`='$role',`about_you`='$about' WHERE id='$id'";

		// 			if($objFun->sql($editProduct)){

		// 					$error="Product update Successfully";

		// 				    $_SESSION['msg']=$error;

		// 				    header('location:../view/product.php');
		// 			}else{

		// 				    $error="Unable To update Product";

		// 				    $_SESSION['msg']=$error;

		// 				    header('location:../view/product.php');
		// 			}
				
		

		// break;
	
	default:
		header('location:../view/dashboard.php');
		break;
}


?>