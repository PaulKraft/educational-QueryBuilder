<?php

include 'components/start.php';


$id = $_GET['id'];

$db->delete("posts", $id);
 

header('Location: index.php');

?> 
