<?php
       ini_set("display_errors",1);
       error_reporting(E_ALL);
include "../../functions/conexion.php";
$result = consulta($mysqli, "SELECT * FROM Tareas");
$row = mysqli_fetch_assoc($result);
?>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Kanban Board</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Arbutus+Slab'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Simple MDL Progress Bar -->
<div id="p1" class="mdl-progress mdl-js-progress"></div>
<script>
  document.querySelector('#p1').addEventListener('mdl-componentupgraded', function() {
    this.MaterialProgress.setProgress(44);
  });
</script><div class="kanban__title">
      <h1><i class="material-icons">check</i>Tareas</h1></div>
<div class="dd">

  <ol class="kanban To-do">
    <div class="kanban__title">
      <h2><i class="material-icons">report_problem</i>Tareas</h2></div>
      <?php  
            $sql = "SELECT * FROM Tareas";
            $resultx = consulta($mysqli, $sql);
            if ($resultx->num_rows > 0) {
              while($row = $resultx->fetch_assoc()) {
                echo '<li class="dd-item" data-id="1">
                <h3 class="title dd-handle" >'.$row["uno"].' Materia: '.$row["dos"].'<i class=" material-icons ">filter_none</i></h3>
                  <div class="text" contenteditable="true">'.$row["cuatro"].' <br> Fecha de entrega: '.$row["tres"].'<br>
                  </div>
                  <a target="_blank" href=../../tarea?id="'.$row["id"].'">Link de la tarea</a>
              </li>';
              }
            } else {
              echo "0 results";
            }
      ?>
    <li class="dd-item" data-id="1">
  </li>
  </ol>
  <ol class="kanban progress">
  <div class="kanban__title">
  <h2><i class="material-icons">report_problem</i>En progreso</h2></div>
  <li class="dd-item" data-id="1">
  </li>
  </ol>
  <ol class="kanban  Done">
  <div class="kanban__title">
  <h2><i class="material-icons">report_problem</i>Finalizadas</h2></div>
  <li class="dd-item" data-id="1">
</li>
  </ol>

</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js'></script><script  src="./script.js"></script>

</body>
</html>
