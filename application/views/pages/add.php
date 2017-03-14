<div class="container">
	<div class="row">
		<div class="col-md-4"></div>

		<div class="col-md-8" style="color: grey">
				<h2>Create a Person</h2>

				<?php echo validation_errors(); ?>

				<?php echo form_open('pages/add') ?>

					<label for="name">Name</label>
					<input type="input" name="name" /><br /><br />

					<label for="email">Email</label>
					<input type="input" name="email" /><br /><br />

					</br>

					<input type="submit" name="submit" value="Create new Person" />

				</form> 
		</div>
	</div>
</div>


