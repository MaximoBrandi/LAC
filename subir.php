<?php 
    error_reporting(0);
    include "functions/checkSession.php";
    include "functions/functions.php";
    checkSession(0);

    $return = "0";
    $id = "0";
    if (isset($_POST["materia"])) {
      session_start();
      $return = upload($_POST, $_SESSION["Login"]);
    }

?>

<!DOCTYPE html>
<html style="font-size: 13px;" lang="es-AR">
  <head>
  <script src="https://cdn.jsdelivr.net/npm/darkreader@4.9.46/darkreader.min.js"></script>
    <script src="dist/js/vex.combined.min.js"></script>
    <script>vex.defaultOptions.className = 'vex-theme-os'</script>
    <link rel="stylesheet" href="dist/css/vex.css" />
    <link rel="stylesheet" href="dist/css/vex-theme-default.css" />
    <script src="dist/js/vex.comands.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Subir</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="subir.css" media="screen">
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
    <meta property="og:title" content="Subir">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-grey-10 u-header u-header" id="sec-926c"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" data-page-id="845102490" class="u-image u-logo u-image-1" data-image-width="699" data-image-height="700" title="Inicio">
          <img src="images/LogoTransMed.png" class="u-logo-image u-logo-image-1">
        </a>
        <h1 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">LAC<br>
        </h1>
        <?php 
          
          if ($return[0] == "true") {
            echo "<script>alertSuccessfulUpload(".$return[1].")</script>";
          } else if ($return[0] == "false"){
            echo "<script>alertErrorUpload()</script>";
          }
          
          
          ?>
                      <?php 
            
            if ($_SESSION["theme"] == "black") {
              echo "            <script>DarkReader.enable({
                brightness: 100,
                contrast: 90,
                sepia: 10
            });</script>";
            }
            
            ?>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="index.php" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="perfil.php" style="padding: 10px 0px;">Perfil</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="perfil.php" style="padding: 10px 0px;">Perfil</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-3aa8">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Subir material</h1>
        <p class="u-text u-text-2">Utiliza y aporta materiales de ayuda y cursos para las materias del curso en el actual a??o 2022<br>Utiliza el calendario de tareas y ex??menes para organizarte sin perderle pista a nada.
        </p>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-326f">
      <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
        <div class="u-container-style u-grey-10 u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h1 class="u-text u-text-default u-text-1">Subir materiales</h1>
            <div class="u-form u-form-1">
              <form action="subir.php" method="POST" class="u-form-spacing-10" name="form" style="padding: 10px;">
                <div class="u-form-group u-form-name">
                  <label for="name-6cbd" class="u-label">Materia</label>
                  <input type="text" id="name-6cbd" name="materia" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" maxlength="40">
                </div>
                <div class="u-form-email u-form-group">
                  <label for="email-6cbd" class="u-label">Profesor</label>
                  <input type="text" id="email-6cbd" name="profesor" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" maxlength="60">
                </div>
                <div class="u-form-group u-form-group-3">
                  <label for="text-5717" class="u-label">Link archivo</label>
                  <input type="text" id="text-5717" name="link-archivo" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" maxlength="255">
                </div>
                <div class="u-form-group u-form-group-4">
                  <label for="text-41fe" class="u-label">Link imagen</label>
                  <input type="text" placeholder="" id="text-41fe" name="link-miniatura" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" maxlength="255">
                </div>
                <div class="u-form-group u-form-group-5">
                  <label for="text-9f72" class="u-label">Nombre material</label>
                  <input type="text" placeholder="" id="text-9f72" name="nombre-material" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" maxlength="75">
                </div>
                <div class="u-form-group u-form-textarea u-form-group-6">
                  <label for="textarea-c3dc" class="u-label">Informaci??n materia</label>
                  <textarea rows="4" cols="50" id="textarea-c3dc" name="materia-info" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" maxlength="255"></textarea>
                </div>
                <div class="u-form-group u-form-group-7">
                  <label for="text-190b" class="u-label">Tags</label>
                  <input type="text" placeholder="separados por &quot;/&quot;" id="text-190b" name="tags" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                </div>
                <div class="u-align-left u-form-group u-form-submit">
                  <input type="submit" value="Enviar" class="u-btn u-btn-submit u-button-style">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
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
  </body>
</html>
