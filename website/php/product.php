<?php

// Zet de toegangsgegevens tot de database in variabelen
$server     = 'localhost';
$port       = 8889;
$database   = 'proj_webshop';
$table      = 'items';
$name       = 'root';
$pwd        = 'root';

// MAAK een lege array aan, in deze array komen later de resultaten te staan.
$items = array();

// MAAK een connectie met de database
$connect = mysqli_connect($server, $name, $pwd, $database, $port);

// CHECK of er een connectie gemaakt wordt en zo niet geef de foutmelding
if (mysqli_connect_errno()) {
    throw new Exception("Connect error: " . mysqli_connect_error());
}

// ZET de query klaar in een variabele
$sql = "SELECT item_id, item_name, item_price, item_image FROM items";

// VOER de query uit met de gelegde verbinding en de query variabele
$result = mysqli_query($connect, $sql);

// CHECK of er een resultaat is zoniet geef de fout weer
if ($result == null) {
    throw new Exception("Er zijn geen resultaten opgehaald");
}

// Stop alle resultaten in een associatieve array
while ($row = mysqli_fetch_assoc($result)) {
    $items[] = $row;
}

// OPRUIMEN query resultaten
mysqli_free_result($result);

// SLUIT de verbinding met de database
mysqli_close($connect);

?>