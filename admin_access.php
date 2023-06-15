<?php 
    if($_SESSION['admin'] == 0) {
        header ('Location: ../../authAndReg/auth.php'); 
    }
?>