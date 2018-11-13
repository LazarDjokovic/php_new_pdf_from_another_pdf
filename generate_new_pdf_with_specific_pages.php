<?php
    // Installation
    // composer require mikehaertl/php-pdftk , visit https://github.com/mikehaertl/php-pdftk for more information 
    $arrayOfPages=[1,5,7,15,25];
    require_once( 'vendor/autoload.php' );
    use mikehaertl\pdftk\Pdf;

    // Extract pages 1,5,7,4,9 into a new file
    // If you want pages from 1-5 use ->cat(1,5)
    // If you want specific pages use array ->cat([1,5,7,15,25])
    $pdf = new Pdf("./path_to_pdf_file.pdf");
    $pdf->cat($arrayOfPages)
        ->saveAs("./new_documents/name_of_the_new_pdf_file.pdf");

    if (!$pdf->saveAs("./new_documents/name_of_the_new_pdf_file.pdf")) {
        $error = $pdf->getError();
        echo ($error);
    }

    // Execute php script Ubuntu command: php php_script_name.php
?>