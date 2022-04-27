<?php
    require_once 'connection_db.php';
    require 'functions.php';
    require 'delete.php';

    $hiking = [
      'id' => [],
      'name' => [],
      'level' => [],
      'dist' => [],
      'duration' => [],
      'height_diff' => [],
      'available' => [],
      'reason' => []
    ];

    $res = $db -> query('SELECT * FROM hiking');
    while( $data = $res -> fetch(PDO::FETCH_ASSOC) ) {
        $hiking['id'][] = $data['id'];
        $hiking['name'][] = $data['name'];
        $hiking['level'][] = $data['difficulty'];
        $hiking['dist'][] = $data['distance'];
        $hiking['duration'][] = $data['duration'];
        $hiking['height_diff'][] = $data['height_difference'];
        $hiking['available'][] = $data['available'];
        $hiking['reason'][] = $data['reason'];
    }
    $res->closeCursor();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="./assets/styles/basics.css" media="screen" title="no title" charset="utf-8">
  </head>

  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Difficulty</th>
          <th>Distance</th>
          <th>Duration</th>
          <th>Height Difference</th>
          <th>Available</th>
      </tr>
      <?php
        for ($i = 0; $i < count($hiking['name']); $i ++) {
          displayHikingTable(($i + 1), $hiking['id'][$i], $hiking['name'][$i], $hiking['level'][$i], $hiking['dist'][$i], $hiking['duration'][$i], $hiking['height_diff'][$i], $hiking['available'][$i], $hiking['reason'][$i]);
        }
      ?>
    </table>
  </body>
</html>