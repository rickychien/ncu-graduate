<?php session_start(); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>102學年畢業典禮相簿集</title>
	<link href="bin/favicon.ico" rel="shortcut icon"/>
	<link href="bin/login.css" rel="stylesheet" type="text/css">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
	<!--[if IE 7]>
		<link href="bin/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->

	<!--[if lt IE 10]>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.js"></script>
		<script src='bin/jquery.html5-placeholder.js'></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		<div class="camera-div">
			<h1>102學年畢業典禮相簿集</h1>
			<br>
			<i class="icon-camera-retro" style="font-size: 15em;"></i>
		</div>
		<div id="content">
			<?php if (!isset($_SESSION['valid_user'])) { ?>
			<form action="auth.php" method="POST">
				<h1>畢業生登入</h1>
				<center><p>
				<?
					if (isset($_SESSION['error_message'])) {
						echo $_SESSION['error_message'];
						unset($_SESSION['error_message']);
					}
				?>
				</p></center>
				<br>
				<div>
					<input name="student_id" type="text" placeholder="學號" required="" id="username" />
				</div>
				<div>
					<input name="personal_id" type="password" placeholder="出生年月日 (格式 : 19880231)" required="" id="password" />
				</div>
				<div class="submit_div">
					<input type="submit" value="登入" />
				</div>
			</form><!-- form -->
			<?php 
				} else {
					header('Location: ./showAlbum.php');
				}
			?>
			
		</div><!-- content -->
	</div><!-- container -->
</body>
<footer>
	<br>
	<center><h5>為了有更好的體驗，建議使用最新版 Chrome / Firefox / Safari / Opera 或 IE9(含)以上版本之瀏覽器</h5></center><br>
	<center>
		<a href="mailto:cmimi1017@ee.ncu.edu.tw , ricky060709@gmail.com , fanzai.huang@gmail.com , vul3cl6cl6@gmail.com">
			<i class="icon-envelope-alt"></i> 有問題？ 來信洽詢這群維護網站的猴子們
		</a>
	</center><br>