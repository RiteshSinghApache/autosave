<?php
	require_once 'conn.php';
 
	if($_POST['blog_id'] == ""){
		$title = $_POST['title'];
		$content = $_POST['content'];
 
		$conn->query("INSERT INTO `new_post` VALUE('', '$title', '$content', 'Post')");
		echo $conn->insert_id;
	}else{
		$title = $_POST['title'];
		$content = $_POST['content'];
		$blog_id = $_POST['blog_id'];
		
		$conn->query("UPDATE `new_post` SET `post_title` = '$title', `post_content` = '$content', `post_status` = 'Post' WHERE `ID` = '$blog_id'");
	}
?>