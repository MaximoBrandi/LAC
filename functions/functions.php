<?php

//error_reporting(0);

function login($email, $password){
  include "conexion.php";

  $contrasena = strip_tags($password);
  $emaila = strip_tags($email);
  
  $consulta = "SELECT  id, uno, dos, tres, siete FROM Usuarios WHERE tres='" . $mysqli->real_escape_string(base64_encode($emaila)) . "'";
  $result = consulta($mysqli, $consulta);
  $row = mysqli_fetch_assoc($result);

  if ($row["siete"] == null) {
    if (md5($contrasena) == base64_decode($row["dos"])) {
      session_start();
      $_SESSION["Login"] = $row["id"];
    }
  }
}

function register($post) {
  include "conexion.php";

  $consulta = consulta($mysqli, "SELECT * FROM Usuarios WHERE tres='" . $mysqli->real_escape_string(base64_encode($post["email"])) . "'");
  $row = mysqli_fetch_assoc($consulta);
  $consulta = consulta($mysqliroot, "SELECT * FROM verification WHERE uno='" . $mysqli->real_escape_string(base64_encode($post["email"])) . "'");
  $row2 = mysqli_fetch_assoc($consulta);
  if (!isset($row["uno"]) && isset($row2["uno"]) && !isset($row2["tres"]))  {
      $consulta = consulta($mysqli, "INSERT INTO Usuarios VALUES (NULL , '" .base64_encode($post["name"]). "', '" .base64_encode(md5($post["password"])). "', '".base64_encode($post["email"])."', '".base64_encode($post["curso"])."', '".$row2["cuatro"]."', '". base64_encode(date('l jS F Y h-i-s A')) ."', NULL)");
      $consulta = consulta($mysqliroot, "UPDATE verification SET tres = '" . base64_encode($post["name"]). "'");
      return true;
  }else{
      return false;
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
     $sql = "INSERT INTO Archivos VALUES (NULL, '".$row2["cuatro"]."', '".base64_encode($stra)."', '".base64_encode($post["profesor"])."', '".$row2["uno"]."', '".base64_encode($post["link-archivo"])."', '".base64_encode($post["link-miniatura"])."', '".base64_encode($post["nombre-material"])."', '".base64_encode($post["materia-info"])."', '".$tags."', '".base64_encode(date('l jS F Y h-i-s A'))."' , NULL, NULL)";
     $result = consulta($mysqli, $sql);
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
     $sql = "UPDATE Archivos SET tres = '".base64_encode($post["profesor"])."', cinco = '".base64_encode($post["link-archivo"])."', seis = '".base64_encode($post["link-miniatura"])."', siete = '".base64_encode($post["nombre-material"])."', ocho = '".base64_encode($post["materia-info"])."', nueve = '".$tags."', doce = '".base64_encode(date('l jS F Y h-i-s A'))."' WHERE id =".$row["id"];
     $result = consulta($mysqli, $sql);
  }
}

function favorite($session, $get){
  $mysqli = new mysqli('bys90mwmlxp3h3btspjg-mysql.services.clever-cloud.com', 'u031mxblwmv6jste', 'TNxAJsElicGfsD5VPgyD', 'bys90mwmlxp3h3btspjg');
  include_once "conexion.php";

  session_start();
  $sql = "SELECT * FROM Perfil WHERE id =". $session;
  $result = consulta($mysqli, $sql);
  $row2 = mysqli_fetch_assoc($result);

  $var = "'".$get."'";
  $var2 = base64_decode($row2["tres"]).", '".$get."'";
  if ($row2["tres"] == NULL) {
      $sql = "UPDATE Perfil SET tres = '".base64_encode($var)."' WHERE id =". $session;
      $result = consulta($mysqli, $sql);
  }else{
      $sql = "UPDATE Perfil SET tres = '".base64_encode($var2)."' WHERE id =". $session;
      $result = consulta($mysqli, $sql);
  }
}
?>