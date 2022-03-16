<?php 

    
    session_start();
    include('../Admin/controller/function.php');

    $objFun= new Fun;
    
    
    if(isset($_POST['submit']))
    {
        $FirstName=                     $objFun->checkData($_POST['fname']);
        $LastName=                      $objFun->checkData($_POST['lname']);
        $email=                         $objFun->checkData($_POST['email']);
        $PhoneNumber=                   $objFun->checkData($_POST['phone']);
        $DateBirth=                     $objFun->checkData($_POST['Comments']);
        
       
        
       
       $query="INSERT INTO `appoint_medical`(`fname`, `lname`, `email`, `phone`, `comments`) VALUES ('$FirstName','$LastName','$email','$PhoneNumber','$DateBirth')";
        
        $objFun->sql($query);
        
        
                // $email=$_POST['email'];
               $name=$FirstName." ".$LastName;
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
    	    	$mail->Subject='APPOINTMENTS AVAILABLE FOR MEDICAL IV INFUSION THERAPY & PHLEBOTOMY SERVICES '.$email;
    	    	
    	    	$mail->Body="First Name :".$FirstName."<br>"."Last Name :".$LastName."<br>"."Eamil ID:".$email."<br>"."Phone Number :".$PhoneNumber."<br>"."Date Of Birth :".$DateBirth;
    
    	    	if(!$mail->send()){
    	    		die("error");
    	    	}
    	    	else{
    	    	    
    	    	        $_SESSION['message']="MEDICAL IV INFUSION THERAPY & PHLEBOTOMY SERVICES Registration Has Been Successfully Done"
    	    	    ?>
    	    	    <script>
    	    	          //  alert("Service Registration Has Been Successfully Done");
    	    	            window.location.href='../thanks';
    	    	    </script>
    	    	    <?php
    				//header("location:");
    			}
        
        
    }


?>
