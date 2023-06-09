<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    body{
        background:#F0F8FF;
    }

</style>
<body>
<br>
    <div class="forms_wrapper">
        <form action="reg_update.php" method="POST" id="registration_form" class="forms container mt-4">
            <h2>Регистрация</h2> 
            <br>
            <input type="text" name="rlogin" placeholder="Введите логин" id="rLogin" class="form-control" required>
            <br>
            <input type="password" name="rpassword" placeholder="Введите пароль" id="rPassword" class="form-control" required>
            <br>
            <input type="number" name="rNumber" placeholder="Введите номер" id="rNumber" class="form-control" required>
            <br>
            <button class="btn btn-success">Зарегистрироваться</button>
        </form>
        Уже есть аккаунт?
        <a href="auth.php">Авторизация</a>
    </div>  
<?php require_once '../foot.php'; ?>
