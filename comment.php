<?php
  $name = $_POST["name"];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);
  $text_comment = htmlspecialchars($text_comment);
  $mysqli = new mysqli("localhost", "root", "", "qwer");
  $data = date('l jS \of F Y h:i:s A');
  $mysqli->query("INSERT INTO `comments` (`name`, `comment`, `data`) VALUES ('$name', '$text_comment', '$data')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>