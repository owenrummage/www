<?php
function getAllHeadlines()
{
    require "dbconfig.php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Headlines";
    $result = $conn->query($sql);

    $conn->close();

    return $result;
}

?>
