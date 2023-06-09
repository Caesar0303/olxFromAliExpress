<?php 
    require_once "../../connect.php";
    var_dump($_POST['name']);
    var_dump($_POST['id']);
    if(isset($_POST['name'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        mysqli_query($connect, "UPDATE categories SET name = '$name' WHERE id = $id");
        header("Location: categories.php");
    }
?>