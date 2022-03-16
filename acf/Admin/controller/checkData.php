<?php

session_start();

include('function.php');
$objFun= new Fun;

$ptype=base64_decode($_GET['ptype']);

switch ($ptype) {
	case 'slider':

		    $imgfile=$_FILES["image"]["name"];
			$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		
			$allowed_extensions = array(".jpg","jpeg",".png",".gif");
			
			if(!in_array($extension,$allowed_extensions))
			{
				echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
			}
			else
			{
			
				$imgnewfile=md5($imgfile).$extension;
				$path='../assets/img/slider'.$imgnewfile;
				move_uploaded_file($_FILES["image"]["tmp_name"],$path);

				$insert="INSERT INTO `slider`(`image`) VALUES ('$path')";

				if($objFun->sql($insert))
				{
					$error="Slider Image Add Successfully";

					$_SESSION['msg']=$error;

					header('location:../view/slider.php');
				}
			}
	break;



		case 'banner':

			$imgfile=$_FILES["image"]["name"];
			$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		
			$allowed_extensions = array(".jpg","jpeg",".png",".gif");
			
			if(!in_array($extension,$allowed_extensions))
			{
				echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
			}
			else
			{
			
				$imgnewfile=md5($imgfile).$extension;
				$path='../assets/img/banner'.$imgnewfile;
				move_uploaded_file($_FILES["image"]["tmp_name"],$path);

				$insert="INSERT INTO `topbanner`(`image`) VALUES ('$path')";

				if($objFun->sql($insert))
				{
					$error="Banner Image Add Successfully";

					$_SESSION['msg']=$error;

					header('location:../view/topbanner.php');
				}
			}

		break;


		case 'unit':

						$unit=$objFun->validateData($_POST['unit']);

						if(!empty($unit)){

							$insert="INSERT INTO `product_unit`(`unit_name`) VALUES ('$unit')";

							if($objFun->sql($insert)){

								$error="Unit Name Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/unit.php');

							}else{

								$error="ERROR ! Unit Name Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/unit.php');
							}
						}

		break;



		case 'gallary':

						$type=$objFun->validateData($_POST['type']);

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
							$path='../assets/img/gallary/'.$imgnewfile;
							move_uploaded_file($_FILES["image"]["tmp_name"],$path);

							$img='assets/img/gallary/'.$imgnewfile;

							$insert="INSERT INTO `gallary`(`title`, `image`) VALUES ('$type','$img')";

							if($objFun->sql($insert)){

								$error="Image Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/type.php');

							}else{

								$error="ERROR ! Image Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/type.php');
							}
						}
					}
						

		break;
		
		case 'video':

						$type=$objFun->validateData($_POST['type']);

						if(!empty($imgfile=$_FILES["image"]["name"])){

						$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		
						$allowed_extensions = array(".mp4",".avi",".3gp",".hd");
						
						if(!in_array($extension,$allowed_extensions))
						{
							echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
						}
						else
						{
						
							$imgnewfile=md5($imgfile).$extension;
							$path='../assets/img/video/'.$imgnewfile;
							move_uploaded_file($_FILES["image"]["tmp_name"],$path);

							$img='assets/img/video/'.$imgnewfile;
                            
							$insert="INSERT INTO `video`(`title`, `video`) VALUES ('$type','$img')";

							if($objFun->sql($insert)){

								$error="Video Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/video.php');

							}else{

								$error="ERROR ! Video Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/video.php');
							}
						}
					}
						

		break;

		case 'aboutus':

						$mission=		$objFun->validateData($_POST['mission']);
						$vission=		$objFun->validateData($_POST['vission']);
						//$startegy=		$objFun->validateData($_POST['startegy']);
						//$whoweare=		$objFun->validateData($_POST['who']);

						if(!empty($mission) && !empty($vission)){

							$insert="INSERT INTO `about_us`(`mission`, `vission`, `startegy`, `who_we_are`) VALUES ('$mission','$vission','0','0')";

							if($objFun->sql($insert)){

								$error="About Us Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/size.php');

							}else{

								$error="ERROR ! Abou Us Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/size.php');
							}
						}

		break;

		case 'packageName':
					
					$packageName=				$objFun->validateData($_POST['pname']);
					$packageprice=				$objFun->validateData($_POST['pprice']);
					

					if(!empty($packageName) && !empty($packageprice)){

							$insert="INSERT INTO `package`(`package_name`, `package_price`) VALUES ('$packageName','$packageprice')";

							if($objFun->sql($insert)){

								$error="Package Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/package.php');

							}else{

								$error="ERROR ! Package Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/package.php');
							}
					}
		break;

		case 'packagedetal':
					
					$packageName=				$objFun->validateData($_POST['packagename']);
					$feature=				    $objFun->validateData($_POST['feature']);
					$status=				    $objFun->validateData($_POST['status']);
					

					if(!empty($packageName) && !empty($feature) && !empty($status)){

							$insert="INSERT INTO `package_value`(`package_id`, `package_option`, `status`) VALUES ('$packageName','$feature','$status')";

							if($objFun->sql($insert)){

								$error="Package Feature Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/packageDetail.php');

							}else{

								$error="ERROR ! Package Feature Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/packageDetail.php');
							}
					}
		break;


		case 'servicedetal':

						$serviceName=       $objFun->validateData($_POST['servicename']);
						$serviceTitle=       $objFun->validateData($_POST['stitle']);
						$description=       $objFun->validateData($_POST['editor1']);

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

							$insert="INSERT INTO `about_services`(`service_name`, `title`,`title_description`, `image`) VALUES ('$serviceName','$serviceTitle','$description','$img')";

							if($objFun->sql($insert)){

								$error="Service Detail Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/serviceDetail.php');

							}else{

								$error="ERROR ! Color Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/serviceDetail.php');
							}

							
						}
					}else{

						        $error="ERROR ! Color Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/serviceDetail.php');

					}
						

					

		break;

        	case 'links':
					
					$Name=				$objFun->validateData($_POST['name']);
					$url=				$objFun->validateData($_POST['url']);
					

					if(!empty($Name) && !empty($url)){

							$insert="INSERT INTO `links`(`name`, `url`) VALUES ('$Name','$url')";

							if($objFun->sql($insert)){

								$error="Link Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/links.php');

							}else{

								$error="ERROR ! Link Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/links.php');
							}
					}
		break;

