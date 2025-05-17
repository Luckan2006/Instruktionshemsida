<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $rating = isset($_POST['betyg']) ? htmlspecialchars($_POST['betyg']) : 'Inget betyg angivet';
    $entry = "Namn: $name\nE-post: $email\nMeddelande:\n$message\n$rating\n---\n";
    file_put_contents("messages.txt", $entry, FILE_APPEND);

    echo "Tack för ditt meddelande! <a href='index.php'>Tillbaka till startsidan</a>";
}
?>
