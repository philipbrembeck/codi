<?php
$file = $_GET['f'];
if ($_GET['download'] == "y"){
$filename = basename($file);
$Size = filesize($file);
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=".$filename);
header("Content-Length: $Size");
readfile($file;
}
else {
header('Location: http://yourdomain.com/codi'.$file);
}
?>
