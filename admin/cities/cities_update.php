<?php 
    require_once "../../connect.php";
    require_once "../../admin_access.php"; 
    var_dump($_POST['name']);
    
    if(isset($_POST['name'])) {
        $name = $_POST['name'];
        $id = $_POST['id'];
        mysqli_query($connect, "UPDATE cities SET name = '$name' WHERE id = $id");
        header("Location: cities.php");
    }
?>