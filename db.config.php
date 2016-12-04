<?php

/**
 * Definiciones / usuarios / conexiones a bbdd
 */
global $mysql;

$user = "homestead";
$pass = "secret";
$server = "localhost";
$db = "randock";


$mysql = new mysqli($server,$user,$pass,$db);

// si no existen la tabla la crea

$mysql->query('CREATE TABLE IF NOT EXISTS users ( firstname VARCHAR(50) NOT NULL,
		lastname VARCHAR(50) NOT NULL, hash VARCHAR(100) NOT NULL );');
