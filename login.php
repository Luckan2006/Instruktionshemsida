<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$pass = $_POST['password'];

$stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();
    if (password_verify($pass, $hashedPassword)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        // Skicka tillbaka till sidan användaren ville besöka
        if (isset($_SESSION['redirect_after_login'])) {
            $redirect = $_SESSION['redirect_after_login'];
            unset($_SESSION['redirect_after_login']);
            header("Location: $redirect");
        } else {
            header("Location: index.php");
        }
        exit;
    } else {
        echo "Fel lösenord.";
    }
} else {
    echo "Användaren finns inte.";
}

$stmt->close();
$conn->close();
?>
