<!-- Picture Upload Modal -->
<form class="form-horizontal" method="post" action="upload_proc.php" enctype="multipart/form-data">
	<div class="modal hide fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				&times;
			</button>
			<h3 id="myModalLabel">Upload Image</h3>
		</div>
		<div class="modal-body">
			<div class="control-group">
				<label class="control-label" for="inputTitle">Title</label>
				<div class="controls">
					<input class="input-large" type="text" id="inputTitle" name="inputTitle" placeholder="Input picture title" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputDesc">Description</label>
				<div class="controls">
					<textarea class="input-large" rows="3" id="inputDesc" name="inputDesc" placeholder="Input picture description"></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputDate">Datetime</label>
				<div class="controls">
					<input type="text" id="inputDate" name="inputDate" value="<?=date("Y-m-d")?>" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFile">Image</label>
				<div class="controls">
					<input type="file" id="inputFile" name="inputFile" />
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary">
						Upload
					</button>
					<button class="btn" data-dismiss="modal" aria-hidden="true">
						Close
					</button>
				</div>
			</div>
		</div>
	</div>
</form>