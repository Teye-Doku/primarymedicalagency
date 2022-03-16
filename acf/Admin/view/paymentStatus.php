<?php 



	include('../controller/function.php');
	$objFun= new Fun;

	$id= 			$_POST['uid'];
	$astatus=		$_POST['ustatus'];
	$query="UPDATE user SET payment_status='$astatus' WHERE id='$id'";
	$updateUser= $objFun->sql($query);




?>