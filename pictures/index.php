<?php
include '../db_connect.php';

// 현재 페이지 계산
if (isset($_GET["page"]) and $_GET["page"] > 0) {
	$page = $_GET["page"];
} else {
	$page = 1;
}
$numOfList = 8;
$startNo = ($page - 1) * $numOfList;

// 15개의 리스트 쿼리결과 저장
$sql = "SELECT p.id, u.user_name, p.pic_title, p.pic_desc, p.pic_file, p.pic_date, p.reg_date
		 FROM  `post_pic` AS p
		 INNER JOIN  `user` AS u
		 ON p.user_id = u.id
		 ORDER BY id DESC
		 LIMIT $startNo, $numOfList";
$result = $db -> query($sql);
if (!$result) {
	exit("Could not successfully run query ($sql) from DB");
}

// 마지막 페이지 계산
$num_result = $db -> query("
		SELECT p.id, p.user_id, p.pic_title, p.pic_desc, p.pic_file, p.pic_date, p.reg_date
		FROM  `post_pic` AS p
		INNER JOIN  `user` AS u
		ON p.user_id = u.id") -> num_rows;
if($num_result == 0) {
	$lastPage = 1;
}
else {
	$lastPage = ceil($num_result / $numOfList);
}

include '../header.php';
?>
<div class="container">
	<div class="row">
		<h1>Loving<i class="icon-heart"></i> PICTURES</h1>
	</div>
	<?php
	if(isset($_SESSION['user_id'])) {
	?>
	<div class="row">
		<div class="span3 offset9 my-right">
			<!-- Button to trigger modal -->
			<a href="#uploadModal" role="button" class="btn" data-toggle="modal">Upload</a>
		</div>
	</div>
	<?php
	}
	?>
	<hr class="soften" />
	<?php
	$isWhile = TRUE;
	$pic_id_array = array();
	while($isWhile) {
	?>

	<!-- Picture Content -->
	<div class="row my-center">
		<?php
		for($i=0; $i<4; $i++) {
		if($row = $result->fetch_object()) {
			$pic_id = $row->id;
			array_push($pic_id_array, $pic_id);
		?>
		<div class="span3">
			<a href="#viewModal<?=$pic_id?>" data-toggle="modal" rel="tooltip" data-placement="top" data-original-title="<?=$row->pic_title?>" style="display: block;"><img src="<?=$row->pic_file?>" class="img-polaroid" /></a>
		</div>
		<?php
		} else {
		$isWhile = FALSE;
		break;
		}
		}
		?>
	</div>
	<?php
	}
	?>

	<!-- Pagination -->
	<div class="pagination pagination-centered">
		<ul>
			<li<?php if($page == 1) echo ' class="disabled"'?>><a href="./">&laquo;</a></li>
			<?php
			for($i=1; $i<=$lastPage; $i++) {
				if($i == $page) {
					$activePage = ' class="active"';
				}
				else {
					$activePage = '';
				}
				echo "<li$activePage><a href=\"./?page=$i\">$i</a></li>";
			}
			?>
			<li<?php if($page == $lastPage) echo ' class="disabled"'?>><a href="./?page=<?php echo $lastPage; ?>">&raquo;</a></li>
		</ul>
	</div>
</div>

<?php
include 'upload_modal.php';
include 'view_modal.php';
include '../footer.php';
?>