<?php
// 세션 시작, DB 접속($db)
session_start();
include 'db_connect.php';

if(isset($_POST["inputName"]) and isset($_POST["inputPwd"])) {
	$user_name = $_POST["inputName"];
	$user_pwd = $_POST["inputPwd"];
}
else {
	echo '<script>alert("Incorrect Access!!!");';
	echo 'history.back();</script>';
	exit;
}


$sql = "SELECT  `id` ,  `user_name` 
FROM  `kmwkmw5`.`user` 
WHERE  `user_name` =  '$user_name'
AND  `user_pwd` = MD5(  '$user_pwd' ) 
LIMIT 0 , 1";

$result = $db->query($sql);
if(!$result) {
	exit ("Could not successfully run query from DB:$sql");
}
?>
<!DOCTYPE  html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<script>
			<?php
			if($row = $result->fetch_object()) {
				$_SESSION['user_id'] = $row->id;
				$_SESSION['user_name'] = $row->user_name;
				echo 'history.back();';
			}
			else {
				echo 'alert("비밀번호를 확인해주세요.");';
				echo 'history.back();';
			}
			?>
		</script>
		<title>HMW Love</title>
	</head>
	<body>
	</body>
</html>