<!-- Login Modal -->
<form class="form-horizontal" method="post" action="/login_proc.php">
	<div class="modal hide fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				&times;
			</button>
			<h3 id="myModalLabel">Login</h3>
		</div>
		<div class="modal-body">
			<div class="control-group">
				<label class="control-label" for="inputName">Name</label>
				<div class="controls">
					<select id="inputName" name="inputName">
						<option>권혜민</option>
						<option>김민우</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPwd">Password</label>
				<div class="controls">
					<input type="password" id="inputPwd" name="inputPwd" placeholder="Password" />
				</div>
			</div>
			<!--
			<div class="control-group">
				<div class="controls">
					<label class="checkbox">
						<input type="checkbox" />로그인 유지
					</label>
				</div>
			</div>
			-->
		</div>
		<div class="modal-footer">
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary">
						Login
					</button>
					<button class="btn" data-dismiss="modal" aria-hidden="true">
						Close
					</button>
				</div>
			</div>
		</div>
	</div>
</form>