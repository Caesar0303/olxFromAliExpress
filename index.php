<h1>Онлайн доска объявлений</h1>
<?php 
    require_once "head.php";
    require_once 'connect.php';
?>
<?php 
    echo "Добро пожаловать {$_SESSION['user']}!";
    echo "<br>";
    echo $_SESSION['text'];
?>
<br> 
    <?php 
    require_once "foot.php";
?>