// 		case 'practices':

// 						$practiceName=       $objFun->validateData($_POST['name']);
// 						$description=       $objFun->validateData($_POST['editor1']);

// 						if(!empty($imgfile=$_FILES["image"]["name"])){

// 						$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		
// 						$allowed_extensions = array(".jpg","jpeg",".png",".gif");
						
// 						if(!in_array($extension,$allowed_extensions))
// 						{
// 							echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
// 						}
// 						else
// 						{
						
// 							$imgnewfile=md5($imgfile).$extension;
// 							$path='../assets/img/practice/'.$imgnewfile;
// 							move_uploaded_file($_FILES["image"]["tmp_name"],$path);

// 							$img='assets/img/practice/'.$imgnewfile;

// 							$insert="INSERT INTO `practice`(`name`, `image`, `description`) VALUES ('$practiceName','$img','$description')";

// 							if($objFun->sql($insert)){

// 								$error="Practices Detail Has Been Add Successfully";

// 								$_SESSION['msg']=$error;

// 								header('location:../view/addPractices.php');

// 							}else{

// 								$error="ERROR ! Practices  Unable To Add";

// 								$_SESSION['msg']=$error;

// 								header('location:../view/addPractices.php');
// 							}

							
// 						}
// 					}else{

// 						        $error="ERROR ! Practices Unable To Add";

