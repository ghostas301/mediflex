<?php
$host = 'sql309.infinityfree.com';
$user = 'if0_37856510';
$password = 'GXybtRjKfb';
$dbname = 'if0_37856510_domisoins';

// Créer une connexion
$conn = new mysqli($host, $user, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
