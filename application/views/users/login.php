<?php echo form_open('users/login'); ?>
<div class="row d-flex align-items-center justify-content-center mt-5">
	<div class="col-md-4 col-md-offset-4">
		<h1 class="text-center"><?php echo $title; ?></h1>

		<!-- Email input -->
		<div data-mdb-input-init class="form-outline mb-4">
			<label class="form-label" for="username">Username</label>
			<input type="text" name="username" id="username" class="form-control form-control-lg" />
		</div>

		<!-- Password input -->
		<div data-mdb-input-init class="form-outline mb-4">
			<label class="form-label" for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control form-control-lg" />
		</div>


		<!-- Submit button -->
		<button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Masuk</button>
	</div>
</div>
<?php echo form_close(); ?>