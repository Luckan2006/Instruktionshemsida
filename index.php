<?php
session_start();
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Guide</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Python</header>
    <div class="navbar">
        <button><a href="index.php">Startsida</a></button>
        <button><a href="Introduction.php">Introduktion</a></button>
        <button><a href="Print.php">Print</a></button>
        <button><a href="Class.php">Klasser</a></button>
        <button><a href="Functions.php">Funktioner</a></button>
        <button><a href="If-statement.php">If-statser</a></button>
        <button><a href="EndProject.php">Python hiss övning</a></button>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <a href="logout.php" onclick="return confirm('Är du säker på att du vill logga ut?')">
                <button>Logga ut</button>
            </a>
        <?php else: ?>
            <button><a href="login.html">Logga in</a></button>
        <?php endif; ?>
    </div>
    <div class="container">
        <h1>Språket Python</h1>
        <p>Python är ett mångsidigt programmeringsspråk som används inom många områden, inklusive webbutveckling, datavetenskap och maskininlärning.</p>
        <p>Det är känt för sin läsbarhet och enkelhet, vilket gör det till ett utmärkt val för både nybörjare och erfarna utvecklare.</p>
        <p>Python har ett stort ekosystem av bibliotek och ramverk som gör det möjligt att snabbt bygga kraftfulla applikationer.</p>
        <h2>Vad är syftet med denna hemsida?</h2>
        <p>Syftet med denna hemsida är att lära ut baserna i språket Python. 
            Detta görs med hjälp av olika strukturerade sidor som man kan navigera sig till längst upp på denna sidan. 
            Ett tips är att börja med <b>Print</b> och utgå därifrån till någon av de andra genomgångarna för att få bästa möjliga förståelsen.
            Enkelheten som de olika genomgånarna har gör det möjligt för alla att kunna ta del av denna python hemsida, vilket innebär att nybörjare och seniorer kan lära sig från det som visas på hemsidan</p>
    </div>
    <div>
        <h1>Kontakta oss</h1>
        <p>Vill du skicka ett meddelenade till oss om exempelvis förbättringar mm är det bara att trycka på knappen nedan och fylla i formuläret.</p>
        <button><a href="contact.html">Skicka ett meddelande</a></button>
    </div>
<script src="footer.js" defer></script>
<script>
        document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.image-wrapped').forEach(function(e) {
            e.addEventListener('click', function() {
                e.classList.add('revealed');
            });
        });
    });
</script>
</body>
</html>
