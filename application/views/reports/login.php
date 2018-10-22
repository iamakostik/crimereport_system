<?php echo validation_errors(); ?>

<?php echo form_open('login/login_method'); ?>


<div class="container">
	<div class="form-group">

		<label for="title">Email :</label>
		<input class="form-control" type="email" name="email" /><br />

		<label for="title">Password :</label>
		<input class="form-control" type="password" name="password" /><br />
		
		<input type="submit" name="login" value="Login" />
	</div>
</div>

</form>
