<?php
/**
 * Checks and controllers
 */

global $mysql;

if(isset($_POST['inputUser'])){
	if($_POST['inputUser']=="user" && $_POST['inputPassword']=="pass"){
		$_SESSION['user'] = "Randock Test User";
	} else {
		$message = "User/Password credentials are not valid.";
	}
}

if(isset($_POST['inputFirstName']) && isset($_POST['inputLastName'])){
	$firstname = mysqli_real_escape_string($mysql,$_POST['inputFirstName']);
	$lastname = mysqli_real_escape_string($mysql,$_POST['inputLastName']);
	$mysql->query(sprintf('SELECT * FROM users WHERE firstname LIKE "%s" AND lastname LIKE "%s";',$firstname,$lastname));
	echo $mysql->error;
	echo $users = $mysql->affected_rows;

	//die();
	if($users==0) {
		//no existen usuarios en la bbdd hacemos consulta a la api.
		$api = getRandockHash($firstname,$lastname);
		if($api=="ok") {
			echo $success = "User saved";

		} else {
			$message = "Can't connect to API.";
		}
		//echo "en api";
	} else {
		$message = "The user already exists in databases.";
	}
	//die('aqui');
}


/**
 * Funcion que devuelve el hash de la api de Randock
 * @param  [string] $firstname 
 * @param  [string] $lastname
 * @return [json]
 */
function getRandockHash($firstname=null,$lastname=null) {
	if($firstname==null || $lastname == null) {
		return null;
	}

	$data = ["firstname" 	=> $firstname, 
			"lastname" 		=> $lastname];
	$data_string = json_encode($data);

	$ch = curl_init('https://api.randock.com/name/hash.json');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_USERPWD, "api:p.i.sgWJUqz6Y4[nB99bUGWgzceDeDUyZyLiLck9j>X?PBZcsD");
	curl_setopt($ch, CURLOPT_VERBOSE, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
	'Content-Type: application/json',
	'Content-Length: ' . strlen($data_string)) 
	);

	$result = curl_exec($ch);
	if(curl_errno($ch)) {
		return null;
	}
	global $mysql;
	$api = json_decode($result);
	$sql = sprintf('INSERT INTO users (firstname,lastname,hash) VALUES ("%s","%s","%s")',$firstname,$lastname,$api->hash);
	$mysql->query($sql);
	
	return "ok";
}