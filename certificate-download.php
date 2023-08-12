<?php  
require "retrieving\certificate.php";

foreach ($certificate as $item):
    if(password_verify($item['id'], $_GET['hash']))
    {
        download($item['file']);
    }
endforeach;

function download(String $file)
{
    if (isset($file)) {
        $path = "asset\certificate-file" . $file; //file url
        // Set headers for the download
        header("Content-Description: File Transfer");
        header("Content-type:application/pdf");
        header("Content-Disposition:attachment;filename = " . $file);
        header("Cache-Control: no-cache");
        header("Pragma: no-cache");
        header("Expires: 0");
        // Use cURL to download the PDF
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $pdfData = curl_exec($ch);
        curl_close($ch);
        readfile($path);
        return "$pdfData"; 
    } else {
        return "404 Not Found";
    }
} 

?>