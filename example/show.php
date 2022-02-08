<?php
include 'components/start.php';

$id = $_GET['id'];

$post = $db->getOne("posts", $id);

?>

<h1>
	<?php echo $post['title'];?>
</h1>
