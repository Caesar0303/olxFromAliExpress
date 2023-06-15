<?php 
    require_once "../../connect.php";  
    require_once "../../admin_access.php";   
?>
<?php
    var_dump($_POST['name']);
    var_dump($_POST['id']);
    var_dump($_POST['category']);
    
    if(isset($_POST['name']) && isset($_POST['id'])) {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $category = $_POST['category'];
        mysqli_query($connect, "UPDATE subcategories SET name = '$name', categories_id = '$category' WHERE id = $id");
        header("Location: subcategories.php");
    }
?>