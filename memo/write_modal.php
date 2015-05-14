<!-- Memo Upload Modal -->
<form class="form-horizontal" method="post" action="/memo/write_proc.php">
	<div class="modal hide fade" id="writeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				&times;
			</button>
			<h3 id="myModalLabel">Write memo</h3>
		</div>
		<div class="modal-body">
			<div class="control-group">
				<label class="control-label" for="inputTitle">Title</label>
				<div class="controls">
					<input class="input-large" type="text" id="inputTitle" name="inputTitle" placeholder="Input memo title" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputName">Name</label>
				<div class="controls">
					<span class="uneditable-input" id="inputName" name="inputName"><?=$_SESSION['user_name']?></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputBody">Body</label>
				<div class="controls">
					<textarea class="input-large" rows="10" id="inputBody" name="inputBody" placeholder="Input memo body"></textarea>
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