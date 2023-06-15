<?php 
    require_once "../../connect.php";
    require_once "../../admin_access.php";    

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        mysqli_query($connect, "DELETE FROM categories WHERE id = $id");
        mysqli_query($connect, "DELETE FROM subcategories WHERE categories_id = $id");
        header("Location: categories.php");
    }
?>