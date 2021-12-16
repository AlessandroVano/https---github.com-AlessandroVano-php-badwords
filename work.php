<?php
$testo = 'benvenuto in php';
echo $testo;
echo '<br> lunghezza:' .strlen($testo);

$nascondi = $_GET['nascondi'];
$testoNascosto = str_replace($nascondi, '***', $testo);
echo '<br>' .$testoNascosto;
echo '<br> lunghezza:' .strlen($testoNascosto);
?>