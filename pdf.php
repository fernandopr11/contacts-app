<?php

use Dompdf\Dompdf;

require './vendor/autoload.php';

$dompdf = new Dompdf();

ob_start();
include "./tabla.php";
$dompdf->loadHtml(ob_get_clean());
$dompdf->render();
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=contactos.pdf");
echo $dompdf->output();
