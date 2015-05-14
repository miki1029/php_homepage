		<?php
		$PHP_SELF = $_SERVER['PHP_SELF'];
		$menu = '';
		if(strpos($PHP_SELF, 'home')) {
			$menu = 'home';
		} else if(strpos($PHP_SELF, 'calendar')) {
			$menu = 'calendar';
		} else if(strpos($PHP_SELF, 'pictures')) {
			$menu = 'pictures';
		} else if(strpos($PHP_SELF, 'chatting')) {
			$menu = 'chatting';
		} else if(strpos($PHP_SELF, 'memo')) {
			$menu = 'memo';
		}
		?>
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="/bootstrap/js/bootstrap.min.js"></script>
		<script>
			$('#nav_<?=$menu?>').addClass('active');
		</script>
		<?php
		include 'login_modal.php';
		if (file_exists('script.php'))
		{
		   include 'script.php';
		}
		?>
	</body>
</html>