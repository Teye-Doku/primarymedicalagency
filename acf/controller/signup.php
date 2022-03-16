
<?php 
session_start();
include('../Admin/controller/function.php');

$objFun= new Fun;

if(isset($_POST['signup']))
{

	$email=     	   $objFun->checkData($_POST['email']);
	$package=		   $objFun->checkData($_POST['info']);
	$role=		       $objFun->checkData($_POST['role']);
	$password=		   $objFun->checkData($_POST['password']);
	$confirmPass=	   $objFun->checkData($_POST['confirmPassword']);
    $uniqueId= "ACTF".substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);

	if(!empty($email) && !empty($package) && !empty($password) && !empty($confirmPass))
	{

			if($password===$confirmPass)
			{
				$selectUser= $objFun->sql("SELECT * FROM user WHERE email='$email'");

				if($selectUser->num_rows>0)
				{
					$_SESSION['error']="User Allready Exist!";

					?>
					<script type="text/javascript">
						window.location.href='../register';
			        </script>
					<?php
				}else
				{

					$insertUser= 	$objFun->sql("INSERT INTO `user`(`email`,`password`,`package`,`role`,unique_id) VALUES ('$email','$confirmPass','$package','$role','$uniqueId')");
					
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
        	    	$mail->setFrom('karnejivaishali@gmail.com','ACTF FIRM');
        	    	$mail->addAddress($email);
        	    	$mail->isHTML(true);
        	    	$mail->Subject='Thank You For Your Registration ACTF FIRM';
        	    	
        	    	$mail->Body="Thank You For Reaching Out To Us. Your unique id is ".$uniqueId ;
        
        	    	if(!$mail->send()){
        	    		die("error");
        	    	}
        	    	else{
        	    	    
        	    	    $_SESSION['msg']="Your registration has to done "."<a href='login'>Click here to Login</a>";
        	    	   
        			}

					

					?>
					<script type="text/javascript">
						window.location.href='../register';
			    	</script>
					<?php

				}

			}else
			{

				$_SESSION['error']="Password And Confirm Password Does Not Match !";

				?>

				<script type="text/javascript">
					window.location.href='../register';
			    </script>

				<?php

			}
			
	}else{

		$_SESSION['error']="Empty Field !";

		?>

			<script type="text/javascript">
				window.location.href='../register';
			</script>

		<?php
	}
}




?>