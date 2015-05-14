<?php
// DB접속 : $db
include '../../db_connect.php';

// id 유효성 검사
if(isset($_GET["id"]) and $_GET["id"]>0) {
	$id = $_GET["id"];
}
else {
	echo '<script>alert("Incorrect Access!!!");';
	echo 'location.replace("/memo/");</script>';
	exit;
}

// 게시판 본문의 쿼리
$sql = "SELECT p.id, u.user_name, p.memo_title, p.memo_body, p.reg_date
		 FROM  `post_memo` AS p
		 LEFT JOIN  `user` AS u
		 ON p.user_id = u.id
		 WHERE p.id = '$id'";
$result = $db->query($sql);
if(!$result) {
	exit ("Could not successfully run query ($sql) from DB");
}
$row = $result->fetch_object();
?>