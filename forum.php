<?php
    require_once("header.php");
?>

<form name="comment" action="comment.php" method="post">
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text_comment" cols="150" rows="10"></textarea>
  </p>
  <p>
    <input type="hidden" name="page_id" value="150" />
    <input type="submit" value="Отправить"/>
  </p>
</form>




<?php
  $page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "root", "", "qwer");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comm` ORDER by id DESC"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_array()) {
    echo "<div class='post-wrap'>
	<div class='post-item'>
		<div class='post-item-wrap'>
			<a href='' class='post-link'>
				<h3 class='post-title'>$row[1], $row[3]</h3>
				<p class='post-content'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel arcu purus. Duis egestas purus et ex interdum lobortis. Quisque nec magna viverra, interdum dolor at, congue augue. Quisque sed interdum augue, a lacinia nulla. Sed risus nibh, vestibulum eu nisi eu, imperdiet tempor quam.</p>
			</a>			
		</div>
	</div>";
  }
?>