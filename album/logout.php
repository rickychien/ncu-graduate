<?php
	session_start();
	unset($_SESSION['valid_user']);
	
	echo '<script language="javascript">window.location.replace("index.php");</script>';
	
?>
