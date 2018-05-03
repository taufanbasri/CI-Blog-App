<h2><?= $post['title']; ?></h2>
<small class="post-date">Posted on: <?= $post['created_at'] ?></small> <br>
<img src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image'] ?>">
<div class="post-body">
    <?= $post['body']; ?>
</div>
<hr>

<?php if ($this->session->userdata('user_id') == $post['user_id']): ?>
	<a class="btn btn-default" href="/posts/edit/<?= $post['slug'] ?>">Edit</a>

	<?= form_open('/posts/delete/' . $post['id']) ?>
		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
<?php endif; ?>

<hr>

<h3>Add comment</h3>

<?= validation_errors(); ?>

<?= form_open('comments/create/' .$post['id']); ?>
	<div class="form-group">
	  <label>Name</label>
	  <input type="text" class="form-control" name="name">
	</div>
	<div class="form-group">
	  <label>Email</label>
	  <input type="email" class="form-control" name="email">
	</div>
	<div class="form-group">
	  <label>Body</label>
	  <textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?= $post['slug']; ?>">
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

<hr>
<h3>Comment</h3>
<?php if($comments): ?>
	<?php foreach($comments as $comment): ?>
		<div class="well well-md">
		  <h5><?= $comment['body']; ?> [by <strong><?= $comment['name']  ?></strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<p>No comment to display.</p>
<?php endif; ?>
