<?php
$Datei = $_GET['f'];
if ($_GET['download'] == "y"){
$Dateiname = basename($Datei);
$Grösse = filesize($Datei);
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=".$Dateiname);
header("Content-Length: $Grösse");
readfile($Datei);
}
else {
header('Location: http://yourdomain.com/codi'.$Datei);
}
?>
