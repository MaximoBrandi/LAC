<?php 

include_once "conexion.php";

session_start();
$result = consulta($mysqli, "SELECT * FROM Perfil WHERE id =".$_SESSION["Login"]);
$row = mysqli_fetch_assoc($result);

$dresz = "'".$_GET["id"]."'";
$pos = strpos(base64_decode($row["tres"]), $dresz);

if($pos === false) {
    echo "kya";
}

?>