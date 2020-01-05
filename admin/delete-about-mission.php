<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_mission WHERE about_mis_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: all-about-mission.php');
    }
?>
