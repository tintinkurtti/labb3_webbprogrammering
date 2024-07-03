
<?php
$page_title = "Logga in";
include("header.php");
include("functions.php");
try_login();
?>

<h2>Logga in</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="username"><b>Användarnamn:</b></label><br>
    <input type="text" name="username" id="username" required><br>
    <label for="password"><b>Lösenord:</b></label><br>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" value="Logga in">
</form>
</body>

