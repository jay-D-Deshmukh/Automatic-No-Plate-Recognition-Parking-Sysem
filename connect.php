<?php
/* Local Database*/

$servername = "codembs.com";
$username = "codembsc_parking1";
$password = "Parking@123";
$dbname = "codembsc_parking1";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?> 
