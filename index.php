<?php
session_start();
include_once('db.comfig.php');
echo "SESSION:::<br />";
print_r($_SESSION);
echo("<br />::::::::::::::");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Randock Code Test</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<style type="text/css">
		.top30 {
			padding-top: 80px;
		}
	</style>

	
	<script type="text/javascript" src="/js/jquery.min.js"></script>

	
</head>
<body>

<?php
if(!isset($_SESSION['user'])){
	include('view/login.php');
} else {
	include('view/form.php');
}
?>
	
</body>
</html>