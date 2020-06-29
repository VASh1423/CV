<?php
  if(isset($_POST["done"])){
    if($_POST["name"]=="")
      echo "Исправить имя";
    else
      header("Location:index.php");
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Обработка форм</title>
  </head>
  <body>
    <form name="test" class="" action="" method="post">
      <label>Name</label><br>
      <input type="text" name="name" value="" placeholder="Name"><br>
      <label for="email">E-mail</label><br>
      <input type="text" name="email" value="" placeholder="E-mail"><br>
      <label for="message">Message</label><br>
      <textarea name="message" rows="8" cols="80"></textarea><br>
      <input type="submit" name="done" value="Done">
    </form>
  </body>
</html>
