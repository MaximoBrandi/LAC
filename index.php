<?php 
include "functions/conexion.php";
error_reporting(0);

$result = consulta($mysqli, "SELECT id FROM Archivos WHERE once IS NULL");
$rows = mysqli_num_rows($result);

$result = consulta($mysqli, "SELECT id FROM Usuarios WHERE siete IS NULL");
$rows2 = mysqli_num_rows($result);

$result = consulta($mysqli, "SELECT id FROM Usuarios WHERE cinco = 'YWRtaW4=' OR cinco = 'Y29sYWJvcmFkb3I='");
$colaboradores = mysqli_num_rows($result);

$rows5 = "";
session_start();


$remplazar = array('Mon' => 'Lunes', 'Tue' => 'Martes', 'Wed' => 'Miercoles', 'Thu' => 'Jueves', 'Fri' => 'Viernes');

$strx = str_replace( array_keys( $remplazar ),array_values( $remplazar ),date("D"));
$strxz = str_replace( array_keys( $remplazar ),array_values( $remplazar ),date("d F"));
if (isset($_SESSION["Login"])) {
  $sql = "SELECT * FROM Perfil WHERE id = ".$_SESSION["Login"];
  $result = consulta($mysqli, $sql);
  $rows5 = mysqli_fetch_assoc($result);

  $resulty = consulta($mysqli, "SELECT * FROM Materias WHERE cinco LIKE '%".$strxz."%'");

  $zia = explode(" ", $strxz);
  $zia[0] = $zia[0] + 1;
  $stzx = implode(" ", $zia);
  $resultm = consulta($mysqli, "SELECT * FROM Materias WHERE cinco LIKE '%".$stzx."%'");
}
$xz = str_replace( array_keys( $remplazar ),array_values( $remplazar ),date('D'));

$phrase1 = "alertify.alert().setContent('<center><img height=400 src=images/schedule/".$xz."-m.png>";
$phrase2 = "<img height=400 src=images/schedule/".$xz."-t.png></center>').show();";
$phrase3 = "</center>').show()";
$wos = "images/schedule/".$xz."-t.png";
?>

