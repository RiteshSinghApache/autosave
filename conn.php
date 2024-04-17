<?php
	$conn = new mysqli('localhost', 'root', '', 'ptc_news');
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>