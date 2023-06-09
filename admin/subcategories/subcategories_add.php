<?php 
    require_once "../../connect.php";

    var_dump($_POST['name']);
    var_dump($_POST['category_id']);

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $id = $_POST['category_id'];
        mysqli_query($connect, "INSERT INTO subcategories (name, categories_id) VALUES ('$name', '$id');
        ");
        header("Location: subcategories.php");
    }
?>