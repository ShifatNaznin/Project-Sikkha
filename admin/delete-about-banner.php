<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_banner WHERE about_ban_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-about-banner.php');
    }
?>
