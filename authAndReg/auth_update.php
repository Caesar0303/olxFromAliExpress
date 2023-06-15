<?php 
    require_once('../connect.php');
    session_start();
    $login = $_POST['alogin'];
    $password = $_POST['apassword'];
    if (empty($login) || empty($password)) {
        echo 'Заполните все поля';
    }  else {
            $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";
            $result = $connect->query($sql);
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {
                    $_SESSION['user'] =  $login;
                    if ($row['admin'] == 1) {
                        $_SESSION['admin'] = 1;
                        $text = "Вы зашли как админ";
                    } else {
                        $_SESSION['admin'] = 0;
                        $text = "Вы зашли как пользователь";
                    }
                    var_dump($_SESSION['user']);
                    var_dump($_SESSION['admin']);
                    header('Location: ../index.php');
                }
            } else {
                $text = "Нету такого пользователя";
            }
        }
    $_SESSION['text'] = $text;
?>