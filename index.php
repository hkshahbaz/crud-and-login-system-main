<?php
session_start();
include_once('connection.php');
if( isset($_SESSION["name"]))
	{
		include 'header.php';
include 'nav.php';
include 'logoutbtn.php';
include 'section.php';
include 'footer.php';
	}
	else {
include 'header.php';
include 'nav.php';
include 'loginbtn.php';
include 'section.php';
include 'footer.php';
}
?>