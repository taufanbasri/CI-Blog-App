<h2><?= $title  ?></h2>

<ul class="list-group">
	<?php foreach($categories as $category) : ?>
		<li class="list-group-item">
			<a href="<?= site_url('categories/' . $category['id'] . '/posts'); ?>"><?= $category['name'] ?></a>
		</li>
	<?php endforeach; ?>
</ul>
