<?php

$quotes=[
  [
    'author'=>'Mike Chang',
    'text'=>'Chang Mike'
  ],
  [
    'author'=>'Victor',
    'text'=>'Ionut',
  ],
];

$quote=$quotes[rand(0, count($quotes)-1)];
$quoteAuthor=$quote['author'];
$quoteText=$quote['text'];

echo $quoteAuthor . '<br>' . $quoteText . '<br>';

 ?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Random quote</title>
  </head>

  <body>
    <blockquote>
      <h2>&ldquo;<?php echo $quoteText ?>&rdquo;</h2>
      <strong>- <?php echo $quoteAuthor?></strong>
    </blockquote>
  </body>

</html>
