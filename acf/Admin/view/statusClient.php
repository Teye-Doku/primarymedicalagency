<?php
include('../controller/function.php');
$objFun= new Fun;
$ty=$_POST['type'];
$sql="UPDATE `clientlogo_style` SET `type`='$ty' WHERE `id`='1'";
$objFun->sql($sql);


?>