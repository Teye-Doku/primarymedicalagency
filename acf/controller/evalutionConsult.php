<?php 


    session_start();
    include('../Admin/controller/function.php');

    $objFun= new Fun;
    
    
    if(isset($_POST['submit']))
    {
        $name=                  $objFun->checkData($_POST['nms']);
        $address=               $objFun->checkData($_POST['addone']);
        $city=                  $objFun->checkData($_POST['city']);
        $state=                 $objFun->checkData($_POST['state']);
        $zip=                   $objFun->checkData($_POST['zip']);
        $contact=               $objFun->checkData($_POST['contact']);
        $email=                 $objFun->checkData($_POST['email']);
        $fax=                   $objFun->checkData($_POST['fax']);
        $phone=                 $objFun->checkData($_POST['phone']);
        $weneed=                $objFun->checkData($_POST['weneed']);
        $ldob=                  $objFun->checkData($_POST['ldob']);
        $cgt=                   $objFun->checkData($_POST['cgt']);
        $comment=               $objFun->checkData($_POST['Comment']);
        
       
       $query="INSERT INTO `evalution_consult`(`name`, `address`, `city`, `state`, `zip`, `contacted`, `email`, `fax`, `phone`, `best_time_to_call`, `preferred_Date`, `preferred _time`, `office_description`) VALUES ('$name','$address','$city','$state','$zip','$contact','$email','$fax','$phone','$weneed','$ldob','$cgt','$comment')";
        
        $objFun->sql($query);
        
        
                // $email=$_POST['email'];
                // $name=$_POST['name'];
    			require'../phpmailer/PHPMailerAutoload.php';
    	    	$mail=new PHPMailer;
    	    	//$mail->isSMTP();
    	    	$mail->Host='mail.vando.in';
    	    	$mail->Port=587;
    	    	$mail->SMTPAuth=true;
    	    	$mail->SMTPSecure='tls';
    	    	$mail->Username='karnejivaishali@gmail.com';
    	    	$mail->Password='9199162423';
    	    	$mail->setFrom($email,$name);
    	    	$mail->addAddress("karnejivaishali@gmail.com");
    	    	$mail->isHTML(true);
    	    	$mail->Subject='Evalution Consulnt Service Information '.$email;
    	    	
    	    	$mail->Body="Name :".$name."<br>"."Address :".$address."<br>"."City:".$city."<br>"."state :".$state."<br>"."zip :".$zip."<br>"."How do you prefer to be contacted? :".$contact."<br>"."Email :".$email."<br> Fax :".$fax."<br> Phone :".$phone."<br> Best time to call :".$weneed."<br> Preferred Date :".$ldob."<br> Preferred Time :".$cgt."<br> Online Directory Office Description :".$comment;
    
    	    	if(!$mail->send()){
    	    		die("error");
    	    	}
    	    	else{
    	    	    
    	    	    $_SESSION['message']="Evaluation Consult Service Registration Has Been Successfully Done";
    	    	    ?>
    	    	    <script>
    	    	          //  alert("Evaluation Consult Service Registration Has Been Successfully Done");
    	    	            window.location.href='../thanks';
    	    	    </script>
    	    	    <?php
    				//header("location:");
    			}
        
        
    }


?>
