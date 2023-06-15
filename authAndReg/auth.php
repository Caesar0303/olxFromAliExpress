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
    .forms_wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
<body>
<br>
    <div class="forms_wrapper">
        <form action="auth_update.php" method="POST" id="authorization_form" class="forms container mt-4">
            <h2>Авторизация</h2>
            <br>
            <input type="text" name="alogin" placeholder="Введите логин" id="alogin" class="form-control" required> 
            <br>
            <input type="password" name="apassword" placeholder="Введите пароль" id="apassword" class="form-control" required>
            <br>
            <button class="btn btn-success">Войти</button>
        </form>
        Нету аккаунта?
        <a href="reg.php">Зарегистрироваться</a>
        <a href="../index.php">Войти без авторизаций</a>
    </div>  
<?php require_once '../foot.php'; ?>