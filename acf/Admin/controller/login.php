<?php
	session_start();
	include('function.php');

	$objFun= new Fun;

	if(isset($_POST['submit']))
	{

		$email=		$objFun->validateData($_POST['email']);
		$pass=	    $objFun->validateData($_POST['pwd']);

		if(!empty($email) && !empty($pass))
		{


			$field = array( 

				'email'     =>     strip_tags($email),  
				'password'     =>  strip_tags($pass)  
			);

			if($objFun->rvalidation($field)){

				if($objFun->login("admin", $field)){

					    $_SESSION["username"] =$email; 
					    $_SESSION["login"]=true;
					    header("location:../view/dashboard");	                   
				}  
				else{  
					    $error ="Invalid Email Or Password";
					    $_SESSION['msg']=$error;  
					    header("location:../index.php");
					}  
			}  
			else{  
					$error = "error";
					$_SESSION['msg']=$error; 
					header("location:../index.php"); 
					 
				} 		     
		}
	}





?>