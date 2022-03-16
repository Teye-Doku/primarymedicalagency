<?php 



	include('../controller/function.php');
	$objFun= new Fun;

	$id= 			$_POST['uid'];
	$astatus=		$_POST['astatus'];

	$updateUser= $objFun->sql("UPDATE user SET ac_status='$astatus' WHERE id='$id'");




?>