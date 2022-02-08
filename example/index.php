<?php

include 'components/start.php';


$posts = $db->getAll('posts');



include 'index.view.php';
?>
