<div>
	<h2><?php echo $post['title']; ?></h2>
	<p class="badge text-bg-primary">Diposting pada: <?php echo $post['created_at']; ?></p>
</div>
<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['photo']; ?>" style="width: 100%; height: 500px; object-fit: cover;">
<div class="mb-5">
	<?php echo $post['description']; ?>
</div>

<?php if ($this->session->userdata('user_id') == $post['user_id']): ?>
	<div class="d-flex gap-2">
		<a class="btn btn-primary pull-left" style="height: fit-content" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Ubah</a>
		<?php echo form_open('/posts/delete/' . $post['id']); ?>
		<input type="submit" value="Hapus" class="btn btn-danger h-fit">
		</form>
	</div>
<?php endif; ?>