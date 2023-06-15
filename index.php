<h1>Онлайн доска объявлений</h1>
<?php 
    require_once 'connect.php';
    if ($_SESSION['admin'] == 1) {
        require_once "head_admin.php";
    } else {
        require_once "head.php";
    }
?>
<?php 
    if ($_SESSION['user']) {
        echo "Добро пожаловать {$_SESSION['user']}!";
        echo "<br>";
        echo $_SESSION['text'];
    } else {
?>
<a href="authAndReg/auth.php">Войдите</a>
<span> или </span>
<a href="authAndReg/reg.php">Зарегистируйтесь</a>
<?php
    }
?>
<br> 
<?php 
    require_once "foot.php";
?>