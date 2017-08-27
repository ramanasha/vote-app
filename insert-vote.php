<?php
// Get DB info ready for insert
require 'db.php';

// Get vote params
$vote=$_POST['vote'];
$roomId=$_POST['roomId'];

// Insert values in to DB
$sql= mysqli_query($conn,"INSERT INTO votes (vote,roomId) VALUES('".$vote."','".$roomId."')");

// Close connection
mysqli_close($conn);
?>