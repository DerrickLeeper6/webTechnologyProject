<?php
function connectToDatabse() {
    $servername = "localhost";
    $user = "root";
    $password = "";
    $db = "webtechproject";
    
    $conn = new mysqli($servername, $user, $password, $db); 
        
    // Check connection
    if ($conn->connect_error) {
        die("The connection has failed due to : " . $conn->connect_error);
    } else {
        return $conn;
    }
}






?>