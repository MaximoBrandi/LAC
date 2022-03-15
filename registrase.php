<?php 
error_reporting(0);
include "functions/checkSession.php";
checkSession(1);
include "functions/functions.php";
$GLOBALS["register"] = "1";

if (isset($_POST["name"])) {
  $GLOBALS["register"] = register($_POST);
}


?>

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
    <meta name="keywords" content="LAC, Registrarse / Iniciar sesion">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Registrarse</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="registrase.css" media="screen">
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
    <meta property="og:title" content="Registrarse">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-grey-10 u-header u-header" id="sec-926c"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index" data-page-id="845102490" class="u-image u-logo u-image-1" data-image-width="699" data-image-height="700" title="Inicio">
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
          <?php 
          
          if ($GLOBALS["register"] == "true") {
            echo "<script>alertSuccessfulRegister()</script>";
          } else if ($GLOBALS["register"] == "false"){
            echo "<script>alertErrorRegister()</script>";
          }
          
          ?>

               <script>DarkReader.enable({
                brightness: 100,
                contrast: 90,
                sepia: 10
            });</script>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="index" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="registrase" style="padding: 10px 0px;">Registrarse / Iniciar sesión</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="registrase" style="padding: 10px 0px;">Registrarse / Iniciar sesión</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-5ba3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Registrarse / Iniciar sesión</h1>
        <p class="u-text u-text-2">Aquí puedes iniciar sesión o registrarte&nbsp;</p>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-0c1f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">Registrate<br>
        </h2>
        <a href="iniciar-sesion" data-page-id="714603816" class="u-active-none u-border-2 u-border-active-palette-2-dark-1 u-border-hover-palette-2-base u-border-palette-1-base u-btn u-button-style u-hover-none u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-1">o Inicia sesión<br>
        </a>
        <div class="u-form u-form-1">
          <form action="registrase" method="POST" class="u-form-spacing-10" name="formm" style="padding: 10px;">
            <div class="u-form-group u-form-name">
              <label for="name-1081" class="u-label">Nombre y Apellido</label>
              <input type="text" placeholder="Introduzca su nombre" id="name-1081" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-1081" class="u-label">Email</label>
              <input type="email" placeholder="Introduzca una dirección de correo electrónico válida" id="email-1081" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-4660" class="u-label">Curso</label>
              <input type="text" placeholder="Introduzca aquí el curso al que pertenece" id="text-4660" name="curso" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
            </div>
            <div class="u-form-group u-form-group-4">
              <label for="text-6857" class="u-label">Contraseña</label>
              <input type="password" placeholder="Ingrese la contraseña de su cuenta" id="text-6857" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
            </div>
            <div class="u-form-group u-form-group-5">
              <label for="text-3c64" class="u-label">Código de verificacion</label>
              <input type="text" placeholder="Introduzca el código que recibió para registrarse" id="text-3c64" name="verification" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" maxlength="32">
            </div>
            <style>/* From cssbuttons.io by @lenin55 */
.cl-toggle-switch {
 position: relative;
}

.cl-switch {
 position: relative;
 display: inline-block;
}
/* Input */
.cl-switch > input {
 appearance: none;
 -moz-appearance: none;
 -webkit-appearance: none;
 z-index: -1;
 position: absolute;
 right: 6px;
 top: -8px;
 display: block;
 margin: 0;
 border-radius: 50%;
 width: 40px;
 height: 40px;
 background-color: rgb(0, 0, 0, 0.38);
 outline: none;
 opacity: 0;
 transform: scale(1);
 pointer-events: none;
 transition: opacity 0.3s 0.1s, transform 0.2s 0.1s;
}
/* Track */
.cl-switch > span::before {
 content: "";
 float: right;
 display: inline-block;
 margin: 5px 0 5px 10px;
 border-radius: 7px;
 width: 36px;
 height: 14px;
 background-color: rgb(0, 0, 0, 0.38);
 vertical-align: top;
 transition: background-color 0.2s, opacity 0.2s;
}
/* Thumb */
.cl-switch > span::after {
 content: "";
 position: absolute;
 top: 2px;
 right: 16px;
 border-radius: 50%;
 width: 20px;
 height: 20px;
 background-color: #fff;
 box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
 transition: background-color 0.2s, transform 0.2s;
}
/* Checked */
.cl-switch > input:checked {
 right: -10px;
 background-color: #85b8b7;
}

.cl-switch > input:checked + span::before {
 background-color: #85b8b7;
}

.cl-switch > input:checked + span::after {
 background-color: #018786;
 transform: translateX(16px);
}
/* Hover, Focus */
.cl-switch:hover > input {
 opacity: 0.04;
}

.cl-switch > input:focus {
 opacity: 0.12;
}

.cl-switch:hover > input:focus {
 opacity: 0.16;
}
/* Active */
.cl-switch > input:active {
 opacity: 1;
 transform: scale(0);
 transition: transform 0s, opacity 0s;
}

.cl-switch > input:active + span::before {
 background-color: #8f8f8f;
}

.cl-switch > input:checked:active + span::before {
 background-color: #85b8b7;
}
/* Disabled */
.cl-switch > input:disabled {
 opacity: 0;
}

.cl-switch > input:disabled + span::before {
 background-color: #ddd;
}

.cl-switch > input:checked:disabled + span::before {
 background-color: #bfdbda;
}

.cl-switch > input:checked:disabled + span::after {
 background-color: #61b5b4;
}</style>
            <div class="cl-toggle-switch u-form-group u-form-group-5">
              <label class="cl-switch">
                <label for="text-3c64" class="u-label">Modo oscuro</label>
                <input name="theme" value="black" type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <input type="submit" value="Enviar" class="u-btn u-btn-submit u-button-style">
            </div>
          </form>
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
