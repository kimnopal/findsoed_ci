<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
<div class="row">
  <div class="col-8">
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">

    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="title">Judul</label>
      <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title']; ?>" />
    </div>

    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="description">Deskripsi</label>
      <textarea class="form-control" name="description" placeholder="Add Description"><?php echo $post['description']; ?></textarea>
    </div>

    <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="description">Kategori</label>
      <select name="category_id" class="form-control">
        <?php foreach ($categories as $category): ?>
          <?php if ($category['id'] === $post['category_id']) : ?>
            <option value="<?php echo $category['id']; ?>" selected><?php echo $category['name']; ?></option>
          <?php else: ?>
            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
          <?php endif; ?>
        <?php endforeach; ?>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
  </div>
</div>