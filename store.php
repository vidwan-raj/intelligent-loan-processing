<?php
require_once 'vendor/autoload.php';
$tesseract=new TesseractOCR('voter1.png');
$tesseract->setWhitelist(range('A','Z'),range('a','z'), range(0,9), ':,/');
$file="output2.txt";
//echo $tesseract->recognize();
file_put_contents($file,$tesseract->recognize());
echo "stored succesfully";
?>