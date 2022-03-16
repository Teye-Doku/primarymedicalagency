<?php 

	
	session_start();

	unset($_SESSION['userid']);

	session_destroy();
?>

<script type="text/javascript">
	window.location.href='../login';
</script>