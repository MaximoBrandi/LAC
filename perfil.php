<?php 
    error_reporting(0);
    include "functions/checkSession.php";
    include "functions/conexion.php";
    checkSession(0);

    session_start();
    $sql = "SELECT * FROM Usuarios WHERE id =". $_SESSION["Login"];
    $result = consulta($mysqli, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql = "SELECT * FROM Perfil WHERE id = ". $_SESSION["Login"];
    $result = consulta($mysqli, $sql);
    $row2 = mysqli_fetch_assoc($result);

    $likes = explode( '/', base64_decode($row2["siete"]));
    $cont = 0;

    //Delete account system

    if (isset($_GET["delete"])) {
      $sql = "UPDATE Usuarios SET siete ='DAE' WHERE id =".$_SESSION["Login"];
      consulta($mysqli, $sql);
      unset($_SESSION["Login"]);
      header('Location: index.php');
    }

    //Close session system

    if (isset($_GET["clss"])) {
      unset($_SESSION["Login"]);
      header('Location: index.php');
    }

    //Password change system

    $state = 0;
    if(isset($_POST["actu"]) && isset($_POST["nue1"]) && isset($_POST["nue2"])){
      $result = consulta($mysqli, "SELECT * FROM Usuarios WHERE id=" . $_SESSION["Login"]);
      $row = mysqli_fetch_assoc($result);
    
      if ($_POST["nue1"] == $_POST["nue2"] && md5($_POST["actu"]) == base64_decode($row["dos"])) {
        consulta($mysqli, "UPDATE Usuarios SET dos ='". base64_encode(md5($_POST["nue1"]))."' WHERE id =".$_SESSION["Login"]);
        $state = 1;
      }else{
        $state = 2;
      }
    }

    //User pic change system

    if (isset($_POST["webIMG"])) {
      $sql = "UPDATE Perfil SET dos = '".base64_encode($_POST["webIMG"])."' WHERE id =".$_SESSION["Login"];
      $result = consulta($mysqli, $sql);
      $state = 3;
    }
?>

<!DOCTYPE html>
<html style="font-size: 13px;" lang="es-AR">
  <head>
    <script src="dist/js/alertify.js"></script>
    <link rel="stylesheet" href="dist/css/alertify.css" />
    <link rel="stylesheet" href="dist/css/themes/semantic.css" />
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
    <title>Perfil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="perfil.css" media="screen">
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
    <meta property="og:title" content="Perfil">
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
      </div>
      <?php 
      
      if ($state == 1) {
        echo "<script>alertify.notify('Contraseña cambiada correctamente', 'success', 5, function(){  console.log('dismissed'); }).dismissOthers()</script>";
      }else if ($state == 2){
        echo "<script>alertify.notify('Error al cambiar la contraseña', 'error', 5, function(){  console.log('dismissed'); }).dismissOthers()</script>";
      }else if ($state == 3) {
        echo "<script>alertify.notify('Foto de perfil cambiada', 'success', 5, function(){  console.log('dismissed'); }).dismissOthers()</script>";
      } 
      
      ?>
    </header>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-c925">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Perfil</h1>
        <p class="u-text u-text-2">Aquí puedes configurar él como otras personas pueden verte, ver tus favoritos y tus comentarios</p>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-36e7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-align-center u-text u-title u-text-1">Favoritos<br>
                  </h1>
                  <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" id="carousel-63be">
                    <div class="u-gallery-inner u-gallery-inner-1" role="listbox">
                    <?php  
                    if ($row2["tres"] != NULL) {
                      $sql = "SELECT * FROM Archivos WHERE id IN (".base64_decode($row2["tres"]).") AND once IS NULL";
                      $result = consulta($mysqli, $sql);
                      if ($result->num_rows > 0) {
                        $count = 1;
                        while($rowt = $result->fetch_assoc()) {
                          echo "
                          <div class='u-effect-fade u-gallery-item u-gallery-item-".$count."' data-href='material.php?id=".$rowt["id"]."' data-image-width='256' data-image-height='256'>
                          <div class='u-back-slide'>
                            <img class='u-back-image u-expanded' src='".base64_decode($rowt["seis"])."'>
                          </div>
                          <div class='u-align-center u-over-slide u-shading u-over-slide-1'>
                            <h3 class='u-gallery-heading'></h3>
                            <p class='u-gallery-text'></p>
                          </div>
                        </div>";
                          $count = $count + 1;
                        }
                      } else {
                        echo "0 results";
                      }
                    }else{
                      echo "Vacio";
                    }
            ?>
 
                    </div>
                  </div>
                  <h4 class="u-align-center u-text u-text-default u-text-2">
                    <?php if ($row2["tres"] != NULL) {
                      echo "<a class='u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1' href='buscar.php?fav=".base64_encode($_SESSION["Login"])."'>Ver mas</a>";
                    } ?>
                  </h4>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                  <h1 class="u-align-center u-text u-title u-text-3">Favoritos<br>
                  </h1>
                  <div class="u-container-style u-expanded-width u-grey-10 u-group u-group-1">
                  <?php 
                      $sql = "SELECT * FROM Comentarios WHERE uno ='".$row["uno"]."' AND cinco IS NULL";
                      $result = consulta($mysqli, $sql);
                      if ($result->num_rows > 0) {
                        while($rowz = $result->fetch_assoc()) {
                          $result = consulta($mysqli, "SELECT siete FROM Archivos WHERE id =".base64_decode($rowz["tres"]));
                          $trieszs = mysqli_fetch_assoc($result);
                          echo "<div class='u-container-layout u-container-layout-3'>
                          <p class='u-text u-text-5'>".base64_decode($rowz["dos"])."</p>
                          <h5 class='u-text u-text-default u-text-6'>".base64_decode($trieszs["siete"])."</h5>
                        </div>";
                        if ($cont > 0) {
                          break;
                        }
                        $cont = $cont + 1;
                        }
                      } else {
                        echo "0 results";
                      }
                  ?>
                  </div>
                  <h4 class="u-align-center u-text u-text-default u-text-7">
                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="comentarios.php?id=<?php echo $_SESSION["Login"]; ?>">Ver mas</a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width-xs u-layout-wrap u-layout-wrap-2">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-4">
                  <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-1" src="<?php echo base64_decode($row2['dos']); ?>" alt="" data-image-width="256" data-image-height="256"><span class="u-icon u-icon-1"><svg onclick="changeUserPic()" class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52 52" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9b46"></use></svg><svg class="u-svg-content" viewBox="0 0 52 52" x="0px" y="0px" id="svg-9b46" style="enable-background:new 0 0 52 52;"><path d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M38.5,28H28v11c0,1.104-0.896,2-2,2
             	s-2-0.896-2-2V28H13.5c-1.104,0-2-0.896-2-2s0.896-2,2-2H24V14c0-1.104,0.896-2,2-2s2,0.896,2,2v10h10.5c1.104,0,2,0.896,2,2
	            S39.604,28,38.5,28z"></path></svg></span>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-4">
                <div class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-container-layout-5">
                  <h2 class="u-text u-text-default u-text-8"><?php echo base64_decode($row["uno"]);?></h2>
                  <h3 class="u-text u-text-default u-text-9"><?php echo base64_decode($row["cinco"]);?></h3>
                  <h3 class="u-text u-text-default u-text-10"><?php echo base64_decode($row["cuatro"]) ?></h3>
                  <h3 class="u-text u-text-default u-text-11"><?php echo "Likes: ".$likes[0]." Dislikes: ".$likes[1] ?></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                <button onclick="alertChangePassword()" class="u-btn u-button-style u-hover-feature u-hover-palette-1-dark-1 u-palette-1-base u-btn-3" data-animation-name="pulse" data-animation-duration="1000" data-animation-direction="">Cambiar<br>&nbsp;contraseña
                </button>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
                <button onclick="alertCloseSession()" class="u-btn u-button-style u-hover-feature u-hover-palette-1-dark-1 u-palette-1-base u-btn-4" data-animation-name="pulse" data-animation-duration="1000" data-animation-direction="">Eliminar<br>&nbsp;cuenta<br>
                </button>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-8">
                <button onclick="alertDeleteAccount()" class="u-btn u-button-style u-hover-feature u-hover-palette-1-dark-1 u-palette-1-base u-btn-5" data-animation-name="pulse" data-animation-duration="1000" data-animation-direction="">Cerrar sesión</button>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-9">
                <a href="subir.php" class="u-btn u-button-style u-hover-feature u-hover-palette-1-dark-1 u-palette-1-base u-btn-6" data-animation-name="pulse" data-animation-duration="1000" data-animation-direction="">Agregar<br>archivos
                </a>
              </div>
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
