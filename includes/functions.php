<?php
function display_info() {
    // Dagens datum och klockslag
    echo "<p>Datum/klockslag: " . date("Y-m-d H:i:s");

    // Kontrollera om det är fredag
    if (date("l") == "Friday") {
        echo " - Äntligen fredag, trevlig helg!";
    }

    // IP-adressen för besökaren
    echo "<p>Din IP-adress: " . $_SERVER['REMOTE_ADDR'] . "</p>";

    // Sökväg och filnamn för den aktuella PHP-filen
    echo "<p>Sökväg/filnamn: " . $_SERVER['PHP_SELF'] . "</p>";

    // Information om användarens agent
    echo "<p>User agent-sträng: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
}

function check_login()
{
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header("location:/~tiku2200/dt100g/labb3/includes/login.php"); // Omdirigera till inloggningssidan om användaren inte är inloggad
    }
}

function logout()
{
    session_start();
    if (isset($_SESSION['loggedin'])) {
        session_destroy(); // Förstör sessionen
        echo "Du är nu utloggad.";
    }
    else {
        echo "Du är inte inloggad.";
    }
}

function try_login()
{
    session_start();

// Hårdkodade användaruppgifter
    $correct_username = "admin";
    $correct_password = "password";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == $correct_username && $password == $correct_password) {

            // Inloggning lyckades, skapa en session
            $_SESSION['loggedin'] = true;
            header("location:/~tiku2200/dt100g/labb3/index.php"); // Omdirigera till startsidan
        } else {
            // Felaktiga inloggningsuppgifter, visa felmeddelande
            echo "Felaktigt användarnamn eller lösenord.";
        }
    }
}
