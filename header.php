<?php
    //Запускаем сессию
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Salvation of Sin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                "use strict";
                var pattern = /^[a-z0-9][a-z0-9\._-]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i;
                var mail = $('input[name=email]');
                mail.blur(function(){
                    if(mail.val() != ''){
                        if(mail.val().search(pattern) == 0){
                            $('#valid_email_message').text('');
                            $('input[type=submit]').attr('disabled', false);
                        }else{
                            $('#valid_email_message').text('Не правильный Email');
                            $('input[type=submit]').attr('disabled', true);
                        }
                    }else{
                        $('#valid_email_message').text('Введите Ваш email');
                    }
                });
                var password = $('input[name=password]');
                password.blur(function(){
                    if(password.val() != ''){
                        if(password.val().length < 6){
                            $('#valid_password_message').text('Минимальная длина пароля 6 символов');
                            $('input[type=submit]').attr('disabled', true);
                             
                        }else{
                            $('#valid_password_message').text('');
                            $('input[type=submit]').attr('disabled', false);
                        }
                    }else{
                        $('#valid_password_message').text('Введите пароль');
                    }
                });
            });
        </script>
    </head>
    <body>
 
        <div id="header">
            <h2>Salvation of Sin</h2>
            <div id="auth_block">
            <?php
                if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
            ?>
                    <div id="link_register">
                        <a href="form_register.php">Регистрация</a>
                    </div>
                    <div id="link_auth">
                        <a href="form_auth.php">Авторизация</a>      
                    </div>
            <?php
                }else{echo $_SESSION['email'];
            ?> 
                    <div id="link_logout">
                        <a href="logout.php">Выйти</a>
                    </div>
            <?php 
                }
            ?>
            </div>
             <div class="clear"></div>
        </div>