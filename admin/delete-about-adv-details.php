<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_adv_details WHERE about_all_adv_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-about-adv-details.php');
    }
?>
