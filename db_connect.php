<?php
$servername = "localhost";
$username = "root"; // Standard-Benutzername für XAMPP
$password = "";     // Standard-Passwort für XAMPP (leer)
$dbname = "bvb_products";

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
?>