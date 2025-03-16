<?php

$database = "digitalbusinesscard";
$username = "root";
$password = "rootpass";
$host = "digitalbusinesscard-db";

# Check connection
try {
  $conn = new PDO( "mysql:host=$host;dbname=$database", $username, $password );
  // set the PDO error mode to exception
  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  echo "Connected successfully!";
} catch( PDOException $e ) {
  echo "Connection failed: " . $e->getMessage();
}