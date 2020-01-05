<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_uni_banner WHERE uni_ban_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allabout-university-banner.php');
    }
?>