// 								$_SESSION['msg']=$error;

// 								header('location:../view/addPractices.php');

// 					}
						

					

// 		break;
		
	   //case 'blogCategory':
					
				// 	$category=				$objFun->validateData($_POST['category']);
					
					

				// 	if(!empty($category)){

				// 			$insert="INSERT INTO `blog_category`(`category`) VALUES ('$category')";

				// 			if($objFun->sql($insert)){

				// 				$error="Blog Category Has Been Add Successfully";

				// 				$_SESSION['msg']=$error;

				// 				header('location:../view/addBlog.php');

				// 			}else{

				// 				$error="ERROR ! Blog Category Unable To Add";

				// 				$_SESSION['msg']=$error;

				// 				header('location:../view/addBlog.php');
				// 			}
				// 	}

				// break;


// 		case 'blog':

// 						$title=       		$objFun->validateData($_POST['title']);
// 						$description=       $objFun->validateData($_POST['content']);
// 						$category=	  $objFun->validateData($_POST['category']);

// 						if(!empty($imgfile=$_FILES["image"]["name"])){

// 						$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		
// 						$allowed_extensions = array(".jpg","jpeg",".png",".gif");
						
// 						if(!in_array($extension,$allowed_extensions))
// 						{
// 							echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
// 						}
// 						else
// 						{
						
// 							$imgnewfile=md5($imgfile).$extension;
// 							$path='../assets/img/blog/'.$imgnewfile;
// 							move_uploaded_file($_FILES["image"]["tmp_name"],$path);

// 							$img='assets/img/blog/'.$imgnewfile;

// 							$insert="INSERT INTO `blog`(`category`,`title`, `description`, `image`) VALUES ('$category','$title','$description','$img')";

// 							if($objFun->sql($insert)){

// 								$error="Blog  Has Been Add Successfully";

// 								$_SESSION['msg']=$error;

// 								header('location:../view/addBlog.php');

// 							}else{

// 								$error="ERROR ! Blog  Unable To Add";

// 								$_SESSION['msg']=$error;

// 								header('location:../view/addBlog.php');
// 							}

							
// 						}
// 					}else{

// 						        $error="ERROR ! Practices Unable To Add";

// 								$_SESSION['msg']=$error;

// 								header('location:../view/addBlog.php');

// 					}
						

					

// 		break;



// 		case 'team':

// 						$title=       		$objFun->validateData($_POST['name']);
// 						$description=       $objFun->validateData($_POST['designation']);

// 						if(!empty($imgfile=$_FILES["image"]["name"])){

// 						$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		
// 						$allowed_extensions = array(".jpg","jpeg",".png",".gif");
						
// 						if(!in_array($extension,$allowed_extensions))
// 						{
// 							echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
// 						}
// 						else
// 						{
						
// 							$imgnewfile=md5($imgfile).$extension;
// 							$path='../assets/img/team/'.$imgnewfile;
// 							move_uploaded_file($_FILES["image"]["tmp_name"],$path);

// 							$img='assets/img/team/'.$imgnewfile;

// 							$insert="INSERT INTO `team`(`name`, `designation`, `image`) VALUES ('$title','$description','$img')";

// 							if($objFun->sql($insert)){

// 								$error="Team Member  Has Been Add Successfully";

// 								$_SESSION['msg']=$error;

// 								header('location:../view/team.php');

// 							}else{

// 								$error="ERROR ! Team Member Unable To Add";

// 								$_SESSION['msg']=$error;

// 								header('location:../view/team.php');
// 							}

							
// 						}
// 					}else{

// 						        $error="ERROR ! Team Member Unable To Add";

// 								$_SESSION['msg']=$error;

// 								header('location:../view/team.php');

// 					}
						

					

