
<?php
require_once __DIR__ . "/../database.php";
// richiamo il database e lo codifico come file .json per farlo leggere da js
$database_json = json_encode($database);
header("Content-Type: application/json");
echo $database_json;
// var_dump($database_json);
?>