<?php
session_start();           // Starta sessionen
session_unset();           // Töm alla sessionvariabler
session_destroy();         
header("Location: index.php"); // Skicka användaren tillbaka till startsidan
exit;
?>
