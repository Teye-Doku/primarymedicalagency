<?php
include('../controller/function.php');
$objFun= new Fun;
$id=        $_POST['sendid'];
$value=     $_POST['sendval'];
$sql="UPDATE `review` SET`type`='$value' WHERE id='$id'";
$objFun->sql($sql);


?>