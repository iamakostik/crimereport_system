<?php echo form_open('signup/index'); ?>
<?php echo validation_errors(); ?>

<div class="container">
	<div class="form-group">

		<label for="title">Matric Number :</label>
		<input class="form-control" type="text" name="matnumber" /><br />

		<label for="title">Email :</label>
		<input class="form-control" type="email" name="email" /><br />

		<label for="title">Phone :</label>
		<input class="form-control" type="tel" name="phone" /><br />

		<label for="title">Password :</label>
		<input class="form-control" type="password" name="password" /><br />

		<label for="title">Retype Password :</label>
		<input class="form-control" type="password" name="rpassword" /><br />

		<label for="title">Your Location :</label>
		<input class="form-control" type="text" name="location" /><br />
		
		<input type="submit" name="signup" value="Sign Up" />
	</div>
</form>
</div>
