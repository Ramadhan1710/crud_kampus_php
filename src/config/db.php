<?php
// Simple PDO database connection (sesuaikan credential bila perlu)
$DB_HOST = 'db';
$DB_NAME = 'kampus';
$DB_USER = 'admin';
$DB_PASS = 'admin123';

try {
   $pdo = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME};charset=utf8mb4", $DB_USER, $DB_PASS, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
   ]);
} catch (PDOException $e) {
   die('Database connection failed: ' . $e->getMessage());
}
