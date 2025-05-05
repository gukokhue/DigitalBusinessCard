<?php

// Error Log
ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

$database = "digitalbusinesscard";
$username = "root";
$password = "rootpass";
$host = "digitalbusinesscard-db";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Hataları yakala
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch tipi
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Native prepared statements kullan
];

// Check connection
try {
    $conn = new PDO( "mysql:host=$host;dbname=$database", $username, $password, $options );
    // set the PDO error mode to exception
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    echo "Connected successfully!";
} catch( PDOException $e ) {
    echo "Connection failed: " . $e->getMessage();
}