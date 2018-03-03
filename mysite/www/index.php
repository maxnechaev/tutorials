<?php
  session_start ();
  if(isset($_POST["done"])){
    $from = htmlspecialchars($_POST["from"]);
    $to = htmlspecialchars($_POST["to"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;
    $error_to = "";
    $error_from = "";
    $error_message = "";
    $error_subject = "";
    $error = false;
      if($from == "" || !preg_match("/@/", $from)){
        $error_from = "Введите правильную почту";
        $error = true;
      }
      if($to == "" || !preg_match("/@/", $to)){
        $error_to = "Введите правильную почту";
        $error = true;
      }
      if(strlen($subject) == 0){
        $error_subject = "Введите тему сообщения";
        $error = true;
      }
      if(strlen($message) == 0){
        $error_message = "Введите сообщение";
        $error = true;
      }
      if(!$error){
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
      }
      mail($to, $subject, $message, $headers);
      header ("Location: success.php");
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Обратная связь</title>
  </head>
  <body>
    <h2>Форма обратной связи</h2>
    <form name="feedback" action="" method="post">
      <label>От кого: </label><br />
      <span style="color:red"><?=$error_from ?></span>
      <input type="text" name="from" value="<?=$_SESSION["from"]?>" /><br />
      <label>Кому: </label><br />
      <span style="color:red"><?=$error_to ?></span>
      <input type="text" name="to" value="<?=$_SESSION["to"]?>"/><br />
      <label>Тема: </label><br />
      <span style="color:red"><?=$error_subject ?></span>
      <input type="text" name="subject" value="<?=$_SESSION["subject"]?>"/><br />
      <label>Сообщение: </label><br />
      <span style="color:red"><?=$error_message ?></span>
      <textarea type="text" name="message" cols="25" rows="8" /><?=$_SESSION["message"]?></textarea><br />
      <input type="submit" name="done" value="Отправить">
    </form>
  </body>
</html>
