<?php 

    
    session_start();
    include('../Admin/controller/function.php');

    $objFun= new Fun;
    
    
    if(isset($_POST['submit']))
    {
        $FirstName=                     $objFun->checkData($_POST['fname']);
        $LastName=                      $objFun->checkData($_POST['lname']);
        $email=                         $objFun->checkData($_POST['email']);
        $PhoneNumber=                   $objFun->checkData($_POST['pnumber']);
        $DateBirth=                     $objFun->checkData($_POST['dob']);
        $AddressOne=                    $objFun->checkData($_POST['addone']);
        $AddressTne=                    $objFun->checkData($_POST['addtwo']);
        $City=                          $objFun->checkData($_POST['city']);
        $State=                         $objFun->checkData($_POST['state']);
        $ZIP=                           $objFun->checkData($_POST['zip']);
        $Country=                       $objFun->checkData($_POST['country']);
        $Interested=                    $objFun->checkData($_POST['interest']);
        $Gender=                        $objFun->checkData($_POST['gender']);
        $contactyou=                    $objFun->checkData($_POST['conteactd']);
        $findus=                        $objFun->checkData($_POST['hdufu']);
        $Comments=                      $objFun->checkData($_POST['Comment']);
        
       
       $query="INSERT INTO `hr_staffing`(`firstName`, `lastName`, `eamil`, `phoneNumber`, `dateBirth`, `AddressOne`, `AddressTne`, `City`, `State`, `zip`, `Country`, `Interested`, `Gender`, `contactyou`, `findus`, `Comments`) VALUES 
       ('$FirstName','$LastName','$email','$PhoneNumber','$DateBirth','$AddressOne','$AddressTne','$City','$State','$ZIP','$Country','$Interested','$Gender','$contactyou','$findus','$Comments')";
        
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
    	    	$mail->Subject='H.R STAFFING Service Information '.$email;
    	    	
    	    	$mail->Body="First Name :".$FirstName."<br>"."Last Name :".$LastName."<br>"."Eamil ID:".$email."<br>"."Phone Number :".$PhoneNumber."<br>"."Date Of Birth :".$DateBirth."<br>"."Address Line 1 :".$AddressOne."<br>"."Address Line 2 :".$AddressTne."<br> City :".$City."<br> State :".$State."<br> ZIP :".$ZIP."<br> Country :".$Country."<br> Interested :".$Interested."<br> Gender :".$Gender."<br> Best way to contact you".$contactyou."<br> How did you find us? :".$findus."<br> Comments :".$Comments;
    
    	    	if(!$mail->send()){
    	    		die("error");
    	    	}
    	    	else{
    	    	    ?>
    	    	    <script>
    	    	            alert("HR Staffing Service Registration Has Been Successfully Done");
    	    	            window.location.href='../h-r-staffing';
    	    	    </script>
    	    	    <?php
    				//header("location:");
    			}
        
        
    }


?>
