<?php
    require_once("header.php");
?>
<div class="block_for_messages">
    <?php
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
            unset($_SESSION["error_messages"]);
        }
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>
 
<?php
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>

<form action="register.php" method="post" name="form_register" class="ui-form">
  <h3>Зарегистрироваться</h3>
   <div class="form-row">
    <input type="text" name="first_name" id="first_name" required autocomplete="off"><label for="email">Имя</label>
  </div>
  <div class="form-row">
    <input type="text" name="last_name" id="last_name" required autocomplete="off"><label for="password">Фамилия</label>
  </div>
   <div class="form-row">
    <input type="text" name="email" id="email" required autocomplete="off"><label for="email">Email</label>
     <span id="valid_email_message" class="mesage_error"></span>
  </div>
  <div class="form-row">
    <input type="password" name="password" id="password" required autocomplete="off"><label for="password">Пароль</label>
     <span id="valid_password_message" class="mesage_error"></span>
  </div>
  <p><input type="submit" name="btn_submit_register" value="Зарегистрироваться"></p>
</form>


<?php
    }else{
?>
        <div id="authorized">
            <h2>Вы уже зарегистрированы</h2>
        </div>
<?php
    }
    require_once("footer.php");
?>