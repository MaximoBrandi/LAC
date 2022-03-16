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

$sexo = NULL;
echo $sexo . "uno";

//UPDATE Perfil SET nueve = "<script>alertify.notify('LAC ha sido actualizada, disfruta de la nueva versión', 'success', 10, function(){ console.log('dismissed'); }).dismissOthers()</script>" WHERE id = 1

?>