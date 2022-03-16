<?php

session_start();

include('function.php');
$objFun= new Fun;

//$type=	base64_decode($_GET['type']);
$pid=	base64_decode($_GET['pid']);

switch ($pid) {
	case 'status':
			
			$id= $objFun->validateData($_POST['postid']);

			$value= $objFun->validateData($_POST['postvalue']);

			$update="UPDATE `menu` SET `status`='$value' WHERE id='$id'";

			if($objFun->sql($update)){

				$select="SELECT * FROM menu WHERE id='$id'";
				$resultsel=$objFun->sql($select);
				$rowmenu=$resultsel->fetch_assoc();
				if($value==1){

					$error=$rowmenu['name']." Menu has been Enable";
			    	$_SESSION['msg']=$error;
			    }else{

			    	$error=$rowmenu['name']." Menu has been Disable";
			    	$_SESSION['msg']=$error;
			    }
			}

		break;
		
	case 'orderStatus':
			
			$id= $objFun->validateData($_POST['postid']);

			$value= $objFun->validateData($_POST['postvalue']);

			echo $update="UPDATE `order_detail` SET `status`='$value' WHERE id='$id'";

			if($objFun->sql($update)){

					$error="Order Status has been Changed";
			    	$_SESSION['msg']=$error;
			}

	break;		
	
	default:
		# code...
		break;
}



?>