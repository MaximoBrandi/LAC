<?php 
    error_reporting(0);
    include "functions/checkSession.php";
    include_once "functions/conexion.php";
    checkSession(0);
    
    $result = consulta($mysqli, "SELECT * FROM Materias WHERE seis = '".$_GET["mt"]."'");
    $rowy = mysqli_fetch_assoc($result);


    $remplazar = array(' ' => '');
    $xw = str_replace( array_keys( $remplazar ),array_values( $remplazar ),$_GET["mt"]);

    $pharagrap = "alertify.alert().set({'startMaximized':true, 'message':'<center><img height=400 src=images/materias/".$xw.".png></center>'}).show();";
?>

<!DOCTYPE html>
<html style="font-size: 13px;" lang="es-AR">
  <head>
  <script src="https://cdn.jsdelivr.net/npm/darkreader@4.9.46/darkreader.min.js"></script>
    <script src="dist/js/alertify.js"></script>
    <link rel="stylesheet" href="dist/css/alertify.css" />
    <link rel="stylesheet" href="dist/css/themes/semantic.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="LAC, Materia">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Materia</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="materia.css" media="screen">
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
    <meta property="og:title" content="Materia">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-grey-10 u-header u-header" id="sec-926c"><div class="u-clearfix u-sheet u-sheet-1">
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
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="materias.php" style="padding: 10px 0px;">Materias</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="index.php" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="perfil.php" style="padding: 10px 0px;">Perfil</a>
</li></ul>
          </div>
          <?php 
            
            if ($_SESSION["theme"] == "black") {
              echo "            <script>DarkReader.enable({
                brightness: 100,
                contrast: 90,
                sepia: 10
            });</script>";
            }
            
            ?>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="materias.php" style="padding: 10px 0px;">Materias</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="perfil.php" style="padding: 10px 0px;">Perfil</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-9ec7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1"><?php echo $_GET["mt"];?></h1>
        <div class="u-custom-php u-custom-php-1" data-custom-php="<!--custom_php--><?php
    echo $materianombre ?><!--/custom_php-->"></div>
        <p class="u-text u-text-2">Aqu?? encontraras utilidades o materiales que te ayudaran con <?php echo $rowy["uno"];?><br><br>Profesor: <?php echo $rowy["dos"];?><br><a onclick="<?php echo $pharagrap; ?>">Horario</a><br>Examenes: <?php if($rowy["cuatro"] !== "" || $rowy["cuatro"] == NULL){ echo "Ninguno"; }else{echo $rowy["cuatro"];}?><br>Tareas: <?php if($rowy["cinco"] == "" || $rowy["cinco"] == NULL){ echo "Ninguno"; }else{ $cosoz = explode("_",$rowy["cinco"]); echo $cosoz[0];}?><br><?php echo $rowy["siete"];?></p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-5b30">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-always u-gallery-1" id="carousel-8775">
          <div class="u-gallery-inner u-gallery-inner-1" role="listbox">
            <?php  
            $sql = "SELECT * FROM Archivos WHERE dos='".base64_encode($_GET["mt"])."' AND once IS NULL";
            $result = consulta($mysqli, $sql);
            if ($result->num_rows > 0) {
              // output data of each row
              $count = 1;
              while($row = $result->fetch_assoc()) {
                echo "<div class='u-effect-hover-liftUp u-gallery-item u-gallery-item-".$count."' data-href='material.php?id=".$row["id"]."'>
                  <div class='u-back-slide'>
                    <img class='u-back-image u-expanded' src='".base64_decode($row["seis"])."' alt='".base64_decode($row["siete"])."'>
                </div>
                  <div class='u-over-slide u-shading u-over-slide-1'>
                    <h3 class='u-gallery-heading'>".base64_decode($row["siete"])."</h3>
                    <p class='u-gallery-text'>".base64_decode($row["ocho"])."</p>
                  </div>
                </div>";
                $count = $count + 1;
              }
            } else {
              echo "0 results";
            }
            ?>

          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-209c">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-c9d1"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="699" data-image-height="700">
          <img src="images/LogoTransMed.png" class="u-logo-image u-logo-image-1">
        </a>
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
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>
