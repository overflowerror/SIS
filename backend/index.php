<?php
	include($_SERVER['DOCUMENT_ROOT'] . "/modules/general/Main.php");

	include($_SERVER['DOCUMENT_ROOT'] . "/modules/general/Menu.php");
        generateAdminMenu();

	pageHeader("Admin-Bereich", "main");
?>
<h1>Willkommen im Admin-Bereich</h1>
<h3>Die Funktionen, die für ihre Berechtigungen zur Verfügung stehen, werden links angezeigt.</h3>
<?php
	pageFooter();
?>