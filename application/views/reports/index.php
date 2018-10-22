<div class="container">
	<?php foreach ($reports as $reports_item) : ?>

	<h3 class="alert alert-primary" role="alert">
		<?php echo $reports_item['title']; ?>
	</h3>
	<div class="jumbotron">
		<?php echo $reports_item['text']; ?>
	</div>
	<p><a href="<?php echo site_url('reports/' . $reports_item['slug']); ?>">View Reports</a></p>

	<?php endforeach; ?>
</div>
