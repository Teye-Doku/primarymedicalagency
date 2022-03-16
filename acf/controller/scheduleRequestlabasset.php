<?php 


    session_start();
    include('../Admin/controller/function.php');

    $objFun= new Fun;
    
    
    if(isset($_POST['submit']))
    {
        $name=              $objFun->checkData($_POST['name']);
        $email=             $objFun->checkData($_POST['email']);
        $servicefor=        $objFun->checkData($_POST['servicefor']);
        $WeNeedHelpBecause= $objFun->checkData($_POST['weneed']);
        $weneed=            $objFun->checkData($_POST['itm']);
        $weneedthis=        $objFun->checkData($_POST['wk']);
        $AssessmentIntake=  $objFun->checkData($_POST['gh']);
       $query="INSERT INTO `labasst_schedule_request`(`name`, `email`, `services_for`, `we_need_help_because`, `we_need_help`, `we_need_this`, `require_help`) VALUES 
       ('$name','$email','$servicefor','$WeNeedHelpBecause','$weneed','$weneedthis','$AssessmentIntake')";
        
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
    	    	$mail->Subject='Schdule Request For Labasst Service Information '.$email;
    	    	
    	    	$mail->Body="Name :".$name."<br>"."Email :".$email."<br>"."These Services Are For:".$servicefor."<br>"."We Need Help Because I/He/She is :".$WeNeedHelpBecause."<br>"."We Need Help :".$weneed."<br>"."We Need This Help :".$weneedthis."<br>"."Assessment Intake :".$AssessmentIntake;
    
    	    	if(!$mail->send()){
    	    		die("error");
    	    	}
    	    	else{
    	    	    
    	    	    $_SESSION['message']="Schdule Request For Labasst Registration Has Been Successfully Done";
    	    	    ?>
    	    	    <script>
    	    	          //  alert("Schdule Request For Labasst Registration Has Been Successfully Done");
    	    	            window.location.href='../thanks';
    	    	    </script>
    	    	    <?php
    				//header("location:");
    			}
        
        
    }


?>
