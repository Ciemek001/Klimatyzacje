<?php
$servername = "localhost";
$username = "root"; // zmień na swoje dane logowania
$password = "";
$dbname = "sklepklimatyzacje";

// Utworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}
?>
