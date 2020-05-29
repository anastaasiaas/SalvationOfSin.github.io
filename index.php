<?php
    require_once("header.php");
?>
<style>@import url("//portal.fondy.eu/mportal/static/css/button.css");</style>
    <?php
                 if(isset($_SESSION['email']) && $_SESSION['email']=="admin@gmail.com"){
                 ?>
                    <br>
                    <div id="stats">
                        <a href="seestats.php" data-button="" class="f-p-b" style="--fpb-background:#c2f3fc; --fpb-color:#000000; --fpb-border-color:#000000; --fpb-border-width:1px; --fpb-font-weight:400; --fpb-font-size:16px; --fpb-border-radius:5px;">Статистика</a>
                    </div>
    <?php
      }else if(isset($_SESSION['email'])){
    ?>
    <br>
    <a href="https://api.fondy.eu/s/1WjXMWub3Kiys" data-button="" class="f-p-b" style="--fpb-background:#c2f3fc; --fpb-color:#000000; --fpb-border-color:#000000; --fpb-border-width:1px; --fpb-font-weight:400; --fpb-font-size:16px; --fpb-border-radius:5px;">
    <i data-text="name">Оплатить</i>
    <i data-text="amount">500 USD</i>
    <i data-brand="visa"></i><i data-brand="mastercard"></i></a>
<?php
    }
    require_once("footer.php");
$agent = $_SERVER['HTTP_USER_AGENT'];
$uri = $_SERVER['REQUEST_URI'];
if(isset($_SESSION['email'])){
$user = $_SESSION['email'];
} else $user = "None";
$ip = $_SERVER['REMOTE_ADDR'];
$dtime = date('r');
if($user == ""){
$user = "None";
}

$entry_line = "$dtime | $ip | Agent: $agent | $uri | $user \n";
$fp = fopen("logs.txt", "a");
fputs($fp, $entry_line);
fclose($fp);
?>