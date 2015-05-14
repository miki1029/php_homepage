<?php
include '../db_connect.php';

// 현재 페이지 계산
if(isset($_GET["page"]) and $_GET["page"] > 0) {
	$page = $_GET["page"];
}
else {
	$page = 1;
}
$startNo = ($page - 1) * 16;

// 15개의 리스트 쿼리결과 저장
$sql = "SELECT p.id, u.user_name, p.memo_title, p.memo_body, p.reg_date
		 FROM  `post_memo` AS p
		 INNER JOIN  `user` AS u
		 ON p.user_id = u.id
		 ORDER BY id DESC";
		 //LIMIT $startNo, 15";
$result = $db->query($sql);
if(!$result) {
	exit ("Could not successfully run query ($sql) from DB");
}

// 마지막 페이지 계산
$num_result = $db->query("
		SELECT p.id, p.user_id, p.pic_title, p.pic_desc, p.pic_file, p.pic_date, p.reg_date
		FROM  `post_pic` AS p
		INNER JOIN  `user` AS u
		ON p.user_id = u.id")->num_rows;
$lastPage = ceil($num_result/15);

include '../header.php';
?>
<div class="container">
	<div class="row">
		<h1>Loving<i class="icon-heart"></i> Memo</h1>
	</div>
	<?php
	if(isset($_SESSION['user_id'])) {
	?>
	<div class="row">
		<div class="span3 offset9 my-right">
			<!-- Button to trigger modal -->
			<a href="#writeModal" role="button" class="btn" data-toggle="modal">Write</a>
		</div>
	</div>
	<?php
	}
	?>
	
	<div class="row-fluid">
		<div class="span8 offset2">
			<hr class="soften" />
			<?php
			while($row = $result->fetch_object()) {
			?>
			<div class="row-fluid memo_wrap">
				<div class="span1 memo_profile"><img src="http://placehold.it/100x100"></div>
				<div class="span11 memo_body">
					<h5><a href="view/?id=<?=$row->id?>" class="memo_title"><?=htmlspecialchars($row->memo_title)?></a>
						<small><?=substr($row->reg_date, 0, 10)?> <?=$row->user_name?></small></h5>
					<p class="memo_desc"><?=nl2br(htmlspecialchars($row->memo_body))?></p>
					<div class="memo_reply"><!--댓글구현하기--></div>
				</div>
			</div>
			<hr class="soften" />
			<?php
			}
			?>
		</div>
	</div>
</div>
<?php
include 'write_modal.php';
include '../footer.php';
?>