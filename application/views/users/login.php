<?= validation_errors();  ?>

<?= form_open('users/login');  ?>
	<div class="row">
	  <div class="col-md-4 col-md-offset-4">
		  <h1 class="text-center"><?= $title; ?></h1>
		  <div class="form-group">
		    <input type="text" class="form-control" name="username" placeholder="Enter Username" required autofocus>
		  </div>
		  <div class="form-group">
		    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
		  </div>
		  <button type="submit" class="btn btn-primary btn-block">Login</button>
	  </div>
	</div>
<?= form_close();  ?>
