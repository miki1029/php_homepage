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
			move_uploaded_file($file["tmp_name"], "img/$file_name");
		}
	}
} else {
	echo '<script>alert("File Upload Error:'.$file["error"].'");';
	echo 'history.back();</script>';
	exit ;
}

// 데이터 필터링 및 역슬래쉬화(제어방지)
if (isset($_SESSION['user_id']) and isset($_POST["inputDesc"]) and isset($_POST["inputDate"])) {
	if (empty($_POST["inputTitle"])) {
		$title = date("Y-m-d") . '에 업로드한 사진';
	} else {
		$title = trim($_POST["inputTitle"]);
	}
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

// DB 삽입 쿼리
$sql = "INSERT INTO `post_pic` (
	`id`, `user_id`, `pic_title`, `pic_desc`, `pic_file`, `pic_date`, `reg_date`
)
VALUES (
	NULL, '" . $_SESSION['user_id'] . "', '$title', '$desc', 'img/$file_name', '$date', '" . date("Y-m-d h:i:s") . "'
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
			alert("사진이 업로드 되었습니다.");
			history.back();
		</script>
		<title>HMW Love</title>
	</head>
	<body></body>
</html>