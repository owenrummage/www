<?php

function getQuote($id)
{
    require "dbconfig.php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM Quotes WHERE ID = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $conn->close();

    return $row;
}

function getAllQuotes()
{
    require "dbconfig.php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Quotes";
    $result = $conn->query($sql);

    $conn->close();

    return $result;
}

function getRandomQuote()
{
    require "dbconfig.php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Quotes ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    $conn->close();

    return $result->fetch_assoc();
}

?>
