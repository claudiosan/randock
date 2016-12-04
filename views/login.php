<div class="container">
	<?php
	if(isset($message)){ ?>
	
		<div class="col-xs-12">
			<div class="alert alert-danger" role="alert"><?php echo($message);?></div>
		</div>

	<?php } ?>

	<div class="col-xs-4 col-xs-offset-4">
		<form class="form-signin" action="index.php" method="post">
			<h2 class="form-signin-heading">Login</h2>
			<label for="inputUser" class="sr-only">User</label>
			<input type="text" name="inputUser" id="inputUser" class="form-control" placeholder="User" required="required" autofocus="">
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required="">
			<div class="checkbox">
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
</div>