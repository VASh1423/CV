<?php
 header("Content-Type: text/html; charset=utf-8");
 session_start();
 echo "Вы успешно отправилии сообщение на email:".$_SESSION["to"];
?>
