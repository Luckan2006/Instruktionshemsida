<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-statser</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>Python</header>
       <div class="navbar">
        <button><a href="index.html">Startsida</a></button>
        <button><a href="Introduction.html">Introduktion</a></button>
        <button><a href="Print.html">Print</a></button>
        <button><a href="Class.html">Klasser</a></button>
        <button><a href="Functions.html">Funktioner</a></button>
        <button><a href="If-statement.html">If-statser</a></button>
        <button><a href="EndProject.html">Python hiss övning</a></button>
    </div>
    <div class="container">
        <h2>Hur fungerar if-satser och finns det andra typer av loopar?</h2>
        <p>En if-stats är en fråga man ställer programet kan man säga. Exempelvis om man säger att om en variabel inte är lika med 0 görs något. 
            Men det är inte bara if-satser som finns utan även for-loopar och try and catch.
        </p>
        <h3>If-stats exempel:</h3>
        <img src="/python_guide/python_images/image22.png" alt="Bild på kod">
        <p>Här skapas två variabler <b>tal</b> och <b>tal2</b>. If-satsen kollar om <b>tal</b> är lika med 10 och om det stämmer får <b>tal2</b> + 2 med det värde som den redan har.
        </p>
        <img src="/python_guide/python_images/image23.png" alt="Bild på kod">
        <p>Det betyder att Den får värde 7. Men om det inte hade varit sant skulle loopen gå vidare till else och <b>tal2</b> skulle fått -2 istället.
        </p>
        <h3>For-loop exempel:</h3>
        <img src="/python_guide/python_images/image24.png" alt="Bild på kod">
        <p>Variabel för frukter med tre olika frukter. For-loopen går igenom varje frukt/värde i frukter och printar ut jag gillar + <b>frukt</b>
        </p>
        <img src="/python_guide/python_images/image25.png" alt="Bild på kod">
        <p>Detta syns tydligt i terminalen/konsolen där den skriver ut 3 gånger men en frukt bara en gång.
        </p>
        <h3>Try and catch exempel:</h3>
        <img src="/python_guide/python_images/image26.png" alt="Bild på kod">
        <p>Programmet testar me try om ett tal man skriver in med hjälp av <b>input()</b> och om det är ett heltal skrivs det ut i terminalen/konsolen. 
        Men om det inte är ett heltal går den till except och där den fångar upp felet och skriver ut ett felmeddelande.
        </p>
        <img src="/python_guide/python_images/image27.png" alt="Bild på kod">
        <p>Här skrevs heltalet 29 in och då printades <b>Du skrev 29</b> ut. Om man hade skrivit ett decimal tal eller annat hade det kommit ett felmeddelande. 
            Detta var allt för denna genom gång men testa gärna själv och utveckla de olika looparna.</p>
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
