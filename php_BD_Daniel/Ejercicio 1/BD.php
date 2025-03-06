<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "Gestion";
$conn = @mysqli_connect($hostname, $username, $password, $dbname);

    if ($conn) {
        mysqli_select_db($conn, $dbname) ===TRUE;
    } else {
        mysql_close($conn);
    }
?>