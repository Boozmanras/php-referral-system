<?php
ob_start();
$mail_content = "mail_register_coontent.php" ;
$mail_heading = "Registered User";
include "mail_general_format.php";
$mail = ob_get_contents();
ob_end_clean();
?>