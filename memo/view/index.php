<?php
include 'id_select.php';
include '../../header.php';
?>
<div class="container">
	<div class="row">
		<h1>Loving<i class="icon-heart"></i> Memo</h1>
	</div>
	<hr class="soften" />
	
	<div class="row">
		<div class="span12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th colspan="2"><?=htmlspecialchars($row->memo_title)?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th width="20%">이&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;름</th>
						<td><?=$row->user_name?></td>
					</tr>
					<tr>
						<th>내&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;용</th>
						<td><?=nl2br(htmlspecialchars($row->memo_body))?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
include '../../footer.php';
?>