<form name="comment" action="comment.php" method="post">
  <p>
    <label>Имя:</label>
    <input type="text" name="name" />
  </p>
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text_comment" cols="30" rows="50"></textarea>
  </p>
  <p>
    <input type="hidden" name="page_id" value="150" />
    <input type="submit" value="Отправить" />
  </p>
</form>

<?php
  $page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "root", "", "qwer");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments`"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }
?>