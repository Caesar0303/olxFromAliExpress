<?php 
    require_once "../../connect.php";
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        mysqli_query($connect, "DELETE FROM subcategories WHERE id = $id");
        header("Location: subcategories.php?id=" . $_SESSION['category_id']);
    }
?>