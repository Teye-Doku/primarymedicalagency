<?php 
    session_start();
    include('../Admin/controller/function.php');
    $objFun= new Fun;
    
        $message=        $objFun->checkData($_POST['smessage']);
        $senderId=       $objFun->checkData($_POST['sid']);
        $reciverid=      $objFun->checkData($_POST['rid']);  
        if(!empty($message))
        {
            echo $insertMessage="INSERT INTO `message`(`sender_id`, `reciver_id`, `message`) VALUES ('$senderId','$reciverid','$message')";
            $objFun->sql($insertMessage);
            
        }






?>