<?php
// 세션 시작, DB 접속($db)

session_start();
include '../db_connect.php';

// 파일 처리
$file = $_FILES["inputFile"];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $file["name"]);
$extension = end($temp);
if ((($file["type"] == "image/gif")
|| ($file["type"] == "image/jpeg")
|| ($file["type"] == "image/jpg")
|| ($file["type"] == "image/pjpeg")
|| ($file["type"] == "image/x-png")
|| ($file["type"] == "image/png"))
//&& ($file["size"] < 20000)
&& in_array($extension, $allowedExts)) {
	if ($file["error"] > 0) {
		echo '<script>alert("File Upload Error:'.$file["error"].'");';
		echo 'history.back();</script>';
		exit ;
	} else {
		/*
		echo "Upload: " . $file["name"] . "<br>";
		echo "Type: " . $file["type"] . "<br>";
		echo "Size: " . ($file["size"] / 1024) . " kB<br>";
		echo "Temp file: " . $file["tmp_name"] . "<br>";*/
		$file_name = $file["name"];
		if (file_exists("img/$file_name")) {
			echo "<script>alert('$file_name already exists.');";
			echo 'history.back();</script>';
			exit ;
		} else {
			// 기존 파일 삭제
			unlink($_POST["fileNm"]);
			// 새 파일 업로드
			move_uploaded_file($file["tmp_name"], "img/$file_name");
		}
	}
} else { // 파일을 업로드 하지 않은 경우
	$file_name = $_POST["fileNm"];
	if (!get_magic_quotes_gpc()) {
		$file_name = addslashes($file_name);
	}
	$file_name = str_replace('img/', '', $file_name);
}

// 데이터 필터링 및 역슬래쉬화(제어방지)
if (isset($_SESSION['user_id']) and isset($_POST["inputDesc"]) and isset($_POST["inputDate"])) {
	if (empty($_POST["inputTitle"])) {
		$title = date("Y-m-d") . '에 업로드한 사진';
	} else {
		$title = trim($_POST["inputTitle"]);
	}
	$id = $_POST["picID"];
	$desc = trim($_POST["inputDesc"]);
	$date = trim($_POST["inputDate"]);
	if (!get_magic_quotes_gpc()) {
		$title = addslashes($title);
		$desc = addslashes($desc);
	}
} else {
	echo '<script>alert("Incorrect Access!!!");';
	echo 'history.back();</script>';
	exit ;
}

// DB 수정 쿼리
$sql = "UPDATE `post_pic`
		 SET `user_id` = '" . $_SESSION['user_id'] . "',
			  `pic_title` = '$title',
			  `pic_desc` = '$desc',
			  `pic_file` = 'img/$file_name',
			  `pic_date` = '$date',
			  `reg_date` = '" . date("Y-m-d h:i:s") . "'
		 WHERE `id` = $id";
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
			alert("수정되었습니다.");
			history.back();
		</script>
		<title>HMW Love</title>
	</head>
	<body></body>
</html>