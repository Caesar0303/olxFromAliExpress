<?php 
    require_once "../../connect.php";
    var_dump($_GET['id']);
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        mysqli_query($connect, "DELETE FROM cities WHERE id = $id");
        header("Location: cities.php");
    }
?>