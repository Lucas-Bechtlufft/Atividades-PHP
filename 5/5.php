<?php
include_once "5A.php";
$html = file_get_contents("5.html");
$html = str_replace("{title}", "Array Aleatório", $html);
$html = str_replace("{array}", print_r(criarArrayAleatorio(10), true), $html);


echo $html;

?>
