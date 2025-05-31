<?php
// Connection variables
$host = 'localhost';
$db   = 'mydb';
$user = 'myuser';
$pass = 'mypassword';
$port = '5432'; // default PG port

// Using PDO
$dsn = "pgsql:host=$host;port=$port;dbname=$db;";
try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    // Query example
    $stmt = $pdo->query("SELECT * FROM people");
    foreach ($stmt as $row) {
        echo $row['id'] . ": " . $row['name'] . " (" . $row['age'] . ")<br>";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>