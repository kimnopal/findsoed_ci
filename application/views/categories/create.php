<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
<div class="row">
	<div class="col-8">

		<div data-mdb-input-init class="form-outline mb-4">
			<label class="form-label" for="name">Nama</label>
			<input type="text" name="name" id="name" class="form-control" />
		</div>

		<button type="submit" class="btn btn-primary">Buat</button>
	</div>
</div>
</form>