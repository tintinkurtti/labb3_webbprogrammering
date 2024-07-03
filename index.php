<?php
$page_title = "Startsida";
include("includes/header.php");
include("includes/functions.php");
check_login();
?>
    <h2>Startsidan</h2>
    <p><b>1. Har du tidigare erfarenheter av utveckling med PHP?:</b> Nej jag har inte arbetat med PHP tidigare.</p>
    <p><b>2. Hur har du valt att strukturera upp dina filer och kataloger?:</b> Jag valde att följa guiden och placerad css filen i en mapp som heter css, jag placerade alla php filer i includes-mappen förutom index.php</p>
    <p><b>3. Har du följt guiden, eller skapat på egen hand?:</b> Jag har följt guiden</p>
    <p><b>4. Har du gjort förbättringar eller utvecklat egna lösningar utöver guiden?:</b> Jag har gjort en fil som innehåller alla funktioner, dessa behandlar visningen av information av användaren, samt in och utloggning. Dessutom har jag tagit bort sidofältet då jag tycke att den kändes överflödig.</p>
    <p><b>5. Vilken utvecklingsmiljö har du använt?:</b> Jag har använt mig utav PhpStorm</p>
    <p><b>6. Har något varit svårt med denna uppgift?:</b> Det svåraste för mig under denna uppgift var att få till inloggningsfunktionerna så att de fungerade som de skulle.</p>
<?php
include("includes/footer.php");
?>