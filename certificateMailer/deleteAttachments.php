<?php
ob_start();
include "connectivity.php";
$sql = "DELETE FROM attachments";
$result = mysqli_query($conn, $sql);
header( 'location:displayAttachments.php');
?>