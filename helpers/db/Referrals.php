<?php

function addVisit($refcode){
    require "dbconfig.php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO Referals (Code) VALUES (?);");
    $stmt->bind_param("s", $refcode);
    
    $stmt->execute();

    $conn->close();

    return $result;

}

?>
