<?php
error_reporting(0);

function login($email, $password){
  include "conexion.php";

  $contrasena = strip_tags($password);
  $emaila = strip_tags($email);
  
  $consulta = "SELECT  id, uno, dos, tres, siete FROM Usuarios WHERE tres='" . $mysqli->real_escape_string(base64_encode($emaila)) . "'";
  $result = consulta($mysqli, $consulta);
  $row = mysqli_fetch_assoc($result);

  if ($row["siete"] == NULL && $row["id"] != NULL) {
    if (md5($contrasena) == base64_decode($row["dos"])) {
      session_start();
      $_SESSION["Login"] = $row["id"];
      header('Location: index.php');
    }else{
      header('Location: iniciar-sesion.php?al=1');
    }
  }else if($row["id"] == NULL || $row["siete"] != NULL){
    header('Location: iniciar-sesion.php?al=2');
  }
}

function register($post) {
  include "conexion.php";

  $consulta = consulta($mysqli, "SELECT * FROM Usuarios WHERE tres='" . $mysqli->real_escape_string(base64_encode($post["email"])) . "'");
  $row = mysqli_fetch_assoc($consulta);
  $consulta = consulta($mysqliroot, "SELECT * FROM verification WHERE uno='" . $mysqli->real_escape_string(base64_encode($post["email"])) . "'");
  $row2 = mysqli_fetch_assoc($consulta);
  if (!isset($row["uno"]) && isset($row2["uno"]) && !isset($row2["tres"]) || isset($row["siete"]) && isset($row2["uno"]) && !isset($row2["tres"]))  {
      $consulta = consulta($mysqli, "INSERT INTO Usuarios VALUES (NULL , '" .base64_encode($post["name"]). "', '" .base64_encode(md5($post["password"])). "', '".base64_encode($post["email"])."', '".base64_encode($post["curso"])."', '".$row2["cuatro"]."', '". base64_encode(date('l jS F Y h-i-s A')) ."', NULL, NULL)");
      $lol = "INSERT INTO Perfil VALUES (NULL , '". $mysqli->real_escape_string(base64_encode($post["email"])) ."', '".base64_encode("images/11.svg")."', NULL, NULL, '". base64_encode(date('l jS F Y h-i-s A')) ."', NULL, '".base64_encode("0/0")."')";
      $consulta = consulta($mysqli, $lol);
      $consulta = consulta($mysqliroot, "UPDATE verification SET tres = '" . base64_encode($post["name"]). "' WHERE uno ='" . $mysqli->real_escape_string(base64_encode($post["email"])) . "'");
      $consulta = consulta($mysqli, "SELECT MAX(`id`) FROM `Usuarios`");
      $rowzx = mysqli_fetch_assoc($consulta);
      session_start();
      $_SESSION["Login"] = $rowzx["MAX(`id`)"];
      return "true";
  }else{
      return "false";
  }
}

function upload($post, $session){
  include "conexion.php";

  $sql = "SELECT * FROM Archivos WHERE siete ='". base64_encode($post["nombre-material"]) . "'";
  $result = consulta($mysqli, $sql);
  $row = mysqli_fetch_assoc($result);

  session_start();
  $sql = "SELECT * FROM Usuarios WHERE id =". $session;
  $result = consulta($mysqli, $sql);
  $row2 = mysqli_fetch_assoc($result);

  $stra = strtolower($post["materia"]);
  $stra = unaccent($stra);
  if (!isset($row["uno"])) {
     $sql = "INSERT INTO Archivos VALUES (NULL, '".$row2["cuatro"]."', '".base64_encode($stra)."', '".base64_encode($post["profesor"])."', '".$row2["uno"]."', '".base64_encode($post["link-archivo"])."', '".base64_encode($post["link-miniatura"])."', '".base64_encode($post["nombre-material"])."', '".base64_encode($post["materia-info"])."', '".$post["tags"]."', '".base64_encode(date('l jS F Y h-i-s A'))."' , NULL, NULL)";
     $result = consulta($mysqli, $sql);
     $consulta = consulta($mysqli, "SELECT MAX(`id`) FROM `Archivos`");
     $id = mysqli_fetch_assoc($consulta);
     $return = array("true", $id["MAX(`id`)"]);
     return $return;
  }else{
    $return = array ("false");
    return $return;
  }
}

function edit($post, $session, $get){
  include "conexion.php";

  session_start();
  $sql = "SELECT * FROM Usuarios WHERE id =". $session;
  $result = consulta($mysqli, $sql);
  $row2 = mysqli_fetch_assoc($result);

  $sql = "SELECT * FROM Archivos WHERE id ='".$get["id"]. "' AND cuatro ='".$row2["uno"]."'";
  $result = consulta($mysqli, $sql);
  $row = mysqli_fetch_assoc($result);

  if (isset($row["uno"])) {
     $sql = "UPDATE Archivos SET tres = '".base64_encode($post["profesor"])."', cinco = '".base64_encode($post["link-archivo"])."', seis = '".base64_encode($post["link-miniatura"])."', siete = '".base64_encode($post["nombre-material"])."', ocho = '".base64_encode($post["materia-info"])."', nueve = '".$post["tags"]."', doce = '".base64_encode(date('l jS F Y h-i-s A'))."' WHERE id =".$row["id"];
     $result = consulta($mysqli, $sql);
     return "true";
  }else{
    return "false";
  }
}
?>