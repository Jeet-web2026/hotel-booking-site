<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "expedia";

$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error) {
    die("connection failed for: " . $connection->connect_error);
}

function fetchData()
{
    global $connection;
    $fetchQuery = "SELECT * FROM `hotels-details`";
    $fetchDataQuery = mysqli_query($connection, $fetchQuery);
    return $fetchDataQuery;
}
