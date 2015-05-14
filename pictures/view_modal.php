<?php
foreach($pic_id_array as $pic_id) {
	// 해당 id의 데이터 쿼리
	$sql = "SELECT p.id, u.user_name, p.pic_title, p.pic_desc, p.pic_file, p.pic_date, p.reg_date
			 FROM  `post_pic` AS p
			 INNER JOIN  `user` AS u
			 ON p.user_id = u.id
			 WHERE p.id = $pic_id";
	$result = $db -> query($sql);
	if (!$result) {
		exit("Could not successfully run query ($sql) from DB");
	}
	$row = $result->fetch_object();
?>
<!-- Picture View Modal -->
<div class="modal hide imgViewModal" id="viewModal<?=$pic_id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form class="form-horizontal" method="post" action="modify_proc.php" enctype="multipart/form-data">
		<input type="hidden" id="picID<?=$pic_id?>" name="picID" value="<?=$pic_id?>" />
		<input type="hidden" id="fileNm<?=$pic_id?>" name="fileNm" value="<?=$row->pic_file?>" />
		<div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				&times;
			</button>
			<div class="leftBody">
				<img src="<?=$row->pic_file?>" class="img-polaroid" />
			</div>
			<div class="rightBody">
				<div class="control-group">
					<label class="control-label" for="inputTitle<?=$pic_id?>">Title</label>
					<div class="controls">
						<input type="text" id="inputTitle<?=$pic_id?>" name="inputTitle" value="<?=$row->pic_title?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputDate<?=$pic_id?>">Datetime</label>
					<div class="controls">
						<input type="text" id="inputDate<?=$pic_id?>" name="inputDate" value="<?=$row->pic_date?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputDesc<?=$pic_id?>">Description</label>
					<div class="controls">
						<textarea rows="3" id="inputDesc<?=$pic_id?>" name="inputDesc"><?=$row->pic_desc?></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputFile<?=$pic_id?>">Image</label>
					<div class="controls">
						<input type="file" id="inputFile<?=$pic_id?>" name="inputFile" />
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<div class="control-group">
				<div class="controls">
					<?php
					if (isset($_SESSION['user_id'])) {
					?>
					<button type="submit" class="btn btn-success">
						Modify
					</button>
					<input type="button" class="btn btn-danger" id="btn-delete<?=$pic_id?>" value="Delete" />
					<?
					}
					?>
					<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">
						Close
					</button>
				</div>
			</div>
		</div>
	</form>
</div>
<form method="post" action="delete_proc.php" style="display: none;">
	<input type="hidden" id="delID<?=$pic_id?>" name="picID" value="<?=$pic_id?>" />
	<input type="hidden" id="delFileNm<?=$pic_id?>" name="fileNm" value="<?=$row->pic_file?>" />
	<input type="submit" id="delSubmit<?=$pic_id?>" name="delSubmit<?=$pic_id?>" />
</form>
<?php
}
?>