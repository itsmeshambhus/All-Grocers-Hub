<!-- Everyone create the same schema and password.. -->
<?php
$conn = oci_connect('GrocerEase1', 'Sabin@789', 'localhost/XE');

if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
?>