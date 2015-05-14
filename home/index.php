<?php
include '../header.php';
$loveDate = "2012-11-17";
$nowDate = date("Y-m-d",time());
$dDay = intval((strtotime($nowDate)-strtotime($loveDate)) / 86400)+1;
?>
<div class="container">
	<div class="row">
		<h1>Loving<i class="icon-heart"></i> D+<?=$dDay?></h1>
	</div>
	<hr class="soften" />
	
	<div class="row my-center">
		<div class="span4">
			<img src="img/1351436782626.jpg" class="img-polaroid" />
		</div>
		<div class="span4">
			<img src="img/CAM00750.jpg" class="img-polaroid" />
		</div>
		<div class="span4">
			<img src="img/IMG_20130214_220253.jpg" class="img-polaroid" />
		</div>
	</div>	<!--
	<hr class="soften" />

	<div class="row my-center">
		<div class="span3">
			<img src="img/calendar.jpg" class="img-circle" />
			<h3>Calendar</h3>
		</div>
		<div class="span3">
			<img src="http://placehold.it/320x240" />
			<h3>PIC</h3>
			<p></p>
		</div>
		<div class="span3">
			<img src="http://placehold.it/320x240" />
			<h3>CHAT</h3>
		</div>
		<div class="span3">
			<img src="http://placehold.it/320x240" />
			<h3>MEMO</h3>
		</div>
	</div>-->
</div>
<?php
include '../footer.php';
?>
