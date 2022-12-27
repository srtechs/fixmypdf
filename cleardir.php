<?php
    $uploadsDir = 'uploads/';
    chmod($uploadsDir, 0755);
    $files = glob($uploadsDir.'*pdf');
    foreach($files as $file){
        if(is_file($file)) {
            unlink($file);
        }
    }
?>