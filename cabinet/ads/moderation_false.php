<?php 
    require_once "../../connect.php";
    if(isset($_GET['ad_id'])) {
        $id = $_GET['ad_id'];
        mysqli_query($connect, "DELETE FROM ad WHERE id = $id");
        header("Location: moderation.php");
    }
?>