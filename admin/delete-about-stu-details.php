<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_stud_details WHERE about_all_stud_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allabout-student-details.php');
    }
?>
