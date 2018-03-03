<?php
  if($_POST["name"] == "")
    echo "Вы ввели неверное имя. <a href='/'>Исправить</a><br />";
  else
    header("Location:index.php");

?>
