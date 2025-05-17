<?php
$servername = "localhost";
$username = "root";      // standardnamn i XAMPP
$password = "";          // lämna tomt om du kör lokalt utan lösenord
$dbname = "userdb";

// Skapa anslutning
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollera anslutning
if ($conn->connect_error) {
    die("Anslutningen misslyckades: " . $conn->connect_error);
}

// Hämta data från formuläret
$email = $_POST['email'];
$pass = $_POST['password'];

// Hasha lösenordet
$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

// Förbered och kör INSERT
$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $hashedPassword);

if ($stmt->execute()) {
    echo "Registrering lyckades! <a href='login.html'>Logga in</a>";
} else {
    echo "Fel: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
