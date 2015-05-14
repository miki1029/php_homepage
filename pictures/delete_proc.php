<?php
// 세션 시작, DB 접속($db)

session_start();
include '../db_connect.php';

// 게시물 id 확인
if(isset($_POST["picID"]) and isset($_POST["fileNm"])) {
	$id = $_POST["picID"];
	$fileNm = $_POST["fileNm"];
}
else {
	echo '<script>alert("Incorrect Access!!!");';
	echo 'history.back();</script>';
	exit;
}
// 로그인 유저인지 확인
if (!isset($_SESSION['user_id'])) {
	echo '<script>alert("Incorrect Access!!!");';
	echo 'history.back();</script>';
	exit;
}

// DB 삭제 쿼리
$sql = "DELETE FROM `post_pic` WHERE `id` = $id";
$result = $db -> query($sql);
if (!$result) {
	exit("Could not successfully run query ($sql) from DB");
}

// 파일 삭제
unlink($fileNm);
?>
<!DOCTYPE  html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<script>
			alert("삭제되었습니다.");
			history.back();
		</script>
		<title>HMW Love</title>
	</head>
	<body></body>
</html>