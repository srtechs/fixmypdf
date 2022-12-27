<?php
$filName = $_GET['file'];
$file_url = "http://localhost/fixmypdf/uploads/".$filName;
header('Content-Type: application/pdf');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=".urlencode($filName));
readfile($file_url);
exit;
?>