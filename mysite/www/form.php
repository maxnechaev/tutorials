<?php
  if(isset($_POST["done"])) {
    if($_POST["name"] == "")
      echo "Вы ввели неверное имя. <a href='/'>Исправить</a><br />";
    else
      header("Location:form.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Обработка форм</title>
  </head>
  <body>
    <form name="test" action="" method="post">
      <input type="text" name="name" placeholder="Имя" /><br /><br />
      <input type="text" name="email" placeholder="E-mail" /><br /><br />
      <textarea name="message" rows="10" cols="50" placeholder="Сообщение"></textarea><br /><br />
      <input type="submit" name="done" value="Готово" />
    </form>
  </body>
</html>
