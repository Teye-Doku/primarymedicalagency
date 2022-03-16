<?php
session_start();

include('function.php');
$objFun= new Fun;

$type=	base64_decode($_GET['type']);
$id=	base64_decode($_GET['id']);

switch ($type) {
	case 'slider':

			$select="SELECT * FROM slider WHERE id='$id'";
			$selectQuery=$objFun->sql($select);
			if($selectQuery->num_rows>0){

				$rowimage=$selectQuery->fetch_assoc();

				unlink($rowimage['image']);

				$delete="DELETE FROM `slider` WHERE id='$id'";
				if($objFun->sql($delete)){

					$error="Slider Image Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/slider.php');

				}else{

					$error="Unable To Delete Your Slider Image";
				    $_SESSION['msg']=$error;
					header('location:../view/slider.php');
				}
				
			}else{

				$error="Unable To Delete Your Slider Image";
				$_SESSION['msg']=$error;
				header('location:../view/slider.php');
			}

		break;
		
		
	case 'clientlogo':

			$select="SELECT * FROM image WHERE id='$id'";
			$selectQuery=$objFun->sql($select);
			if($selectQuery->num_rows>0){

				$rowimage=$selectQuery->fetch_assoc();

				unlink($rowimage['image']);

				$delete="DELETE FROM `image` WHERE id='$id'";
				if($objFun->sql($delete)){

					$error="client logo Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/clientLogo.php');

				}else{

					$error="Unable To Delete client logo";
				    $_SESSION['msg']=$error;
					header('location:../view/clientLogo.php');
				}
				
			}else{

				$error="Unable To Delete Your Slider Image";
				$_SESSION['msg']=$error;
				header('location:../view/slider.php');
			}

		break;

	case 'user':

			$select="SELECT * FROM user WHERE id='$id'";
			$selectQuery=$objFun->sql($select);
			if($selectQuery->num_rows>0){

				$rowimage=$selectQuery->fetch_assoc();
				 $image="..".substr($rowimage['image'],5);
				unlink($image);

				$delete="DELETE FROM `user` WHERE id='$id'";
				if($objFun->sql($delete)){

					$error="UserHas Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/user.php');

				}else{

					$error="Unable To Delete user";
				    $_SESSION['msg']=$error;
					header('location:../view/user.php');
				}
				
			}else{

				$error="Unable To Delete Your user";
				$_SESSION['msg']=$error;
				header('location:../view/user.php');
			}

		break;


	case 'baner':
			
			$select="SELECT * FROM topbanner WHERE id='$id'";
			$selectQuery=$objFun->sql($select);
			if($selectQuery->num_rows>0){

				$rowimage=$selectQuery->fetch_assoc();

				unlink($rowimage['image']);

				$delete="DELETE FROM `topbanner` WHERE id='$id'";
				if($objFun->sql($delete)){

					$error="Top Banner Image Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/topbanner.php');

				}else{

					$error="Unable To Delete  Top Banner Image";
				    $_SESSION['msg']=$error;
					header('location:../view/topbanner.php');
				}
				
			}else{

				$error="Unable To Delete  Top Banner Image";
				$_SESSION['msg']=$error;
				header('location:../view/topbanner.php');
			}

	break;	


	case 'category':

			$selectSub=$objFun->sql("SELECT * FROM `sub_category` WHERE parent='$id'");
			if($selectSub->num_rows>0)
			{
				$delete="DELETE parent_category,sub_category FROM parent_category INNER JOIN sub_category ON sub_category.parent=parent_category.id WHERE parent_category.id='$id'";
				if($objFun->sql($delete))
				{

						$error="Category Has Been Delete Successfully";
						$_SESSION['msg']=$error;
						header('location:../view/parentCategory.php');
				}else
				{

						$error="ERROR ! Unable To Delete  Category";
					    $_SESSION['msg']=$error;
						header('location:../view/parentCategory.php');
				}
			}else{

				$delete="DELETE FROM `parent_category` WHERE id='$id'";

				if($objFun->sql($delete))
				{

						$error="Category Has Been Delete Successfully";
						$_SESSION['msg']=$error;
						header('location:../view/parentCategory.php');
				}else
				{

						$error="ERROR ! Unable To Delete  Category1";
					    $_SESSION['msg']=$error;
						header('location:../view/parentCategory.php');
				}

			}

	break;


	case 'packageName':

			$selectSub=$objFun->sql("SELECT * FROM `package_value` WHERE package_id='$id'");
			if($selectSub->num_rows>0)
			{
				$delete="DELETE package,package_value FROM package INNER JOIN package_value ON package_value.package_id=package.id WHERE package.id='$id'";
				if($objFun->sql($delete))
				{

						$error="Package Has Been Delete Successfully";
						$_SESSION['msg']=$error;
						header('location:../view/package.php');
				}else
				{

						$error="ERROR ! Unable To Delete  Package";
					    $_SESSION['msg']=$error;
						header('location:../view/package.php');
				}
			}else{

				$delete="DELETE FROM `package` WHERE id='$id'";

				if($objFun->sql($delete))
				{

						$error="Package Has Been Delete Successfully";
						$_SESSION['msg']=$error;
						header('location:../view/package.php');
				}else
				{

						$error="ERROR ! Unable To Delete  Package";
					    $_SESSION['msg']=$error;
						header('location:../view/package.php');
				}

			}

	break;


	case 'packagedetail':

			$delete="DELETE FROM `package_value` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Package Feature Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/viewPackage.php');
			}else
			{

					$error="ERROR ! Unable To Delete  Package Feature";
				    $_SESSION['msg']=$error;
					header('location:../view/viewPackage.php');
			}

	break;
	
	case 'oncallservice':

			$delete="DELETE FROM `oncall_service` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="oncall service Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/oncallService.php');
			}else
			{

					$error="ERROR ! Unable To Delete  oncall service";
				    $_SESSION['msg']=$error;
					header('location:../view/oncallService.php');
			}

	break;
	
	
	
	case 'labasst':

			$delete="DELETE FROM `labasst_schedule_request` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="labasst Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/labasst.php');
			}else
			{

					$error="ERROR ! Unable To Delete  labasst";
				    $_SESSION['msg']=$error;
					header('location:../view/labasst.php');
			}

	break;
	
	case 'appointMedical':

			$delete="DELETE FROM `appoint_medical` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Medical Appointment Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/appointMedical.php');
			}else
			{

					$error="ERROR ! Unable To Delete Medical Appointment";
				    $_SESSION['msg']=$error;
					header('location:../view/appointMedical.php');
			}

	break;
	
	
