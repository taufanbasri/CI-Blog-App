<h2><?= $title  ?></h2>

<ul class="list-group">
	<?php foreach($categories as $category) : ?>
		<li class="list-group-item">
			<a href="<?= site_url('categories/' . $category['id'] . '/posts'); ?>"><?= $category['name'] ?></a>
			<?php if ($this->session->userdata('user_id') == $category['user_id']): ?>
				<?= form_open('categories/delete/' . $category['id'], ['class' => 'cat-delete']); ?>
					<button type="submit" class="btn btn-xs btn-danger">Delete</button>
				<?= form_close(); ?>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
</ul>
