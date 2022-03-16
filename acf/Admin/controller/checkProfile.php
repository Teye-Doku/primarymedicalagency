<?php
	session_start();

	include('function.php');
	$objFun= new Fun;


	if(isset($_POST['submit']))
	{
		$cname=			$objFun->validateData($_POST['cname']);
		$email=			$objFun->validateData($_POST['email']);
		$pass=			$objFun->validateData($_POST['pass']);
		$fname=			$objFun->validateData($_POST['fname']);
		$lname=			$objFun->validateData($_POST['lname']);
		$address=		$objFun->validateData($_POST['address']);
		$city=			$objFun->validateData($_POST['city']);
		$country=		$objFun->validateData($_POST['country']);
		$pin=			$objFun->validateData($_POST['pin']);
		$about=			$objFun->validateData($_POST['about']);

		

		$imgfile=$_FILES["image"]["name"];
		if(!empty($imgfile))
		{
			$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
		
			$allowed_extensions = array(".jpg","jpeg",".png",".gif");
			
			if(!in_array($extension,$allowed_extensions))
			{
				echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
			}
			else
			{
			
				$imgnewfile=md5($imgfile).$extension;
				$path='../assets/img/profile'.$imgnewfile;
				move_uploaded_file($_FILES["image"]["tmp_name"],$path);

				$update="UPDATE `admin` SET `email`='$email',`password`='$pass',`company_name`='$cname',`owner_name`='$fname', `owner_lastName`='$lname', `address`='$address',`city`='$city',`country`='$country',`pin_code`='$pin',`about`='$about' ,`image`='$path' WHERE id='".$_SESSION['id']."'";

				if($objFun->sql($update))
				{
					$error="Your Profile Update Successfully";

					$_SESSION['msg']=$error;

					header('location:../view/profile.php');
				}
			}

		}
		else
		{
			   $update="UPDATE `admin` SET `email`='$email',`password`='$pass',`company_name`='$cname',`owner_name`='$fname', `owner_lastName`='$lname',`address`='$address',`city`='$city',`country`='$country',`pin_code`='$pin',`about`='$about' WHERE id='".$_SESSION['id']."'";

			   if($objFun->sql($update))
				{
					$error="Your Profile Update Successfully";

					$_SESSION['msg']=$error;

					header('location:../view/profile.php');
				}

		}	
	}

?>