case 'hrstaffing':

			$delete="DELETE FROM `hr_staffing` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="HR Staffing Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/hrstaffing.php');
			}else
			{

					$error="ERROR ! Unable To Delete HR Staffing";
				    $_SESSION['msg']=$error;
					header('location:../view/hrstaffing.php');
			}

	break;
	
	
	
	case 'evalutionConsult':

			$delete="DELETE FROM `evalution_consult` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="evalution Consult Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/evalutionConsult.php');
			}else
			{

					$error="ERROR ! Unable To Delete evalution Consult";
				    $_SESSION['msg']=$error;
					header('location:../view/evalutionConsult.php');
			}

	break;
	
	
	
	case 'memberConsult':

			$delete="DELETE FROM `member_consult` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Member Consult Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/memberConsult.php');
			}else
			{

					$error="ERROR ! Unable To Delete Member Consult";
				    $_SESSION['msg']=$error;
					header('location:../view/memberConsult.php');
			}

	break;
	case 'url':

			$delete="DELETE FROM `links` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Link Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/links.php');
			}else
			{

					$error="ERROR ! Unable To Delete  Link";
				    $_SESSION['msg']=$error;
					header('location:../view/links.php');
			}

	break;


	case 'subcategory':

			$delete="DELETE FROM `sub_category` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Sub-Category Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/subCategory.php');
			}else
			{

					$error="ERROR ! Unable To Delete  sub-Category";
				    $_SESSION['msg']=$error;
					header('location:../view/subCategory.php');
			}

	break;

	case 'applyservice':

			$delete="DELETE FROM `apply_service` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Apply Service Detail Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/applyservice.php');
			}else
			{

					$error="ERROR ! Unable To Delete  Apply Service Detail";
				    $_SESSION['msg']=$error;
					header('location:../view/applyservice.php');
			}

	break;



	case 'servicename':

			$delete="DELETE FROM `services` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Service Name Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/services.php');
			}else
			{

					$error="ERROR ! Unable To Delete  Service Name";
				    $_SESSION['msg']=$error;
					header('location:../view/services.php');
			}

	break;
	

	case 'servicedetail':

			$selectGallary=$objFun->sql("SELECT * FROM about_services WHERE id='$id'");

			$resultGallary=$selectGallary->fetch_assoc();
			$img=$resultGallary['image'];
			if(!empty($img))
			{
				$imgPath="../".$img;
				unlink($imgPath);
			}
			$delete="DELETE FROM `about_services` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Service Name Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/viewServices.php');
			}else
			{

					$error="ERROR ! Unable To Delete  Service Name";
				    $_SESSION['msg']=$error;
					header('location:../view/viewServices.php');
			}

	break;


	case 'practices':

			$selectGallary=$objFun->sql("SELECT * FROM practice WHERE id='$id'");

			$resultGallary=$selectGallary->fetch_assoc();
			$img=$resultGallary['image'];
			if(!empty($img))
			{
				$imgPath="../".$img;
				unlink($imgPath);
			}
			$delete="DELETE FROM `practice` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Practice Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/viewPractices.php');
			}else
			{

					$error="ERROR ! Unable To Delete  Practice";
				    $_SESSION['msg']=$error;
					header('location:../view/viewPractices.php');
			}

	break;
	
	case 'review':

			$selectGallary=$objFun->sql("SELECT * FROM review WHERE id='$id'");

			$resultGallary=$selectGallary->fetch_assoc();
			$img=substr($resultGallary['image'],6);
			if(!empty($img))
			{
				$imgPath="../".$img;
				unlink($imgPath);
			}
			$delete="DELETE FROM `review` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Review Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/review.php');
			}else
			{

					$error="ERROR ! Unable To Delete  Review";
				    $_SESSION['msg']=$error;
					header('location:../view/review.php');
			}

	break;
	
	
	 case 'blogcategory':
				
				$delete="DELETE FROM `blog_category` WHERE id='$id'";
				if($objFun->sql($delete))
				{

						$error="Blog Category Has Been Delete Successfully";
						$_SESSION['msg']=$error;
						header('location:../view/addBlog.php');
				}else
				{

						$error="ERROR ! Unable To Delete  Blog Category";
					    $_SESSION['msg']=$error;
						header('location:../view/addBlog.php');
				}

	break;


	case 'blog':

			$selectGallary=$objFun->sql("SELECT * FROM blog WHERE id='$id'");

			$resultGallary=$selectGallary->fetch_assoc();
			$img=$resultGallary['image'];
			if(!empty($img))
			{
				$imgPath="../".$img;
				unlink($imgPath);
			}
			$delete="DELETE FROM `blog` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Blog Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/viewBlog.php');
			}else
			{

					$error="ERROR ! Unable To Delete  Blog";
				    $_SESSION['msg']=$error;
					header('location:../view/viewBlog.php');
			}

	break;



	case 'team':

			$selectGallary=$objFun->sql("SELECT * FROM team WHERE id='$id'");

			$resultGallary=$selectGallary->fetch_assoc();
			$img=$resultGallary['image'];
			if(!empty($img))
			{
				$imgPath="../".$img;
				unlink($imgPath);
			}
			$delete="DELETE FROM `team` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Team Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/team.php');
			}else
			{

					$error="ERROR ! Unable To Delete  Team";
				    $_SESSION['msg']=$error;
					header('location:../view/team.php');
			}

	break;

	case 'unit':

			$delete="DELETE FROM `product_unit` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Unit Name Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/unit.php');
			}else
			{

					$error="ERROR ! Unable To Delete Unit";
				    $_SESSION['msg']=$error;
					header('location:../view/unit.php');
			}

	break;


	case 'gallary':

			$selectGallary=$objFun->sql("SELECT * FROM gallary WHERE id='$id'");

			$resultGallary=$selectGallary->fetch_assoc();
			$img=$resultGallary['image'];
			if(!empty($img))
			{
				$imgPath="../".$img;
				unlink($imgPath);
			}
			$delete="DELETE FROM `gallary` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Product Type Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/type.php');
			}else
			{

					$error="ERROR ! Unable To Delete Product Type";
				    $_SESSION['msg']=$error;
					header('location:../view/type.php');
			}

	break;
	
	
	case 'video':

			$selectGallary=$objFun->sql("SELECT * FROM video WHERE id='$id'");

			$resultGallary=$selectGallary->fetch_assoc();
			$img=$resultGallary['video'];
			if(!empty($img))
			{
				$imgPath="../".$img;
				unlink($imgPath);
			}
			$delete="DELETE FROM `video` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Video Has Been Deleted Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/video.php');
			}else
			{

					$error="ERROR ! Unable To Delete Video";
				    $_SESSION['msg']=$error;
					header('location:../view/video.php');
			}

	break;


	case 'aboutus':

			$delete="DELETE FROM `about_us` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="About Us Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/size.php');
			}else
			{

					$error="ERROR ! Unable To Delete About Us";
				    $_SESSION['msg']=$error;
					header('location:../view/size.php');
			}
	break;



	case 'color':

			$delete="DELETE FROM `product_color` WHERE id='$id'";
			if($objFun->sql($delete))
			{

					$error="Product Color Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/color.php');
			}else
			{

					$error="ERROR ! Unable To Delete Color Type";
				    $_SESSION['msg']=$error;
					header('location:../view/color.php');
			}
	break;


	case 'course':
			
			$select="SELECT * FROM course WHERE id='$id'";
			$selectQuery=$objFun->sql($select);
			if($selectQuery->num_rows>0){

				$rowimage=$selectQuery->fetch_assoc();

				if(!empty($rowimage['image'])){
					unlink($rowimage['image']);
				}

				$delete="DELETE FROM `course` WHERE id='$id'";
				if($objFun->sql($delete)){

					$error="Course Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/course.php');

				}else{

					$error="Unable To Delete  course";
				    $_SESSION['msg']=$error;
					header('location:../view/course.php');
				}
				
			}else{

				$error="Unable To Delete  Course";
				$_SESSION['msg']=$error;
				header('location:../view/course.php');
			}

		break;


		case 'seo':
				
				$delete="DELETE FROM `seo` WHERE id='$id'";
				if($objFun->sql($delete))
				{

						$error="Seo Details Has Been Delete Successfully";
						$_SESSION['msg']=$error;
						header('location:../view/seo.php');
				}else
				{

						$error="ERROR ! Unable To Delete  Seo Details";
					    $_SESSION['msg']=$error;
						header('location:../view/seo.php');
				}

			break;

		case 'logo':
				
				$select="SELECT * FROM logo WHERE id='$id'";
				$selectQuery=$objFun->sql($select);
				if($selectQuery->num_rows>0)
				{

						$rowimage=$selectQuery->fetch_assoc();

						unlink($rowimage['logo']);

						$delete="DELETE FROM `logo` WHERE id='$id'";
						if($objFun->sql($delete)){

							$error="Logo Has Been Delete Successfully";
							$_SESSION['msg']=$error;
							header('location:../view/logo.php');

						}else{

							$error="Unable To Delete  Logo";
						    $_SESSION['msg']=$error;
							header('location:../view/logo.php');
						}
						
					}else{

						$error="Unable To Delete  Top Logo";
						$_SESSION['msg']=$error;
						header('location:../view/logo.php');
			    }
			break;

		case 'menu':
				
				$delete="DELETE FROM `menu` WHERE id='$id'";
				if($objFun->sql($delete))
				{

						$error="Menu Name Has Been Delete Successfully";
						$_SESSION['msg']=$error;
						header('location:../view/menu.php');
				}else
				{

						$error="ERROR ! Unable To Delete  Menu Name";
					    $_SESSION['msg']=$error;
						header('location:../view/menu.php');
				}

			break;


	case 'job':

			


				$delete="DELETE FROM `job` WHERE id='$id'";
				if($objFun->sql($delete)){

					$error="Slider Image Has Been Delete Successfully";
					$_SESSION['msg']=$error;
					header('location:../view/product.php');

				}else{

					$error="Unable To Delete Your Slider Image";
				    $_SESSION['msg']=$error;
					header('location:../view/product.php');
				}
				
			

		break;
	
	default:
		# code...
		break;
}






?>