<?php 

session_start();
include('../Admin/controller/function.php');

$objFun= new Fun;


if(isset($_POST['profile']))
{

		$email=  	$objFun->checkData($_POST['email']);
		$package=   $objFun->checkData($_POST['package']);
		$pass=   	$objFun->checkData($_POST['password']);
		$conpass=   $objFun->checkData($_POST['conpass']);
		$username=  $objFun->checkData($_POST['username']);
		$phone=   	$objFun->checkData($_POST['phone']);
		$gender=   	$objFun->checkData($_POST['gender']);



		if($pass===$conpass)
		{
			$imgfile=$_FILES["image"]["name"];
			if(!empty($imgfile))
			{
				$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
			
				$allowed_extensions = array(".jpg","jpeg",".png",".gif");
				
				if(!in_array($extension,$allowed_extensions))
				{
					echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
					echo "<script>window.location.href='../profile'</script>";
				}
				else
				{
					$imgnewfile=md5($imgfile).$extension;
					$path='../Admin/assets/img/profile/'.$imgnewfile;
					move_uploaded_file($_FILES["image"]["tmp_name"],$path);
					$img='Admin/assets/img/profile/'.$imgnewfile;
					$query="UPDATE `user` SET `first_name`='$username',`email`='$email',`mobile`='$phone',`gender`='$gender',`password`='$conpass',`image`='$img',`package`='$package' WHERE id='".$_SESSION['userid']."'";

					if($objFun->sql($query)){

						$_SESSION['msg']="Profile Has Been Updated !";
						echo "<script>window.location.href='../profile'</script>";
					}else{

						$_SESSION['msg']="Unable To Updated Profile !";
						echo "<script>window.location.href='../profile'</script>";
					}
				}
		}else{
			
				   $query="UPDATE `user` SET `first_name`='$username',`email`='$email',`mobile`='$phone',`gender`='$gender',`password`='$conpass',`package`='$package' WHERE id='".$_SESSION['userid']."'";

					if($objFun->sql($query)){

						$_SESSION['msg']="Profile Has Been Updated !";
						echo "<script>window.location.href='../profile'</script>";
					}else{

						$_SESSION['msg']="Unable To Updated Profile !";
						echo "<script>window.location.href='../profile'</script>";
					}
		}
}else{

	echo "<script>alert('Confirm Passsword Does Not Match')</script>";
	echo "<script>window.location.href='../profile'</script>";
}

}

?>