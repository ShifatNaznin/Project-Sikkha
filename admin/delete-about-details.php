<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_details WHERE about_det_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-about-details.php');
    }
?>
