<?php
session_start();

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

$fileToSplit = "";
$files = glob($uploadsDir.'*pdf');
foreach($files as $file) {
    $fileToSplit = $file;
    break;
}

function pingPDF($file) {
    $ret = 0;
    $res = array();
    exec(sprintf('gswin64c -q -dNODISPLAY -dNOSAFER -c "(%s) (r) file runpdfbegin pdfpagecount = quit"', $file), $res, $ret);

    if(0 == $ret) {
        return (int) $res[0];
    }

    return 0;
}

$numberOfPages = 0;
if($fileToSplit != "") {

    $numberOfPages =  pingPDF($fileToSplit);
}

$_SESSION['numberOfPages'] = $numberOfPages;
?>