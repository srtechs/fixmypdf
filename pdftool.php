<?php
// //merge pdf files
// $outputPath = "output/";

// $fileArray= array("pdf1.pdf","pdf2.pdf");

// $outputName = $outputPath."merged.pdf";

// $cmd = "gswin64c -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=$outputName ";
// //Add each pdf file to the end of the command
// foreach($fileArray as $file) {
//     $cmd .= $file." ";
// }
// shell_exec($cmd);
// echo("PDF files has been merged <br />");

// //Convert Doc file to PDF
// $docFile = "test.docx";
// $cmd = "soffice --headless --convert-to pdf:writer_pdf_Export $docFile --outdir $outputPath";
// shell_exec($cmd);
// echo("Word file has been converted to PDF");

// //0 0 596 806
// //Crop pdf file
// $cmd = 'gswin64c -sDEVICE=pdfwrite -sOutputFile=cropped.pdf -dDEVICEWIDTHPOINTS=596 -dDEVICEHEIGHTPOINTS=806 -dFIXEDMEDIA -c "<</PageOffset [-200 -500]>>setpagedevice" -f pdf1.pdf';
// echo(shell_exec($cmd));

//Compress pdf
// $cmd = "gswin64c -q -dNOPAUSE -dBATCH -dSAFER -sDEVICE=pdfwrite -dCompatibilityLevel=1.3 -dPDFSETTINGS=/screen -dEmbedAllFonts=true -dSubsetFonts=true -dColorImageDownsampleType=/Bicubic -dColorImageResolution=144 -dGrayImageDownsampleType=/Bicubic -dGrayImageResolution=144 -dMonoImageDownsampleType=/Bicubic -dMonoImageResolution=144 -sOutputFile=compressed.pdf pdf3.pdf ";
// shell_exec($cmd);

function pingPDF($file) {
    $ret = 0;
    $res = array();
    exec(sprintf('gswin64c -q -dNODISPLAY -dNOSAFER -c "(%s) (r) file runpdfbegin pdfpagecount = quit"', $file), $res, $ret);

    if(0 == $ret) {
        return (int) $res[0];
    }

    return 0;
}

echo pingPDF('pdf3.pdf');
?>