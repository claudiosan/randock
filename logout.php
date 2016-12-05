<?php
/**
 * Cierre de session
 */
session_start();
unset($_SESSION['user']);
header("Location: index.php");
die();