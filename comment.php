<?php
  session_start();
  $name = $_SESSION['email'];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);
  $text_comment = htmlspecialchars($text_comment);
  $mysqli = new mysqli("localhost", "root", "", "qwer");
  $data = date('l jS \of F Y h:i:s A');
  $i = 1;
  $mysqli->query("INSERT INTO `comm` (`name`, `comment`, `data`) VALUES ('$name', '$text_comment', '$data')");
  $i = $i+1;
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>