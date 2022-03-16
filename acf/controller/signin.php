<?php

session_start();
include('../Admin/controller/function.php');

$objFun= new Fun;


if(isset($_POST['login']))
{

		$email=  $objFun->checkData($_POST['email']);
		$pass=   $objFun->checkData($_POST['password']);

		if(!empty($email) && !empty($pass))
		{
			$sql=		"SELECT * FROM user WHERE email='$email' AND password='$pass'";
			$query=     $objFun->sql($sql);

			if($query->num_rows>=1)
			{

				$userData= $query->fetch_assoc();

				$_SESSION['userid']= $userData['id'];
			?>

			<script type="text/javascript">
			   window.location.href='../profile';
			</script>

			<?php

			}else{

				$_SESSION['error']="Invalid Userid Or Password !";
				?>
				<script type="text/javascript">
					window.location.href='../login';
			    </script>
				<?php
			}

		}else{

			$_SESSION['error']="Empty Field !";

			?>
			<script type="text/javascript">
				window.location.href='../login';
			</script>
			<?php
		}
}



?>