// 		break;

		case 'category':

						$category=		$objFun->validateData($_POST['category']);
						$serviceId=		$objFun->validateData($_POST['sid']);

						if(!empty($category)){

							$insert="INSERT INTO `parent_category`(`service_id`,`name`) VALUES ('$serviceId','$category')";

							if($objFun->sql($insert)){

								$error="Category Name Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/parentCategory.php');

							}else{

								$error="ERROR ! Category Name Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/parentCategory.php');
							}
						}

		break;


		case 'subcategory':

						$category=			$objFun->validateData($_POST['category']);
						$subcategory=		$objFun->validateData($_POST['subcategory']);

						if(!empty($category)){

							$insert="INSERT INTO `sub_category`(`parent`, `subcategory`) VALUES ('$category','$subcategory')";

							if($objFun->sql($insert)){

								$error="Sub-Category Name Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/subCategory.php');

							}else{

								$error="ERROR ! Sub-Category Name Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/subCategory.php');
							}
						}

		break;

		case 'course':
			

					$category=    $objFun->validateData($_POST['cate']);
					$title=		  $objFun->validateData($_POST['ntitle']);
					$content=	  $objFun->validateData($_POST['content']);

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
							$path='../assets/img/course/'.$imgnewfile;
							move_uploaded_file($_FILES["image"]["tmp_name"],$path);

							$insert="INSERT INTO `course`(`category`, `title`, `content`, `image`) VALUES ('$category','$title','$content','$path')";

							if($objFun->sql($insert))
							{
								$error="Course Has Been Add Successfully Done";

								$_SESSION['msg']=$error;

								header('location:../view/course.php');
							}
						}
					}else{

							$insert="INSERT INTO `course`(`category`, `title`, `content`) VALUES ('$category','$title','$content')";

							if($objFun->sql($insert))
							{
								$error="Course Has Been Add Successfully Done";

								$_SESSION['msg']=$error;

								header('location:../view/course.php');
							}

					}


			break;

			case 'seo':
					
					$title=				$objFun->validateData($_POST['title']);
					$description=		$objFun->validateData($_POST['description']);
					$keywords=			$objFun->validateData($_POST['keywords']);

					if(!empty($description) && !empty($keywords)){

							$insert="INSERT INTO `seo`(`title`, `description`, `keywords`) VALUES ('$title','$description','$keywords')";

							if($objFun->sql($insert)){

								$error="Seo detail Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/seo.php');

							}else{

								$error="ERROR ! Seo detail Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/seo.php');
							}
					}



				break;

			case 'logo':
					
					
				    $imgfile=$_FILES["image"]["name"];
					$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
				
					$allowed_extensions = array(".jpg","jpeg",".png",".gif");
					
					if(!in_array($extension,$allowed_extensions))
					{
						echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
					}
					else
					{
					
						$imgnewfile=md5($imgfile).$extension;
						$path='../assets/img/logo'.$imgnewfile;
						move_uploaded_file($_FILES["image"]["tmp_name"],$path);

						$insert="INSERT INTO `logo`(`logo`) VALUES ('$path')";

						if($objFun->sql($insert))
						{
							$error="Logo Add Successfully";

							$_SESSION['msg']=$error;

							header('location:../view/logo.php');
						}
					}

				break;

			case 'menuname':
					
					$menuName=				$objFun->validateData($_POST['mname']);
					$url=		            $objFun->validateData($_POST['url']);
					

					if(!empty($menuName) && !empty($url)){

							$insert="INSERT INTO `menu`(`name`, `url`, `status`) VALUES ('$menuName','$url','0')";

							if($objFun->sql($insert)){

								$error="Menu Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/menu.php');

							}else{

								$error="ERROR ! Menu Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/menu.php');
							}
					}

				break;


			case 'servicename':
					
					$serviceName=				$objFun->validateData($_POST['service']);
					
					

					if(!empty($serviceName)){

							$insert="INSERT INTO `services`(`name`) VALUES ('$serviceName')";

							if($objFun->sql($insert)){

								$error="Service has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/services.php');

							}else{

								$error="ERROR ! Service Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/services.php');
							}
					}else{

						       $error="ERROR ! Please Enter Your Service Name";

								$_SESSION['msg']=$error;

								header('location:../view/services.php');
					}

				break;		

			case 'social':

					$facebook=				    $objFun->validateData($_POST['facebook']);
					$twiter=		            $objFun->validateData($_POST['twiter']);
					$instagram=					$objFun->validateData($_POST['instagram']);
					$linkedin=					$objFun->validateData($_POST['linkedin']);
					$youtube=					$objFun->validateData($_POST['youtube']);
					
					$select="SELECT * FROM social";
					$querySelect=$objFun->sql($select);
					if($querySelect->num_rows>0){

							$rowId=$querySelect->fetch_assoc();
							$delete="DELETE FROM `social` WHERE id='".$rowId['id']."'";
							$deleteQuery=$objFun->sql($delete);
							$insert="INSERT INTO `social`(`facebook`, `twiter`,`linkedin`, `youtube`, `instagram`) VALUES ('$facebook','$twiter','$instagram','$linkedin','$youtube')";

							if($objFun->sql($insert)){

								$error="Social link Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/social.php');

							}else{

								$error="ERROR ! Social Link Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/social.php');
							}
					}else{

						     $insert="INSERT INTO `social`(`facebook`, `twiter`,`linkedin`, `youtube`, `instagram`) VALUES ('$facebook','$twiter','$instagram','$linkedin','$youtube')";

							if($objFun->sql($insert)){

								$error="Social link Has Been Add Successfully";

								$_SESSION['msg']=$error;

								header('location:../view/social.php');

							}else{

								$error="ERROR ! Social Link Unable To Add";

								$_SESSION['msg']=$error;

								header('location:../view/social.php');
							}
					}

			break;
			
			
			case 'image':
					
					$type=$objFun->validateData($_POST['type']);
				    $imgfile=$_FILES["image"]["name"];
					$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
				
					$allowed_extensions = array(".jpg","jpeg",".png",".gif",".JPG",".JPEG",".PNG");
					
					if(!in_array($extension,$allowed_extensions))
					{
						echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
						header('location:../view/serviceImage.php');
					}
					else
					{
					
						$imgnewfile=md5($imgfile).$extension;
						$path='../assets/img/image/'.$imgnewfile;
						move_uploaded_file($_FILES["image"]["tmp_name"],$path);

						$insert="UPDATE `image` SET `image`='$path' WHERE `type`='$type'";

						if($objFun->sql($insert))
						{
							$error="Service page image   Add Successfully";

							$_SESSION['msg']=$error;
                            if($type==='service'){
                                
                              header('location:../view/serviceImage.php');  
                            }else{
                                
                                header('location:../view/loginPageImage.php'); 
                            }
							
						}
					}

				break;
				
				
				
					case 'clientlogo':
					
					$type=$objFun->validateData($_POST['type']);
				    $imgfile=$_FILES["image"]["name"];
					$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
				
					$allowed_extensions = array(".jpg","jpeg",".png",".gif",".JPG",".JPEG",".PNG");
					
					if(!in_array($extension,$allowed_extensions))
					{
						echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
						header('location:../view/serviceImage.php');
					}
					else
					{
					
						$imgnewfile=md5($imgfile).$extension;
						$path='../assets/img/image/'.$imgnewfile;
						move_uploaded_file($_FILES["image"]["tmp_name"],$path);
                        
						$insert="INSERT INTO `image`( `type`, `image`) VALUES ('$type','$path')";

						if($objFun->sql($insert))
						{
							$error="Service page image   Add Successfully";

							$_SESSION['msg']=$error;
                           
                                
                              header('location:../view/clientLogo.php');  
                           
							
						}
					}

				break;
	
	default:
		header('location:../view/dashboard.php');
		break;
}


?>