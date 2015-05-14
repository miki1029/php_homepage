<?php
// 세션 시작, DB 접속($db)

session_start();
include '../db_connect.php';

// 데이터 필터링 및 역슬래쉬화(제어방지)
if (isset($_SESSION['user_id']) and isset($_POST["inputTitle"]) and isset($_POST["inputBody"])) {
	$title = trim($_POST["inputTitle"]);
	$body = trim($_POST["inputBody"]);
	if (!get_magic_quotes_gpc()) {
		$title = addslashes($title);
		$body = addslashes($body);
	}
} else {
	echo '<script>alert("Incorrect Access!!!");';
	echo 'location.replace("/memo/");</script>';
	exit ;
}

// DB 삽입 쿼리
$sql = "INSERT INTO `post_memo` (
	`id`, `user_id`, `memo_title`, `memo_body`, `reg_date`
)
VALUES (
	NULL, '" . $_SESSION['user_id'] . "', '$title', '$body', '" . date("Y-m-d h:i:s") . "'
);";
$result = $db -> query($sql);
if (!$result) {
	exit("Could not successfully run query ($sql) from DB");
}
?>
<!DOCTYPE  html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<script>
			alert("메모가 업로드 되었습니다.");
			location.replace("/memo/");
		</script>
		<title>HMW Love</title>
	</head>
	<body></body>
</html>