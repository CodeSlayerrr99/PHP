<?php

//If the name was not chosen, it becomes null
$name=$_POST['name'] ?? null;

//If the name is null, the user gets redirected to the header page
if(empty(trim($name))){
  header('Location: http://localhost/Basics/Submitting%20a%20form/');
}

//Same with the password
$password=$_POST['password'] ?? null;
if(empty(trim($name))){
  header('Location: http://localhost/Basics/Submitting%20a%20form/');
}

echo "Hi there, {$_POST['name']}!<br>";
echo "Your password is {$_POST['password']}!<br>"

 ?>
