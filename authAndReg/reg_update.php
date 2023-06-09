<?php
    require_once('../connect.php');
    
    $login = $_POST['rlogin'];
    $password = $_POST['rpassword'];
    $number = $_POST['rNumber'];

    if (empty($login) || empty($password)) {
        echo "Заполните поля";
    } else {
        var_dump($number);
        var_dump($password);
        var_dump($login);
        $sql = "INSERT INTO `users` (login,password,mobile_number,admin) VALUES ('$login','$password','$number',0)";
        if ($connect -> query($sql) === TRUE) {
            echo 'Успех!';
            $_SESSION['success'] = true;
        } else {
            $_SESSION['error'] = true;
            echo 'Ошибка ' . $connect -> error;
        }
    }

?>
