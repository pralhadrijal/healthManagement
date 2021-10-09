<?php 




$conn = new mysqli("localhost", "root","", "healthprov");

// Create connection
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);



} ?>