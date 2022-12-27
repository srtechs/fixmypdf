<?php
session_start();
$_SESSION['fileToDownload'] = '';

//set uploads directory
$uploadsDir = 'uploads/';
chmod($uploadsDir, 0755);

$firstPage = trim($_POST['firstPage']);
$lastPage = trim($_POST['lastPage']);

//Split uploaded files
$outputName = $uploadsDir."splitted.pdf";
$cmd = "gswin64c -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -dFirstPage=$firstPage -dLastPage=$lastPage -sOutputFile=$outputName.pdf ";
$files = glob($uploadsDir.'*pdf');
foreach($files as $file) {
    $cmd .= $file." ";
}
shell_exec($cmd);

$_SESSION['fileToDownload'] = "splitted.pdf";

header("Location:splitted.php");
exit;
?>