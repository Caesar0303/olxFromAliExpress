<?php 
    require_once "../../connect.php";
    var_dump($_POST['name']);
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        mysqli_query($connect, "INSERT INTO categories (name) VALUES ('$name');
        ");
        header("Location: categories.php");
    }
?>