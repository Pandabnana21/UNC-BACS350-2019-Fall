<?

$title_faq = "Quickies Admin";

$footer_text = "© 2011 seriot.ch";

$srv_host = "localhost";
$srv_user = "bearsnin_me";
$srv_pass = "12345";
$srv_db = "bearsnin_notes";

$connection = mysql_connect($srv_host, $srv_user, $srv_pass) or die("Invalid server or user". mysql_error());
mysql_select_db($srv_db, $connection) or die ("SQL-error: ". mysql_error());

?>
