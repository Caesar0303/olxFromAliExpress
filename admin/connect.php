<?php 
    session_start();
    $envPath = __DIR__ . '/../.env';
    $config = file_get_contents($envPath);
    $config = explode("\n",$config);
    $env=[];
    foreach ($config as $row) {
        $item = explode("=",$row);
        $env[$item[0]] = trim($item[1]);
    }

    $connect = mysqli_connect('localhost',$env['DB_LOGIN'],$env['DB_PASSWORD'],$env['DB_NAME']);
    if(!$connect) {
        die('Ошибка');
    }

    if (isset($_SESSION['user'])) {
        $login = $_SESSION['user'];
        $id = mysqli_query($connect, "SELECT id FROM users WHERE login = '$login'");
        $id = mysqli_fetch_all($id);
        $id = $id[0][0];
    }
?>