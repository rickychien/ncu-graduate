<?php
	session_start();
	
	if (!isset($_SESSION['valid_user'])) {
	
		$student_id = $_POST['student_id'];
		$persional_id = $_POST['personal_id'];
		$hostName = "";
		$username = "";
		$password = "";
		$db_club = "";

		if (!($connect = mysql_pconnect($hostName, $username, $password))) {
			echo "connect fail";
			exit();
		}
		
		$sql = sprintf( "SELECT * FROM 2013graduate_album 
						 WHERE stu_id = '%s' AND id = '%s'",
						 mysql_real_escape_string( $student_id ),
						 mysql_real_escape_string( $persional_id ) );

		$ret = @mysql_db_query($db_club, $sql);

		if ($row = mysql_fetch_object($ret)) {
			$_SESSION['valid_user'] = $student_id;
		} else {
			$_SESSION['error_message'] = "學號或出生年月日輸入錯誤";
		}

		header('Location: .');
	}
?>
