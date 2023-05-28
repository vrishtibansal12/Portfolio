<?php
    ob_start();
    include "connectivity.php";
    $target_Path = "attachments/";
    $target_Path = $target_Path.basename( $_FILES['certificate']['name'] );
    move_uploaded_file( $_FILES['certificate']['tmp_name'], $target_Path );

    $x = $_POST['xcoordicate'];
    $y = $_POST['ycoordicate'];

    $sql = "INSERT into attachments (name,path,X,Y) values ('" . $_FILES['certificate']['name'] . "','". $target_Path . "','". $x . "','". $y ."')";
    $result = mysqli_query($conn, $sql);

    header( 'location:displayAttachments.php');
?>
