<?php
    ob_start();
    include "connectivity.php";

    $sql = "DELETE FROM content";
    $result = mysqli_query($conn, $sql);

    $subject =  $_REQUEST['subject'];
    $body =  $_REQUEST['body'];

    $sql = "INSERT into content (subject,body) values ('" . $subject . "','" . $body ."')";
    $result = mysqli_query($conn, $sql);

    header( 'location:mailContent.php');
?>