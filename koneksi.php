<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "kedang_murung";

$db = new mysqli($server, $username, $password, $db_name);
if(!$db){
    die();
}

$show = "SELECT * FROM news"
?>