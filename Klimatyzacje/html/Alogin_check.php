<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email-username'];
    $password = $_POST['password'];

    // Sanityzacja wejść, aby zapobiec SQL injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Zapytanie do bazy danych w celu sprawdzenia, czy dane logowania istnieją
    $sql = "SELECT * FROM users WHERE login='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Dane logowania są prawidłowe, przekieruj do A_admin.php
        header('Location: A_admin.php');
        exit();
    } else {
        // Nieprawidłowe dane logowania, przekieruj z powrotem na stronę logowania
        header('Location: A_login.html');
        exit();
    }
} else {
    // Nieprawidłowa metoda żądania, przekieruj z powrotem na stronę logowania
    header('Location: A_login.html');
    exit();
}
?>
