<?php
include 'components/start.php';

$id = $_GET['id'];

$post = $db->getOne("posts", $id);

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Create Post</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </head>
 <body>
 	
 	<div class="container">
 		<div class="row">
 			<div class="col-md-8 offset-md-2">
			 	<form action="update.php?id=<?php echo $post['id']; ?>" method="post">
			 		<!-- <input type="hidden" value="" name="id"> -->
			 		<div class="form-group">
			 			<label for="">Title</label>
			 			<input type="text" name="title" class="form-control" value="<?php echo $post['title']?>">
			 		</div>
			 		<div class="form-group">
			 			<button class="btn btn-warning" type="submit">Edit Post</button>
			 		</div>
			 	</form>
 			</div>
 		</div>
 	</div>
 </body>
 </html> 
 
