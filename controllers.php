<?php

/**
 * Checks and controllers
 */

if(isset($_POST['inputUser'])){
	if($_POST['inputUser']=="user" && $_POST['inputPassword']=="pass"){
		$_SESSION['user'] = "Randock Test User";
	} else {
		$message = "User/Password credentials are not valid.";
	}
}