<?php
require_once "php/product.php";

// ZET de array ($stand) om naar een JSON variabele
/** @var array $stand */
$encodedData = json_encode($items);
print $encodedData;

?>