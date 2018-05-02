<h2><?= $post['title']; ?></h2>
<small class="post-date">Posted on: <?= $post['created_at'] ?></small> <br>
<img src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image'] ?>">
<div class="post-body">
    <?= $post['body']; ?>
</div>

<hr>

<a class="btn btn-default" href="/posts/edit/<?= $post['slug'] ?>">Edit</a>

<?= form_open('/posts/delete/' . $post['id']) ?>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
