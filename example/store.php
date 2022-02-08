<?php 

include 'components/start.php';


$db->create('posts', [
		'title' => $_POST['title'],
		
]);

header('Location: index.php');

?> 
