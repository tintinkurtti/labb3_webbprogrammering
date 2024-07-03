<?php
$page_title = "Info";
include("header.php");
include("functions.php");
check_login();
?>

<h2>Information om dig</h2>
<?php
display_info();
?>

<?php
include("footer.php");
?>
