
<?php
require_once __DIR__ . "/../database.php";
// aggiungo la ricerca del genere
$result=[];
$genre = $_GET['genre'];

// se non viene filtrato nessun genere allora mostro l'intero database
if (empty($genre) ){
  $result = $database;

// altrimenti cerco ogni item che appartiene al genere cercato e lo pusho in result  
} else {
  foreach($database as $item){
    if($item['genre'] == $genre){
      $result[] = $item;
    }
  }
}
// richiamo il database e lo codifico come file .json per farlo leggere da js
$database_json = json_encode($result);
header("Content-Type: application/json");
echo $database_json;
?>