<?php
	session_start();
    include('../Admin/controller/function.php');

    $objFun= new Fun;
	$data= serialize($_POST);
	$sid=$_SESSION['serviceId'];
	if(!empty($_SESSION['userid']))
	{
		$uid=$_SESSION['userid'];
	}else{
		$uid=0;
	}
	 $insertData="INSERT INTO `apply_service`(`service_name`,`service_data`, `user_id`) VALUES ('$sid','$data','$uid')" ;
    if($objFun->sql($insertData)){

        $_SESSION['servicesend']=true;
    }

?>

<script type="text/javascript">
					window.location.href='../service?id=<?=base64_encode($sid)?>';
</script>