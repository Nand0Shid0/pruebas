<?php
    $server = 'localhost';
    $username = 'fernando';
    $password = "root";
    $database = 'zyzzplements';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
      } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
      }
      
?>