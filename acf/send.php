<?php
			
			//print_r($_POST);
            if(isset($_POST['submit']))
            {
                if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['message']))
                {
                $email=$_POST['email'];
                $name=$_POST['name'];
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
    	    	$mail->Subject='New Contact Information '.$_POST['email'];
    	    	
    	    	$mail->Body="Name :".$_POST['name']."<br>"."Email :".$_POST['email']."<br>"."Mobile:".$_POST['phone']."<br>"."More Info :".$_POST['info']."<br>"."Message :".$_POST['message'];
    
    	    	if(!$mail->send()){
    	    		die("error");
    	    	}
    	    	else{
    				header("location:thanks");
    			}
            }
            else
            {
                echo "<script>alert('Empty Field')</script>";
                echo "<script>window.location='contact_us'</script>";
            }
        }
        else{
                echo "<script>alert('Empty Field')</script>";
				echo "<script>window.location='contact_us'</script>";
			}
?>
