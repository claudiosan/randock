<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Randock Test Site</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php">Close Session</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<div class="container top80">
	<?php include('views/message.php'); ?>

	<div class="col-xs-4 col-xs-offset-4">
		<form class="form" action="index.php" method="post">
			<h2 class="form-heading">Create user</h2>
			<label for="inputFirstName" class="sr-only">FirstName</label>
			<input type="text" name="inputFirstName" id="inputFirstName" class="form-control" placeholder="FirstName" required="required" autofocus="">
			<label for="inputLastName" class="sr-only">LastName</label>
			<input type="text" name="inputLastName" id="inputLastName" class="form-control" placeholder="LastName" required="required">
			<div class="checkbox">
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Create User</button>
		</form>
	</div>
</div>