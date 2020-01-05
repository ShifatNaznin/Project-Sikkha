<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_student WHERE about_stud_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allabout-student-title.php');
    }
?>
