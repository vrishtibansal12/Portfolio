
<?php

//User “girlsini_certificateMailer” was added to the database “girlsini_certificateMailer”.
date_default_timezone_set('Asia/Calcutta');

$servername = "localhost";
$username = "certificateMail";
$password = "1qazxsw2@";
$dbname = "certificate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

?>