<html style="font-size: 13px;" lang="es-AR">
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
    <script src="dist/js/alertify.js"></script>
    <link rel="stylesheet" href="dist/css/alertify.css" />
    <link rel="stylesheet" href="dist/css/themes/semantic.css" />
    <script src="dist/js/alertify-functions.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="LAC, Libre Apoyo Curricular, 0, 0, 0, 0">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Inicio</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="inicio.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link rel="icon" href="images/favicon1.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Libre Apoyo Curricular",
		"logo": "images/LogoTransMed.png",
		"sameAs": [
				"https://t.me/+T6AcLgYlwBU1MGFh",
				"mailto:delegacion510.2022@gmail.com"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Inicio">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="index.php" data-home-page-title="Inicio" class="u-body u-xl-mode"><header class="u-clearfix u-grey-10 u-header u-header" id="sec-926c"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" data-page-id="845102490" class="u-image u-logo u-image-1" data-image-width="699" data-image-height="700" title="Inicio">
          <img src="images/LogoTransMed.png" class="u-logo-image u-logo-image-1">
        </a>
        <h1 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">LAC<br>
        </h1>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <?php
            if (isset($rows5["uno"])) {
              if ($rows5["nueve"] != NULL || $rows5["nueve"] != '' ) {
                echo "<script>alertify.set('notifier','position', 'top-center');</script>";
                echo $rows5["nueve"];
                $nya = consulta($mysqli, "UPDATE Perfil SET nueve = '' WHERE id = ".$_SESSION["Login"]);
              }
            }
            ?>
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="index.php" style="padding: 10px 0px;">Inicio</a>
<?php if (isset($_SESSION["Login"])){echo "<script>Push.Permission.request();</script></li><li class='u-nav-item'><a class='u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90' href='perfil.php' style='padding: 10px 0px;'>Perfil</a>"; } else {echo "</li><li class='u-nav-item'><a class='u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90' href='registrase.php' style='padding: 10px 0px;'>Registrarse / Iniciar Sesion</a>";}?>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item">
<?php if (isset($_SESSION["Login"])){echo "<a class='u-button-style u-nav-link' href='perfil.php' style='padding: 10px 0px;'>Perfil</a>"; } else {echo "<a class='u-button-style u-nav-link' href='registrase.php' style='padding: 10px 0px;'>Registrarse / Iniciar sesion</a>";}?>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <script></script>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-d508">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Libre Apoyo Curricular</h1>
        <p class="u-text u-text-2">Utiliza y aporta materiales de ayuda y cursos para las materias del curso en el actual año 2022<br>Utiliza el calendario de tareas y exámenes para organizarte sin perderle pista a nada.<br><br><a onclick="<?php echo $phrase1; if(file_exists($wos)){echo $phrase2;} else {echo $phrase3;}?>">  Horarios de hoy <?php echo $strx; ?></a><br> Tareas para hoy: <?php if($resulty->num_rows > 0) { while($rowq = $resulty->fetch_assoc()) { $rae = explode("_", $rowq["cinco"]); echo $rae[0]." ".$rowq["uno"];} }?>  <br> Tareas para mañana: <?php if($resultm->num_rows > 0) { while($rowq = $resultm->fetch_assoc()) { $rae = explode("_", $rowq["cinco"]); echo $rae[0];} }?> </p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-bf0d">
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <h1 class="u-text u-title u-text-1" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">10</h1>
              <p class="u-text u-text-2">Materias</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <h1 class="u-text u-title u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><?php echo $rows; ?></h1>
              <p class="u-text u-text-4">Elementos de ayuda</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <h1 class="u-text u-title u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">1</h1>
              <p class="u-text u-text-6">Colaboradores</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-4">
              <h1 class="u-text u-title u-text-7" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><?php echo $rows2; ?></h1>
              <p class="u-text u-text-8">Alumnos registrados</p>
            </div>
          </div>
        </div>
      </div>
      <div class="u-layout-horizontal u-list u-list-2">
        <div class="u-repeater u-repeater-2">
          <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5">
              <h1 class="u-align-center-xs u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-title u-text-9">Materias</h1>
              <h2 class="u-subtitle u-text u-text-default u-text-10">Contenido por materias</h2>
              <a href="materias.php" data-page-id="102623523" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-hover-feature u-none u-text-black u-text-hover-white u-btn-1">Materias</a>
            </div>
          </div>
          <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-list-item-6">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-6">
              <h1 class="u-align-center-xs u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-title u-text-11">Cursos</h1>
              <h2 class="u-subtitle u-text u-text-default u-text-12">Cursos de apoyo</h2>
              <a href="cursos.php" data-page-id="933423666" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-hover-feature u-none u-text-black u-text-hover-white u-btn-2">Cursos</a>
            </div>
          </div>
          <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-7">
              <h1 class="u-align-center-xs u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-title u-text-13">Calendario</h1>
              <h2 class="u-subtitle u-text u-text-default u-text-14">Calendario 5° 10°</h2>
              <a href="calendario.php" data-page-id="53839610" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-hover-feature u-none u-text-black u-text-hover-white u-btn-3">Calendario</a>
            </div>
          </div>
        </div>
        <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter-lg u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
        </a>
      </div>
      
      
      
      
    </section>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-c9d1"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="699" data-image-height="700">
          <img src="images/LogoTransMed.png" class="u-logo-image u-logo-image-1">
        </a>
        <div>
        <p class="u-align-center u-social-icons-1">
            ver0.4-3b
          </p>
          <a target="_blank" href="https://docs.google.com/document/d/1KNlCQGzTXXfai6aKiVD7kUM_jsNogXfUrbiv8hlODYk" class="u-align-center u-social-icons-1">
            Creditos y postularse
          </a>
        </div>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" target="_blank" data-type="Telegram" title="Telegram" href="https://t.me/+T6AcLgYlwBU1MGFh"><span class="u-icon u-social-icon u-social-telegram u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9fce"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-9fce"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M18.4,53.2l64.7-24.9c3-1.1,5.6,0.7,4.7,5.3l0,0l-11,51.8c-0.8,3.7-3,4.6-6.1,2.8L53.9,75.8l-8.1,7.8
	c-0.9,0.9-1.7,1.6-3.4,1.6l1.2-17l31.1-28c1.4-1.2-0.3-1.9-2.1-0.7L34.2,63.7l-16.6-5.2C14,57.4,14,54.9,18.4,53.2L18.4,53.2z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="Email" title="Email" href="mailto:delegacion510.2022@gmail.com"><span class="u-icon u-social-email u-social-icon u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-678d"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-678d"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path id="path3864" fill="#FFFFFF" d="M27.2,28h57.6c4,0,7.2,3.2,7.2,7.2l0,0v42.7c0,3.9-3.2,7.2-7.2,7.2l0,0H27.2
	c-4,0-7.2-3.2-7.2-7.2V35.2C20,31.1,23.2,28,27.2,28 M56,52.9l28.8-17.8H27.2L56,52.9 M27.2,77.7h57.6V43.5L56,61.3L27.2,43.5V77.7z
	"></path></svg></span>
          </a>
        </div>
      </div></footer>
  </body>
</html>