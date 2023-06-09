<?php 
    require_once "../../connect.php";
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        mysqli_query($connect, "INSERT INTO cities (name) VALUES ('$name');
        ");
        header("Location: cities.php");
    }
?>