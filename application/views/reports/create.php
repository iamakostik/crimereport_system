
<?php echo validation_errors(); ?>

<?php echo form_open('reports/create'); ?>


<div class="container">
	<div class="form-group">

		<label for="title">Title</label>
		<input class="form-control" type="text" name="title" /><br />

		<label for="text">Description :</label>
		<textarea class="form-control" name="text" rows="6"></textarea><br />
		<input type="submit" name="submit" value="Report Crime" />
	</div>
</div>

</form>
