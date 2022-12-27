<?php
session_start();
$_SESSION['fileToDownload'] = '';

//set uploads directory
$uploadsDir = 'uploads/';
chmod($uploadsDir, 0755);


$filesNum = count($_FILES['filepond']['name']);
// Looping all files and move them to the uploads directory
for ($i = 0; $i < $filesNum; $i++) {
    // same the file
    $file = $uploadsDir.$_FILES['filepond']['name'][$i];
    move_uploaded_file($_FILES['filepond']['tmp_name'][$i], $file);
}

//Merge uploaded files
$outputName = $uploadsDir."compressed.pdf";
$cmd = "gswin64c -q -dNOPAUSE -dBATCH -dSAFER -sDEVICE=pdfwrite -dCompatibilityLevel=1.3 -dPDFSETTINGS=/screen -dEmbedAllFonts=true -dSubsetFonts=true -dColorImageDownsampleType=/Bicubic -dColorImageResolution=144 -dGrayImageDownsampleType=/Bicubic -dGrayImageResolution=144 -dMonoImageDownsampleType=/Bicubic -dMonoImageResolution=144 -sOutputFile=$outputName ";
$files = glob($uploadsDir.'*pdf');
foreach($files as $file) {
    $cmd .= $file." ";
}
shell_exec($cmd);

$_SESSION['fileToDownload'] = 'compressed.pdf';

?>