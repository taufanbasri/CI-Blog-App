<?= validation_errors();  ?>

<?= form_open('users/register');  ?>
	<div class="row">
	  <div class="col-md-4 col-md-offset-4">
		  <h1 class="text-center"><?= $title;  ?></h1>
		  <div class="form-group">
	  	  <label>Name</label>
	  	  <input type="text" class="form-control" name="name" placeholder="Name" value="<?= set_value('name'); ?>">
	  	</div>
	  	<div class="form-group">
	  	  <label>Zipcode</label>
	  	  <input type="text" class="form-control" name="zipcode" placeholder="Zipcode" value="<?= set_value('zipcode'); ?>">
	  	</div>
	  	<div class="form-group">
	  		<label>Email</label>
	  		<input type="email" class="form-control" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
	  	</div>
	  	<div class="form-group">
	  	  <label>Username</label>
	  	  <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
	  	</div>
	  	<div class="form-group">
	  	  <label>Password</label>
	  	  <input type="password" class="form-control" name="password" placeholder="Password">
	  	</div>
	  	<div class="form-group">
	  	  <label>Password Confirmation</label>
	  	  <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
	  	</div>
	  	<button type="submit" name="button" class="btn btn-primary btn-block">Submit</button>
	  </div>
	</div>
<?= form_close();  ?>
