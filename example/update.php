<?php
include 'components/start.php';

 
 // doneAndDie($_POST);


$db->update('posts', [
	'title' => $_POST['title'],

], $_GET['id']);

header('Location: index.php');

?> 
