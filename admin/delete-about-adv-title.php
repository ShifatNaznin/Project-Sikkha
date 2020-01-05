<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_advisor_title WHERE about_adv_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allabout-advisors-title.php');
    }
?>
