<?php

define("FORMID", "1");
define("FIELDNUMBER", "15");

define('WP_DEBUG_LOG', true);

require_once($_SERVER['DOCUMENT_ROOT'].'/wp-blog-header.php');

//AVANT TOUTE CHOSE IL FAUT PENSER A VERIFIER LA CHAINE CODEE DE TRANSACTION

if  (isset($_POST['vads_trans_id'])) {

	ksort($_POST);
	$message = " VARIABLE POST : ".print_r($_POST, true);
	//$message = print_r($_GET, true);

	$fp = fopen ($_SERVER['DOCUMENT_ROOT']."/journal-variables.txt", "a+");
	//fseek ($fp, 0);
	fputs ($fp, $message);
	fclose ($fp);



	$bisous = (int)$_POST['vads_trans_id'];
	$entry_id = $bisous - 100000;
	$sql = "UPDATE 39A6d7pc_gf_entry_meta SET meta_value='".$_POST['vads_trans_status']."' WHERE form_id=".FORMID." AND entry_id=".$entry_id." AND meta_key LIKE '".FIELDNUMBER."'";
	$wpdb->query($sql);
}

print " ";

?>