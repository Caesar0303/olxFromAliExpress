<?php
    require_once '../../connect.php';
    $ad_id = $_GET['ad_id'];
    mysqli_query($connect, "UPDATE ad SET moderation = 1 WHERE id = '$ad_id'");
    header ('Location: moderation.php');
?>

