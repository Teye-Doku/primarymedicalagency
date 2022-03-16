<?php
			
			//print_r($_POST);
            if(isset($_POST['submit']))
            {
                if(!empty($_POST['email']) && !empty($_POST['fname']) && !empty($_POST['message']))
                {
                $email=$_POST['email'];
                $name=$_POST['fname']." ".$_POST['lname'];
    			require'phpmailer/PHPMailerAutoload.php';
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
    	    	$mail->Subject='New Membership Information '.$_POST['email'];
    	    	
    	    	$mail->Body="Name :".$name."<br>"."Email :".$_POST['email']."<br>"."State :".$_POST['state']."<br>"."City :".$_POST['city']."<br>"."Zip :".$_POST['pin']."<br>"."Medical Field Of Interest :".$_POST['info']."<br>"."Message :".$_POST['message'];
    
    	    	if(!$mail->send()){
    	    		die("error");
    	    	}
    	    	else{
    				echo "<script>alert('Application Send Successfully')</script>";
    				echo "<script>window.location='membership'</script>";
    			}
            }
            else
            {
                echo "<script>alert('Empty Field')</script>";
                echo "<script>window.location='membership'</script>";
            }
        }
        else{
                echo "<script>alert('Empty Field')</script>";
				echo "<script>window.location='contact_us'</script>";
			}
?>
