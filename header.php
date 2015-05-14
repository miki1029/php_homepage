<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<title>HMW Love</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<style>
			body {
				padding-top: 50px;
			}
			.my-center {
				text-align: center;
			}
			.my-right {
				text-align: right;
			}
			img {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}
		</style>
		<?php
		if (file_exists('before_style.php'))
		{
		   include 'before_style.php';
		}
		?>
		<!-- Bootstrap -->
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
		<link href="/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<?php
		if (file_exists('style.php'))
		{
		   include 'style.php';
		}
		?>
	</head>
	<body>
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container">

					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

					<!-- Be sure to leave the brand out there if you want it shown -->
					<a class="brand" href="/home">HMW Love</a>

					<!-- Everything you want hidden at 940px or less, place within here -->
					<div class="nav-collapse collapse">
						
						<ul class="nav">
							<li id="nav_home">
								<a href="/home/">Home</a>
							</li><!--
							<li id="nav_calendar">
								<a href="../calendar">Calendar</a>
							</li>-->
							<li id="nav_pictures">
								<a href="/pictures/">Pictures</a>
							</li><!--
							<li id="nav_chatting">
								<a href="../chatting">Chatting</a>
							</li>-->
							<li id="nav_memo">
								<a href="/memo/">Memo</a>
							</li>
						</ul>

						<ul class="nav pull-right">
							<li>
								<?php
								if (isset($_SESSION['user_id'])) {
									echo '<a href="../logout_proc.php" role="button" class="btn btn-link">Logout</a>';
								} else {
									echo '<a href="#loginModal" role="button" class="btn btn-link" data-toggle="modal">Login</a>';
								}
								?>
								
							</li>
						</ul>
						
					</div>

				</div>
			</div>
		</div>
