<?php 


    session_start();
    include('../Admin/controller/function.php');

    $objFun= new Fun;
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die();
    
    if(isset($_POST['submit']))
    {
        $prefix=                             $objFun->checkData($_POST['gen']);
        $first_name=                         $objFun->checkData($_POST['fname']);
        $last_name=                          $objFun->checkData($_POST['lname']);
        $title=                              $objFun->checkData($_POST['title']);
        $contact_type=                       $objFun->checkData($_POST['ctype']);
        $address_one=                        $objFun->checkData($_POST['addone']);
        $address_two=                        $objFun->checkData($_POST['addtwo']);
        $city=                               $objFun->checkData($_POST['city']);
        $state=                              $objFun->checkData($_POST['state']);
        $pin=                                $objFun->checkData($_POST['zip']);
        $country=                            $objFun->checkData($_POST['country']);
        $email=                              $objFun->checkData($_POST['email']);
        $email_notification=                 $objFun->checkData($_POST['eeml']);
        $phone_number=                       $objFun->checkData($_POST['pnumber']);
        $phone_extention=                    $objFun->checkData($_POST['ext']);
        $mobile_number=                      $objFun->checkData($_POST['mbumber']);
        $fax=                                $objFun->checkData($_POST['fax']);
        $description=                        $objFun->checkData($_POST['comment']);
        $certification_type=                 $objFun->checkData($_POST['cgt']);
        $licensing_state=                    $objFun->checkData($_POST['lstate']);
        $license_expiration_date=            $objFun->checkData($_POST['ldob']);
        $license_number=                     $objFun->checkData($_POST['lsnbr']);
        $practicing_now=                     $objFun->checkData($_POST['pn']);
        $name_of_medical_institution=        $objFun->checkData($_POST['nmidical']);
        $graduation_year=                    $objFun->checkData($_POST['gyear']);
        $professional_affiliated_memberships=$objFun->checkData($_POST['enmbersp']);

        
       $query="INSERT INTO `member_consult`(`prefix`, `first_name`, `last_name`, `title`, `contact_type`, `address_one`, `address_two`, `city`, `state`, `pin`, `country`, `email`, `email_notification`, `phone_number`, `phone_extention`, `mobile_number`, `fax`, `description`, `certification_type`, `licensing_state`, `license_expiration_date`, `license_number`, `practicing_now`, `name_of_medical_institution`, `graduation_year`, `professional_affiliated_memberships`) VALUES ('$prefix','$first_name','$last_name','$title','$contact_type','$address_one','$address_two','$city','$state','$pin','$country','$email','$email_notification','$phone_number','$phone_extention','$mobile_number','$fax','$description','$certification_type','$licensing_state','$license_expiration_date','$license_number','$practicing_now','$name_of_medical_institution','$graduation_year','$professional_affiliated_memberships')";
        
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
    	    	$mail->Subject='MEMBER CONSULT FORM SERVICE INFORMATION '.$email;
    	    	
    	    	$mail->Body="Name :".$prefix." ".$first_name." ".$last_name."<br> Title :".$title."<br>"."Contact Type :".$contact_type."<br>"."Address One :".$address_one."<br>"."Address Two :".$address_two."<br>"."City :".$city."<br>"."State :".$state.
    	    	"<br>"."Pin :".$pin ."<br>"."Country :".$country ."<br>"."Email :". $email."<br>Email Notification :".$email_notification."<br>"."Phone Number :". $phone_number."<br>"."Phone Extention :".$phone_extention ."<br>"."Mobile Number :".$mobile_number ."<br>"."Fax :".$fax ."<br>"."Description :".$description ."<br>"."Certification Type :".$certification_type ."<br>"."Licensing State :". $licensing_state."<br>"."License Expiration Date :".$license_expiration_date ."<br>"."License Number :".$license_number ."<br>"."Practicing Now :".$practicing_now ."<br>"."Name of Medical Institution :".$name_of_medical_institution ."<br>"."Graduation Year :".$graduation_year ."<br>"."Professional Affiliated Memberships :". $professional_affiliated_memberships ;
    
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
