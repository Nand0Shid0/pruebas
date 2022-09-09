<?php

$server = '192.168.1.146';
$username = 'fer';
$password = 'fernando2';
$database = 'users';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>