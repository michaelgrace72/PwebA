<?php

// SQLite database file path
$databaseFile = 'C:\Users\mikha\Documents\Kuliah\Sem_3\PWeb_A\phpnsql\Pendaftaran_siswa\identifier.sqlite';

try {
    // Create a new PDO instance
    $db = new PDO('sqlite:' . $databaseFile);

    // Set PDO error mode to exception for better error handling
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}