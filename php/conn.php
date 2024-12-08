<?php
// Paramètres de connexion
$host = 'sql7.freemysqlhosting.net'; // Par exemple, '192.168.1.100'
$user = 'sql7750528';
$password = 'XssqpPSNsd';
$dbname = 'sql7750528';

// Créer la connexion
$conn = new mysqli($host, $user, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
echo "Connexion réussie à la base de données !";

?>
