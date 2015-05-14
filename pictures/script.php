<script>
	$('[rel="tooltip"]').tooltip('toggle');
	$('[rel="tooltip"]').tooltip('hide');
<?php
foreach($pic_id_array as $pic_id) {
?>
	$('#btn-delete<?=$pic_id?>').click(function(e) {
		if(confirm("정말 삭제하시겠습니까?"))
			$('#delSubmit<?=$pic_id?>').trigger('click');
	});
<?php
}
?>
</script>