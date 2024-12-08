<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
<div class="row">
  <div class="col-8">

    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="title">Judul</label>
      <input type="text" name="title" id="title" class="form-control" />
    </div>

    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="description">Deskripsi</label>
      <input type="text" name="description" id="description" class="form-control" />
    </div>


    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="description">Kategori</label>
      <select name="category_id" class="form-control">
        <?php foreach ($categories as $category): ?>
          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>


    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="description">Foto</label>
      <input type="file" name="photo" class="form-control" size="20">
    </div>

    <button type="submit" class="btn btn-primary">Buat</button>
  </div>
</div>
</form>