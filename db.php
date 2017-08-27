<?php
/**
 * Created by PhpStorm.
 * User: Viv
 * Date: 26/08/2017
 * Time: 12:17
 */

// These variables define the connection information for MySQL database (localhost)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vote_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
