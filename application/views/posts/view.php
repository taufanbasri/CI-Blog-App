<h2><?= $post['title']; ?></h2>
<small class="post-date">Posted on: <?= $post['created_at'] ?></small> <br>
<div class="post-body">
    <?= $post['body']; ?>
</div>

<hr>

<?= form_open('/posts/delete/' . $post['id']) ?>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>