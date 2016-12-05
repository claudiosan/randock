<?php
if(isset($message)){ ?>

	<div class="col-xs-12">
		<div class="alert alert-danger" role="alert"><?php echo($message);?></div>
	</div>

<?php 
} 

if(isset($success)){ ?>

	<div class="col-xs-12">
		<div class="alert alert-success" role="alert"><?php echo($success);?></div>
	</div>

<?php 
} 