<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "WEBDEVELOPMENT";
$conn = new mysqli($servername, $username, $password, $db); 


$id = $_POST["BUSINESS_ID"];

// Check connection
if ($conn->connect_error) {
    die("The connection has failed due to : " . $conn->connect_error);
} else {
    $query = 'SELECT * FROM BUSINESS_INFO 
    LEFT JOIN BUSINESS_PICTURES ON BUSINESS_INFO.BUSINESS_ID = BUSINESS_PICTURES.BUSINESS_ID
    WHERE BUSINESS_INFO.BUSINESS_ID ='.$id.'';

    if (!mysqli_query($conn,$query))
    {
    echo("Error description: " . mysqli_error($conn));
    } else {

        $result = $conn->query($query);
        
        $songs = array();
        while ($row = $result->fetch_assoc()) {
            $songs[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($songs);    
        $conn->close(); 
    }
}
?>