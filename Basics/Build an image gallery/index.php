<?php

//Including 'directoryReader'
require_once 'directoryReader.php';
$images=directoryReader('Images');

//If the provided directory is not valid, end the program
if(!$images){
  die('Could not load images.');
}

 ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Image Gallery</title>
</head>

<body>
  <?php foreach($images as $image): ?>
    <img src="<?php echo $image; ?>">
  <?php endforeach; ?>
</body>

</html>
