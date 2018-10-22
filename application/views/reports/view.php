<?php
$titlep = $reports_item['title'];
$textp = $reports_item['text'];
$status = "Resolved"
?>
<div class="container">
	<div class="jumbotron">
		<h1 class="display-3"><?php echo $titlep; ?></h1>
		<p class="lead"><?php echo $textp; ?></p>
		<hr class="my-2">
		<p class="lead">
			<a class="btn btn-primary btn-lg" href="Jumbo action link" role="button"><?php echo $status; ?></a>
		</p>
	</div>
</div>

