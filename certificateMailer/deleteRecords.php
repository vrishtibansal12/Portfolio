<?php
ob_start();
include "connectivity.php";
$sql = "DELETE FROM details";
$result = mysqli_query($conn, $sql);
header( 'location:displayUploads.php');
?>