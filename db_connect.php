<?php
$host = 'localhost';
$user = 'kmwkmw5';
$pass = 'm10@(h08@)';
$database = 'kmwkmw5';

@ $db = new mysqli($host, $user, $pass, $database);
if($db->connect_errno){
	exit('Connect Error No: '.$db->connect_errno.'<br />Error Message: '.$db->connect_error);
}
$db->query("set names utf8");
?>