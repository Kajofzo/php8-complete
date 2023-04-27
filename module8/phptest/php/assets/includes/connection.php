<?php
  $host = 'localhost';
  $dbname = 'php8';
  $username = 'root';
  $password = '';

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $data = $pdo->query('SELECT * FROM producten');

    
  } catch (PDOException $e) {
    echo 'Verbindingsfout: ' . $e->getMessage();
  }
  ?>