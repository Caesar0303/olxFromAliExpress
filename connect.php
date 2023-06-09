<?php 
    session_start();
    $connect = mysqli_connect('localhost','root','','olx');
    if(!$connect) {
        die('Ошибка');
    }

    if (isset($_SESSION['user'])) {
        $login = $_SESSION['user'];
        $id = mysqli_query($connect, "SELECT id FROM users WHERE login = '$login'");
    }
    
    if ($_SESSION['user'] == NULL) {
        header ('Location: authAndReg/auth.php');
    }

    $id = mysqli_fetch_all($id);
    $id = $id[0][0];
?>